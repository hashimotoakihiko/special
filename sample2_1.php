2-PHP基礎2
2-1 PHPの基礎2　配列、繰り返し文
2-1-1 配列

    //値と型の項目で簡単に説明した配列について。 配列は添字、値からなる特殊な型のひとつです。
    //配列の宣言と代入
    //次がint型を配列を格納した場合の例です。配列は基本的に添字(そえじ、key)と要素(value)からなり、指定を行わない場合、添字は0, 1, 2の順番でセットされます。

    //================コード=====================
    # 変数名 = array(要素1, 要素2, 要素3 ....);
    $numberList = array(1, 2, 3);
    /* 次の様に格納されています
    [0] => (int) 1,
    [1] => (int) 2,
    [2] => (int) 3
    */
    # 空の配列に値を追加する方法(添字指定)
    $numberList = array();
    $numberList[0] = 1;
    $numberList[1] = 2;
    $numberList[2] = 3;
    # 空の配列の最後に値を追加する方法
    # $numberList[3] = 4;と同様である。
    $numberList[] = 4;
    //================コード=====================

    //配列の値の取り出し
    //配列の出力を行う際、基本的には添字を指定して出力します。

    //================コード=====================
    $array = array(1, 2, 3);
    # 配列内の値は変数[添字]で指定して取得します。
    echo $array[0]; # 1
    echo $array[1]; # 2
    echo $array[2]; # 3
    //================コード=====================

    //配列の長さを取得する
    //後述のループ処理などでは、配列の長さ(要素が何個あるか)を取得する必要が出てきます。count() 関数を利用することで、配列の長さを取得できます。
    //・例文

    //================コード=====================
    $array = array(1, 2, 3);
    echo count($array);
    # 出力結果
    # 3
    //================コード=====================

    //多次元配列
    //配列の要素を配列とすることもでき、配列内の要素を配列にすることを多次元配列といいます。

    //================コード=====================
    
    $array = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9),
    array(10, 11, 12),
    );
    echo $array[0][0] . '\n';
    echo $array[0][2] . '\n';
    echo $array[1][1] . '\n';
    echo $array[2][0] . '\n';
    echo $array[3][2] . "\n";
    echo count($array) . '\n';
    echo count($array[0]);
    # 出力結果
    /*
    1
    3
    5
    7
    12
    4
    3
    */
    //================コード=====================

    //配列の要素を配列し、さらにその配列の要素を配列にするなど、多次元配列は複数の次元(2次元の配列、3次元の配列, 4次元の...などと呼ぶ)にし、階層を深くすることも可能です。
    IMG_7419.PNG を表示しています。

    //================コード==================

    # 深い多次元配列の例
    $array = array(
    array(
    array(
    array(
    array(
    1, 2, 3, 4
    )
    )
    )
    )
    );
    echo $array[0][0][0][0][3] . '\n';
    echo count($array[0][0][0][0]);
    # 出力結果
    # 4
    # 4
    //================コード==================

    //配列の添字は、基本的に指定しない場合は0, 1, 2 ...となると説明しました。
    //添字を指定して作成する配列を連想配列といいます。(添字から要素の値を連想することから)

    //================コード==================
    # 基本的な連想配列
    $user = array(
    'name' => '太郎',
    'age' => 10,
    'address' => '東京都新宿区〇〇町〇-〇-〇-〇〇〇号室',
    'phone' => '03-××××-××××'
    );
    echo '名前: ' . $user['name'] . '\n';
    echo '年齢: ' . $user['age'] . '歳\n';
    echo '住所: ' . $user['address'] . '\n';
    echo '電話: ' . $user['phone'] . '\n';
    # 出力結果
    /*
    名前: 太郎
    年齢: 10歳
    住所: 東京都新宿区〇〇町〇-〇-〇-〇〇〇号室
    電話: 03-××××-××××
    */
    //================コード==================

    //また、連想配列は次の様に多次元の連想配列とすることもできます。

    //================コード==================
    # 多次元の連想配列(複数の人の情報を格納するなどできる)
    $user = array(
    array(
    'name' => '太郎',
    'age' => 10,
    'address' => '東京都新宿区〇〇町〇-〇-〇-〇〇〇号室',
    'phone' => '03-××××-××××'
    ),
    array(
    'name' => '二郎',
    'age' => 8,
    'address' => '東京都新宿区〇〇町〇-〇-〇-〇〇〇号室',
    'phone' => '03-××××-××××'
    )
    );
    echo '名前: ' . $user[0]['name'] . '\n';
    echo '年齢: ' . $user[0]['age'] . '歳\n';
    echo '住所: ' . $user[0]['address'] . '\n';
    echo '電話: ' . $user[0]['phone'] . '\n';
    echo "\n";
    echo '名前: ' . $user[1]['name'] . '\n';
    echo '年齢: ' . $user[1]['age'] . '歳\n';
    echo '住所: ' . $user[1]['address'] . '\n';
    echo '電話: ' . $user[1]['phone'] . '\n';
    # 出力結果(いずれも以下の結果になる)
    /*
    名前: 太郎
    年齢: 10歳
    住所: 東京都新宿区〇〇町〇-〇-〇-〇〇〇号室
    電話: 03-××××-××××
    名前: 二郎
    年齢: 8歳
    住所: 東京都新宿区〇〇町〇-〇-〇-〇〇〇号室
    電話: 03-××××-××××
    */
    //================コード==================

2-1-2 繰り返し処理

    // 俗にループ処理とも呼ばれます(以下ループ処理)。例えば「1という数字を5回出力」したい場合は、今まではechoを5回行なっていました。

    //=================コード====================
    echo 1;
    echo 1;
    echo 1;
    echo 1;
    echo 1;
    //=================コード====================

    //ループ処理の種類
    //ループ処理は次の4種類があります。
    //for文
    //foreach文
    //while文
    //do-while文
    //一般的には for 文が最も多く採用され、処理の回数が決められていないものにはwhile文, do-while文が採用される傾向にあります。また、配列やオブジェクトをループで取り出す場合、構文がシンプルな foreach 文の利用が有効です
    //基本構文

    //=================コード====================
    # for文
    for(初期値; 条件; 初期値の四則演算) {
    # 処理
    }
    # foreach文
    foreach(配列 as 値) {
    # 処理 
    }
    # foreach文2
    foreach(配列 as 添字 => 値) {
    # 処理 
    }
    # while文
    while(条件) {
    # 処理
    }
    # do-while文
    do {
    # 処理
    } while (条件);
    //=================コード====================

    //for文
    //最も利用されるループ処理。処理は最もシンプルです。まずはfor文からマスターしましょう。ループ内でのみ利用するループカウンタ変数名 1は,一般的に $i から始まります。


ループカウンタ変数
    //=================コード====================
    # ループ1回が終わるたびに、$iに1が加算され、
    # $iが5より大きく(この場合6)なったら処理を終了します
    for($i = 1; $i <= 5; $i ++) {
    echo $i . ' ';
    }
    # 出力結果
    # 1 2 3 4 5
    //=================コード====================

    //ループカウンタ変数は、ループ内でしか使用されない値のため、複数のループで定義することが可能です。

    //=================コード====================
    for ($i = 1; $i <= 5; $i ++) {
    echo $i . " ";
    }
    for ($i = 2; $i <= 6; $i ++) {
    echo $i . " ";
    }
    //=================コード====================

    //ループ内の処理にループ処理が増えるたび、ループカウンタ変数は $j , $k の様に記述するのが慣わし2です。例のような複雑なループを利用するケースもあるので、次のように少し噛み砕いて考えながら使って行きましょう。

    //=================コード====================
    # 2回ループします
    for($i = 1; $i <= 2; $i ++) {
    # $iが2回ループするので2 * 2 = 4回ループします
    for ($j = 1; $j <= 2; $j ++) {
    # 2 * 2 * 2 = 8回ループします
    for ($k = 1; $k <= 2; $k ++) {
    # 2 * 2 * 2 * 2 = 16回ループします
    for ($l = 1; $l <= 2; $l ++) {
    # $lが1, 2の順番で出力されます
    # 外のfor文が8回ループしているので、8回、「1 2 」が出力されます
    echo $l . " ";
    }
    }
    }
    }
    # 出力結果) 1 2 1 2 1 2 1 2 1 2 1 2 1 2 1 2
    //=================コード====================

//ループカウンタ変数はインクリメントに限らず、次の例の様にループ毎に様々な計算を行うことができます。

    //=================コード====================
    # 加算
    for($i = 10; $i <= 100; $i += 10){
    echo $i . " ";
    }
    # 出力結果) 10 20 30 40 50 60 70 80 90 100
    # 減算
    for($i = 10; $i > 0; $i --) {
    echo $i . " ";
    }
    # 出力結果) 10 9 8 7 6 5 4 3 2 1
    for($i = 10; $i > 0; $i -= 2) {
    echo $i . " ";
    }
    # 出力結果) 10 8 6 4 2 
    # 乗算
    for($i = 10; $i < 100; $i *= 2) {
    echo $i . " ";
    }
    # 出力結果) 10 20 40 80 
    # 除算
    for($i = 100; $i >= 1; $i /= 10) {
    echo $i . " ";
    }
    # 出力結果) 100 10 1
    //=================コード====================

    //ループ処理とループ処理、さらには条件文などを織り交ぜて記述することで、より複雑な処理とすることができます。

    //=================コード====================
    // 何回出力したかを表すカウンタ変数です
    $outputCount = 0;
    for ($i = 1; $i <= 4; $i ++) {
    for ($j = 1; $j <= 6; $j ++) {
    // $iと$jの和を3で割った余りが1だった場合に[ 1 - 3 ]のように出力します
    if (($i + $j) % 3 == 1) {
    // 出力例) [ 1 - 3 ]
    echo "[ " . $i . " - " . $j . " ] ";
    $outputCount ++;
    }
    }
    // [ 1 - 3 ]が6回以上出力されていれば改行します。
    if ($outputCount >= 6) {
    echo "\n";
    // カウンタ変数をリセットします
    $outputCount = 0;
    }
    }
    # 出力結果
    /*
    [ 1 - 3 ] [ 1 - 6 ] [ 2 - 2 ] [ 2 - 5 ] [ 3 - 1 ] [ 3 - 4 ]
    [ 4 - 3 ] [ 4 - 6 ]
    */
    //=================コード====================

//for文で配列をループする際の例です。count() 関数を活用することで、配列の長をを条件とすることもできます。配列の中身を配列の長さ分、ループしながら処理する場合は count() 関数を利用しましょう。

    //=================コード====================
    $array = array(1, 2, 3);
    # 配列の添字は0から始まり、2で終わります。初期値・条件に注意しましょう
    # $i < 3と入力するのは可変性が失われ、配列の長さによってNoticeが発生するので、避けましょう
    for($i = 0; $i < count($array); $i++) {
    echo $array[$i] . ' ';
    }
    # 出力結果
    # 1 2 3
    # 多次元配列にも対応可能です
    $array = array(
    array(1, 2, 3, 4),
    array(5, 6, 7, 8, 9)
    );
    for($i = 0; $i < count($array); $i++) {
    for($j = 0; $j < count($array[$i]); $j++) {
    echo $array[$i][$j] . ' ';
    }
    echo "\n";
    }
    # 出力結果
    /*
    1 2 3 4
    5 6 7 8 9
    */
    //=================コード====================

    //for文が一度も実行されない例です。正常な条件設定がされないとループが実行されないことに注意しましょう。

    //=================コード====================
    $upper = 10;
    # $iは$upperより小さい値ではないため、一度もループしません
    for($i = 10; $i < $upper; $i ++) {
    # 処理
    }
    //=================コード====================

    //for文での無限ループの例です。
    次の様な条件では、無理やり $i に値を代入したり、終了条件を設定して break; を実行しない限り、ループが終わることはありません。無限ループは基本的にバグの温床となり易いので。よく考えて利用する様にしましょう。

    //=================コード====================
    # 何度ループしても$iは10より小さい値のため
    for($i = 9; $i < 10; $i --) {}
    # 何度ループしても$iは0より大きい値となるため
    for($i = 1; $i > 0; $i ++) {}
    # 条件は常にtrueのため
    for($i = 1; true; $i ++) {}
    //=================コード====================

    //for文で配列をループする際の例です。count() 関数を活用することで、配列の長をを条件とすることもできます。配列の中身を配列の長さ分、ループしながら処理する場合は count() 関数を利用しましょう。

    //=================コード====================
    $array = array(1, 2, 3);
    # 配列の添字は0から始まり、2で終わります。初期値・条件に注意しましょう
    # $i < 3と入力するのは可変性が失われ、配列の長さによってNoticeが発生するので、避けましょう
    for($i = 0; $i < count($array); $i++) {
    echo $array[$i] . ' ';
    }
    # 出力結果
    # 1 2 3
    # 多次元配列にも対応可能です
    $array = array(
    array(1, 2, 3, 4),
    array(5, 6, 7, 8, 9)
    );
    for($i = 0; $i < count($array); $i++) {
    for($j = 0; $j < count($array[$i]); $j++) {
    echo $array[$i][$j] . ' ';
    }
    echo "\n";
    }
    # 出力結果
    /*
    1 2 3 4
    5 6 7 8 9
    */
    //=================コード====================

    //for文が一度も実行されない例です。正常な条件設定がされないとループが実行されないことに注意しましょう。

    //=================コード====================
    $upper = 10;
    # $iは$upperより小さい値ではないため、一度もループしません
    for($i = 10; $i < $upper; $i ++) {
    # 処理
    }
    //=================コード====================

    //for文での無限ループの例です。
    次の様な条件では、無理やり $i に値を代入したり、終了条件を設定して break; を実行しない限り、ループが終わることはありません。無限ループは基本的にバグの温床となり易いので。よく考えて利用する様にしましょう。

    //=================コード====================
    # 何度ループしても$iは10より小さい値のため
    for($i = 9; $i < 10; $i --) {}
    # 何度ループしても$iは0より大きい値となるため
    for($i = 1; $i > 0; $i ++) {}
    # 条件は常にtrueのため
    for($i = 1; true; $i ++) {}
    //=================コード====================
    IMG_7419.PNG を表示しています。

//for文で配列をループする際の例です。count() 関数を活用することで、配列の長をを条件とすることもできます。配列の中身を配列の長さ分、ループしながら処理する場合は count() 関数を利用しましょう。

    //=================コード====================
    $array = array(1, 2, 3);
    # 配列の添字は0から始まり、2で終わります。初期値・条件に注意しましょう
    # $i < 3と入力するのは可変性が失われ、配列の長さによってNoticeが発生するので、避けましょう
    for($i = 0; $i < count($array); $i++) {
    echo $array[$i] . ' ';
    }
    # 出力結果
    # 1 2 3
    # 多次元配列にも対応可能です
    $array = array(
    array(1, 2, 3, 4),
    array(5, 6, 7, 8, 9)
    );
    for($i = 0; $i < count($array); $i++) {
    for($j = 0; $j < count($array[$i]); $j++) {
    echo $array[$i][$j] . ' ';
    }
    echo "\n";
    }
    # 出力結果
    /*
    1 2 3 4
    5 6 7 8 9
    */
    //=================コード====================

    //for文が一度も実行されない例です。正常な条件設定がされないとループが実行されないことに注意しましょう。

    //=================コード====================
    $upper = 10;
    # $iは$upperより小さい値ではないため、一度もループしません
    for($i = 10; $i < $upper; $i ++) {
    # 処理
    }
    //=================コード====================

    //for文での無限ループの例です。
    次の様な条件では、無理やり $i に値を代入したり、終了条件を設定して break; を実行しない限り、ループが終わることはありません。無限ループは基本的にバグの温床となり易いので。よく考えて利用する様にしましょう。

    //=================コード====================
    # 何度ループしても$iは10より小さい値のため
    for($i = 9; $i < 10; $i --) {}
    # 何度ループしても$iは0より大きい値となるため
    for($i = 1; $i > 0; $i ++) {}
    # 条件は常にtrueのため
    for($i = 1; true; $i ++) {}
    //=================コード====================

//空の配列でループを実行しようとすると一度も実行されません

    //=================コード====================
    # 空の配列を定義
    $array = array();
    # 配列の長さに応じてループされるため、一度も実行されない
    foreach($array as $key => $value) {
    echo $key . ': ' . $value . '\n';
    }
    //=================コード====================

    //注意点として、ループされないforeach文にて変数を定義しておくと、その後の処理に影響が出ます。

    //=================コード====================
    $array = array();
    # 配列が空なので、ループが実行されません
    foreach($array as $key => $value) {
    # $array2に$valueを追加したいですが ...
    $array2 [] =$value;
    }
    # 変数の定義が行われなかったのでエラーになります
    var_dump($array2);
    # 出力結果) Notice: Undefined variable: array2
    //=================コード====================

    //ループのスキップ、強制終了
    //各ループ処理には共通して処理のスキップ、終了するための文として continue; 、 break; というものがあります。特定の条件において、処理を実行したくない場合は条件文の中に記述します。

    //=================コード====================
    for($i = 1; $i < 10; $i++) {
    # 9の倍数なら、処理を終了します
    if($i % 9 === 0) {
    break;
    }
    # 奇数ならスキップします
    if($i % 2 === 1) {
    continue;
    }
    # スキップ、終了した場合は実行されません。
    echo $i . ' ';
    }
    # 出力結果
    # 2 4 6 8
    //=================コード====================

    //その他の繰り返し
    //whileやdo-whileという繰り返しの書き方もありますが補足資料としてまとめました。まずはfor文、foreach文が基本となるのでしっかり覚えましょう。
