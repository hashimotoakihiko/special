1-4 PHPの基本
1-4-1 ファイルの作成

$str = "ok";
echo $str;


// コメント
// # コメント

// /*
// コ
// メ
// ン
// ト
// */


//1-4-4 値と型について
// // int型

1;
5;
-100;

// //string型
"abc";
"あいう";
"123";
"a";

// 浮動小数点数型
5.12;
10.00001;

//boolean型
true;
false;
5 == 5; # true
5 > 5; # false
5 >= 5; # true
5 != 5; # false
5 != 4; # true
5 == '5'; # true
5 === 5; # true
5 === '5'; #false

// array型
array(1,2,3);
array("a",2,"c",false,null);
array(new Sample(),new Sample(),new Sample());

//多次元配列
array(
  array(1,2,3),
  array("a","b","c")
);

# 標準のキー
array(
  0 => 1,
  1 => 2,
  2 => 3,
);

# 連想配列
array(
  "name" => "太郎",
  "age" => "20"
);

//Object型
# オブジェクト型（クラス型）
class Sample{}
# オブジェクト自身です。
new Sample();

//NULL
# 何もないという意味です。
null;
?>

1-4-5 変数

// 変数
$a;
$b;
$age = 20;
$hobby = "スポーツ";

# これはすべて構文エラーになります。
$1;
$1aa;
$1000;

//代入

# int型
$number = 1;

# string型
$name = "太郎";

#boolean型
$isProgrammer = true;

#null型
$default = null;

# 配列型
$subject = array('数学','国語');

# オブジェクト型
class Sample{};
$sample = new Sample();

#PHPでは、次のように別の型の値を再代入することもできます
$sample = 1;


//出力

# int型
echo $number = 1;

# string型
echo $name = "太郎";

#boolean型
#echoすると、booleanはtrueは1で出力されます
var_dump($isProgrammer) = true;

#null型
#echoすると何も出力されません
var_dump($default) = null;

#array型
#[0]と[1]の部分はキー（添字）です
var_dump($subject); // array(5) { [0]=> string(6) "数学" [1]=> string(6) "国語"}
echo $subject[0]; #数学
echo $subject[1]; #国語
#エラーになります
echo $subject;


# Objctはクラスの項目で改めて説明あり。
var_dump($sample); //object(test\Sample)#1 (0) { }

