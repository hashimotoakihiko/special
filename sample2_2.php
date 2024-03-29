3-2 PHPの基礎2 関数
3-2-1 関数
組み込み関数

    プログラムを書いていると、ほぼ同じ処理を色々な場所で記述する必要が出てくることがあります。
    それらの処理をひとまとめにして呼び出せば、記述を簡略にし、メンテナンス性の向上ができますね。
    PHPではfunction(ファンクション, 関数の意)を定義・呼び出すことで処理の使い回しができます。
    functionには「ユーザー定義関数」と、あらかじめ用意されている「組み込み関数」の2種類が存在しま
    す。

    組み込み関数

    PHPでは予め呼び出すことで、特定の処理をしてくれる関数(組み込み関数)が用途ごとに様々なものが用
    意されています。
    関数は公式リファレンス3に全ての関数一覧が記載されていますが、公式リファレンスには関数リファレン
    スと呼ばれる、機能ごとに分かれた関数一覧もある4ので、こちらも参照しましょう。
    それでは早速、使用頻度のある関数をいくつか紹介して行きます。

    - strpos( string $haystack , mixed $needle [, int $offset = 0 ] )

    文字列 $haystack 内を検索し、 $needle が最初に現れる位置を1文字目を 0 として返します。
    また、第三引数に $offset を指定すると検索開始位置をずらすことができます。(省略可能です)
    文字列 $haystack 内に $needle が見つからなかった場合、 false が返って来ることに注意しまし
    ょう。
    日本語を利用する場合は mb_strpos() を利用しましょう。
    //=================コード====================
    $text = 'ABCDE';
    // Aを0として、Bが1, Cが2...という風に続きます。
    strpos($text, "A"); // 0
    strpos($text, "B"); // 1
    strpos($text, "C"); // 2
    strpos($text, "D"); // 3
    strpos($text, "E"); // 4
    // 存在しない文字を検索するとfalseが返ります
    strpos($text, "F"); // false
    // 大文字小文字の区別も行います
    strpos($text, "a"); // false
    //=================コード====================
    - substr( string $string , int $start [, int $length] )

    文字列 $string の $start で指定された位置から $length バイト分の文字列を返します。
    日本語を利用する場合は、 mb_substr() を利用しましょう。
    //=================コード====================
    $text = 'ABCDEFGHIJKLMN';
    // Aを0として、Bが1, Cが2...という風に続きます。
    $subString = substr($text, 2, 3);
    echo $subString;
    # 出力結果
    # CDE
    //=================コード====================
    - rsort
    配列の要素を確認して降順(大きい順)にソートします。
    他にも要素の昇順にソートをする sort() や配列のキーでソートする ksort() , krsort() , 連想配
    列でよく利用する asort() , arsort() などがあります。
    //=================コード====================
    $numbers = array(10, 5, 20, 15);
    rsort($numbers);
    var_dump($numbers);
    # 出力結果
    /*
    array(4) { [0]=> int(20) [1]=> int(15) [2]=> int(10) [3]=> int(5) }
    */
    //=================コード====================

    - time
    サーバー時間での現在のUNIXタイムスタンプを取得します。
    UNIXタイムスタンプとは世界標準時基準で1970年1月1日 00:00:00から現在の時刻までを秒数換算したも
    のです。
    日本は時差があるので1970年1月1日 09:00:00からの換算となります。
    //=================コード====================
    echo time();
    # 出力例(リアルタイムで値が変わるため、内容が異なる)
    # 1519648117
    //=================コード====================

    -date
    UNIXタイムスタンプを指定したフォーマットに変換します。
    日付にするためのフォーマットは関連リンク5を参照のこと。
    //=================コード====================
    #date()の第一引数はY年m月d日 ... のようにYmdなどのフォーマットを利用していれば、ある程度自由に設定できる
    $timestamp = date('Y-m-d H:i:s', time());
    echo $timestamp;
    # 出力結果
    # 2018-02-26 12:29:31
    //=================コード====================

    - isset
    変数に値がセットされており、 NULL ではないことをチェックします。
    チェックした変数に値がセットされており NULL 以外の値をとれば true 、そうでなければ false が
    返ってきます。
    空文字 "" や空の配列 array() 、 0 もチェックしたい場合は empty() を利用しましょう。
    //=================コード====================
    $a;
    $b = 2;
    $d = array();
    # false
    # 代入されていない(セットされていない)値はfalseとなる
    var_dump(isset($a));
    # true
    # 値が格納されていればtrue
    var_dump(isset($b));
    # false
    # 定義していない(セットされていない)値もfalseとなる
    var_dump(isset($c));
    # true
    # 空の配列は、NULL以外の値であるため、trueとなる
    var_dump($d);
    //=================コード====================
    isset() はif文と合わせて様々な場面で使用します。
    その他には is_int() や is_array() といった型を判断する関数もあります。
    ここでif文の条件についておさらいします。
    ユーザー定義関数
    あらかじめ用意されている組み込み関数だけでは、行いたい処理の共通化ができなくなる場合がよくあり
    ます。
    ある程度の複雑さのある計算や、複数の関数の呼び出しの共通化などです。
    そこで、開発者は自身が定義した関数(ユーザー定義関数)を用意することで、それらの問題を解決すること
    ができます。

    定義、呼び出し方法
    ユーザー定義関数の基本的な定義の方法は次の通りです。
    //=================コード====================
    # 定義方法
    function 関数名()
    {
    # 処理
    }
    # 呼び出し方法
    関数名();
    //=================コード====================

    それでは実際に関数を書いてみましょう。
    ユーザー定義関数の定義のルールは次のように function の後に関数名と () を記述し、 {} (波括弧)
    で囲ってその中に処理を記述して行きます。呼び出すときは関数の外で関数を呼び出せば、関数内の処理
    を実行してくれます。
    関数の呼び出し位置は、関数の上でも下でも問題なく呼び出すことができます。
    //=================コード====================
    // 関数を定義します
    function shuturyoku()
    {
    // 関数内では「Hello」の出力を実行します
    echo 'Hello';
    }
    // 関数を呼び出します
    shuturyoku();
    # 出力結果
    # Hello
    //=================コード====================

    引数
    ユーザー定義関数には引数(argment, アーグメントともいう)という変数を設定することができます。
    引数は関数の定義側を仮引数、呼び出し側で実際に設定する値・変数を実引数と呼びます。実引数を設定
    することで、
    関数内の仮引数に代入されます。 渡された実引数は、関数内でのみ利用することができます。
    //=================コード====================
    function 関数名(仮引数)
    {
    # 処理
    }
    関数名(実引数);
    //=================コード====================

    仮引数を設定している場合、引数を渡さないと Uncaught ArgumentCountError というエラーになります。
    //=================コード====================
    # 円の面積を求めて出力する関数 
    function showDiskArea($radius)
    { $pi = 3.14; echo ($radius * $radius * $pi); }
    showDiskArea(10); 
    # 出力結果 
    # 314

    //=================コード====================
    引数は複数設定することができます。
    //=================コード====================
    function showDiskArea($radius, $pi) 
    { echo ($radius * $radius * $pi); } 
    showDiskArea(10, 3.14); 
    # 出力結果 
    # 314

    //=================コード====================

    仮引数には、デフォルト引数(初期値)を設定することができます。 初期値を設定しておくと、実引数を渡さなくても初期値(例だと $radius = 10 )が利用されるため、エ ラーになりません。 エラーにならないことが、一見良いことかのように思えますが、エラーにならないことで、予期せぬ動作 をする可能性があるため、必ず値を引き渡すことを想定している仮引数には初期値は設定するべきではあ りません。 一般的に引き渡すことがオプションとなるケースが多い場合は、配列を引数に設定するなどしています。
    function showDiskArea($radius = 10) 
    { $pi = 3.14; 
    echo ($radius * $radius * $pi); } 
    showDiskArea(); 
    # 出力結果 
    # 314 

    # オプションとして値を渡す場合の例
    function showDiskArea($options = array('radius' => 10, 'pi' => 3.14)) { 
    echo ($options['radius'] * $options['radius'] * $options['pi']); 
    } 
    showDiskArea(); 
    echo "\n"; 
    showDiskArea(['radius' => 1000, 'pi' => 3.14159]); 
    # 出力結果 
    # 314 
    # 3141590


関数は関数内の処理を実行した後に呼び出し元へと処理を戻します。関数では処理を戻す際に、関数内で の計算結果などの値を呼び出し元に返すことができます。返ってきた値は一般的に返り値, 戻り値(return value)などと呼ばれ、呼び出し元で変数に代入したり出力するなどできます。 関数内での値の返却は、return文(return statement)の後に続けて値を記述することで、値を返却できます。
    //=================コード====================
    function getA() 
    { 
    $a = 'a'; 
    # 返り値の指定 return $a; } 
    # これはecho 'a';と同様です 
    echo getA(); 
    // 次の書き方だと'a';とやっているのと同様なので、何も起きません
    getA();
    //=================コード====================
    return; とした場合および、return文を記述しなかった場合の戻り値は NULL となります。
    //=================コード====================
    function getNone() {
    return;
    }

    function showA() {
    // 出力が返り値だと勘違いしやすいですが、返り値は別に存在します。
    echo 'a\n';
    }
    
    var_dump(getNone());
    echo '\n';
    var_dump(showA());
    # 出力結果
    /*
    NULL 
    a
    NULL
    */
    //=================コード====================
    また、return文を書くことで任意の場所で関数の処理を終了することができます。
    # 計算結果を出力する関数
    //=================コード====================
    function showCalculationResult($number, $factor)
    {
    # 乗算
    $calculationResult = $number * $factor;
    # 乗算結果が0以下であれば出力されます
    if($calculationResult <= 0) {
    echo '結果が0以下になりました。\n';
    return;
    }
    # 乗算結果が0以下の場合、出力されません
    echo '計算結果は' . $calculationResult . 'です。\n';
    }
    showCalculationResult(10, 1.1);
    showCalculationResult(10, -1);
    showCalculationResult(10, 0);
    # 出力結果
    /*
    計算結果は11です。
    結果が0以下になりました。
    結果が0以下になりました。
    */
    //=================コード====================

    関数から関数を呼び出す

    関数内では別の関数を呼び出すことができます。
    呼び出し元をAとし、最初に呼び出した関数をB, 関数で呼び出した関数をCとした場合、次の順番で処理が
    実行されます。
    1. b() を呼び出し
    2. b() で c を呼び出し
    3. c() で文字列 Hello を出力
    4. c() の処理が終わり、呼び出し元の b() に戻る
    5. b() の処理が終わり、呼び出し元に戻る
    6. 終了
    Aで b() を呼び出し、Bでは c() を呼び出しています。
    結果、Helloが出力されます

    //=================コード====================
    # A
    b();
    # B
    function b()
    {
    c();
    }
    # C
    function c()
    {
    echo 'Hello';
    }
    # 出力結果
    # Hello
    //=================コード====================
    次に、return文を実行した場合の例を確認してみましょう。
    1. Aで b() を呼び出し
    2. Bで c() を呼び出し
    3. Cで Hello という文字列を返却
    4. Bで c() を返却(文字列 Hello が返って来ています)
    5. b() に返って来た文字列 Hello を $a に代入
    6. $a を出力
    先ほどの例と同様に、Aで b() を呼び出していますが、 $a に代入しています。
    また、Cでは c() が文字列Helloを返却し、Bでは b() が c() の返り値を返却していますね。
    出力結果は先ほど同様に Hello となります。
    //=================コード====================
    # A
    $a = b();
    echo $a;
    # B
    function b()
    {
    return c();
    }
    # C
    function c()
    {
    return 'Hello';
    }
    # 出力結果
    # Hello
    //=================コード====================

    1. $i は integer , index などの頭文字が由来とされています。 ↩
    2. ループ処理を重ねる際、内側のループ処理のループカウンタ変数に $i は利用できない(外側のfor文
    のループに影響がある)ため、別名の変数名として単純にアルファベット順に $i , $j , $k ...と
    続いて記述します。 ↩
    3. http://php.net/manual/ja/indexes.functions.php ↩
    4. http://php.net/manual/ja/funcref.php ↩
    5. http://php.net/manual/ja/function.date.php
    
