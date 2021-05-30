// // はじめてのJavaScript
    // // JavaScriptとは何か︖
    // // JavaScriptはJavaやC⾔語に由来した構⽂を持つスクリプト⾔語です。この⾔語はその強⼒な⾔語機能
    // // から常に
    // // ⼈気上位をキープするプログラミング⾔語です。
    // // その⽤途は様々ですが、この⾔語を習得する理由の⼀つは「ブラウザで動作する⾔語」がJavaScriptだ
    // // けだからです(例外除く)。
    // // 「ブラウザで動作する」とはどういう事なのか、以下で確認しましょう。

    // //Hello world
    // // index.html
    // //=================コード====================
    // <!DOCTYPE html>
    // <html>
    // <head>
    // <title>はじめてのJavaScript</title>
    // <style>
    // body {
    // background: skyblue;
    // }
    // h1 {
    // color: red;
    // }
    // </style>
    // </head>
    // <body>
    // <h1>はじめてのJavaScript</h1>

    // <script src="./main.js"></script>

    // </body>
    // </html>
    // //=================コード====================

    // main.js
    // //=================コード====================
    // let header = document.querySelector("h1");
    // header.textContent = "Hello world!";
    // //=================コード====================
    // JavaScriptによって⾒出しの⽂字が Hello world! に変更されました。
    // まず、 querySelector() という関数を使⽤して⾒出しの要素( h1 )を取得し、 header という変数に
    // 代⼊しました。

    // まとめ
    // ポイント1. JavaScriptはブラウザで動作するプログラミング⾔語である
    // ポイント2. JavaScriptは主にHTMLやCSSの修正を行う。


// JavaｖScriptの基本構文
//     //値とデータ型
    
    
//     ・数値
//     ・文字列
//     ・真偽値
//     ・Symbol
//     ・オブジェクト
//       ○関数
//       ○Array
//       ○RegExp
//     ・null/undefined
    
    
//     //数値
//     64ビットの浮動⼩数点数
//     例
    
//     // 整数と少数はそのまま演算出来る
//     0.1 + 10; // 10.1
//     // 文字列から数字への変換
//     parseInt('123'); // 123
//     // NaN (Not a Number) - (数値じゃない)という特殊な値
//     parseInt('hello'); // NaN
//     // NaNは何と演算してもNaN
//     NaN + 100; // NaN
//     // NaNかどうかを検査する関数
//     isNaN(NaN); // true
//     // Infinityと-Infinityという特殊な値。無限の値を表す
//     1 / 0; // Infinity
//     -1 / 0; // -Infinity
//     // Infinityか-Infinity、またはNaNかどうかを検査する関数
//     isFinite(1 / 0); // false
//     isFinite(-Infinity); // false
//     isFinite(NaN); // false
//     //=================コード====================
    
    
//     //文字列
//     //=================コード====================
//     // 文字の長さを取得(length)。スペースもカウント
//     'Hello World'.length; // 11
//     // N文字目を取得
//     'Hello World'.charAt(0); // H
//     // すべて大文字に
//     'Hello World'.toUpperCase();// HELLO WORLD
//     // すべて小文字に
//     'Hello World'.toLowerCase();// hello world
//     //=================コード====================
    
//     //null/undefined
//     null=値なし
//     undefined=値が初期化されていない
    
//     //オブジェクト型
//     サーバーサイド⾔語のクラスと異なり、インスタンスを生成せずにその
//     まま利⽤可能。
//     以下の name をプロパティ、 setName() , getName() をメソッドと呼びます。
    
//     例
//     //=================コード====================
//     var obj = {
//     name: null, // プロパティ
//     setName: function(name) { // メソッド
//     this.name = name;
//     },
//     getName: function() {
//     return this.name; // return ... 返り値を返す
//     }
//     }// メソッドの呼び出し
//     obj.setName("太郎");
//     console.log(obj.getName()); // 太郎
//     //=================コード====================
    
//     //値などの確認
//     console.log();
//     JavaScriptがあらかじめ用意している、 console オブジェクトに格納されているメ
//     ソッドのひとつ。引数に渡した値を確認できる。
    
    
//     //変数
//     JavaScriptで変数を宣⾔する場合、
//     let
//     const
//     var
    
//     //例
//     //=================コード====================
//     // letによる変数宣言
//     let name = 'Yamada Taro';
//     let point = 100;
//     // 初期化なし
//     let data; // undefinedが入る
//     // constによる変数宣言(上書きできない)
//     const Pi = 3.14;
//     Pi = 3; // Errorが発生します
//     var name = 'Yamada Taro';
//     var point = 100;
//     var data; // undefinedが入る
//     //=================コード====================
    
    
//     //配列
//     複数の値を格納できるオブジェクトの⼀種
//     //例
//     //=================コード====================
//     // 配列の初期化
//     let numbers = [1, 3, 5];
//     // 配列の最後に要素を追加
//     numbers.push(10);
//     // 要素の書き換え
//     // 要素の追加にはなるべく使わない
//     numbers[2] = 100;
//     // 要素の取得
//     numbers[2]; // 100
//     // 要素数
//     numbers.length; // 4
//     //=================コード====================
    
    
//     //演算子
    
//     //例
//     //=================コード====================
//     // +, -, *, /, %
//     10 + 3; // 13
//     10 - 3; // 7
//     10 * 3; // 30
//     10 / 3; // 3.333333333
//     10 % 3; // 1 (剰余算ーあまり)
//     // 複合代入
//     x += 10; // x = x + 10と同じ
//     // 文字列結合
//     'Hello' + ' ' + 'World';// Hello World
//     // 文字と数字
//     // 文字が結合されたタイミングから全て文字扱いされる
//     '1' + 2 + 3; // 123
//     1 + 2 + '3'; // 33
//     // 比較
//     // >, >=, <, <=などもある
//     123 == '123'; // true
//     1 == true; // true
//     // 型も比較
//     123 === '123'; // false
//     1 === true; // false
//     // 論理演算
//     let y = 15;
//     y >= 10 && y <= 20; // true
//     y < 10 || y > 20; // false
//     !(123 == '123'); // false
//     //=================コード====================
    
    
//     //基本的な制御構文
//     //if ~ else if ~ else 構文
//     //for ( for ... in ) 構文
//     //while ( do ... while ) 構文
//     //switch 構⽂
//     //break 構⽂と continue構文
    
    
//     //条件分岐
//     //=================コード====================
//     const num = 20;
//     // if
//     if (typeof num === "undefined") { // undefinedの比較方法です
//     console.log("未定義です");
//     // else ifも利用でき、基本的な構文は習ったサーバーサイド言語と一緒です
//     } else if (num >= 20) {
//     console.log("ok");
//     } else {
//     console.log("ng");
//     }
//     const fruit = "Apple";
//     // switch
//     switch (fruit) {
//     case "Bananas":
//     console.log("Color is Yellow");
//     break;
    
//     case "Apple":
//     case "Strawberry":
//     console.log("Color is Red"); // これが出力されます
//     break;
//     default:
//     console.log("I don't know.");
//     //=================コード====================
    
    
//     //繰り返し
//     繰り返し構⽂は for、 while、 do ... while
//     JavaScriptにも存在しています。繰り返しのスキップも continue 、終了は break です。
//     プログラミング⾔語により、オブジェクトを取り扱うことに特化した、その⾔語特有の繰り返し処理
//     が
//     存在しており、JavaScriptにも for ... in 構⽂のようなオブジェクトを繰り返すための構⽂が
//     存在しています。
//     //=================コード====================
//     // for
//     for (let i = 0; i < 5; i ++) {
//     // 0 1 2 3 4 と出力されます。
//     console.log(i + " ");
//     }
//     // while
//     let num = 1;
//     while (num <= 5) {
//     console.log(num);
//     num ++;
//     if (num === 3) {
//     continue; // 繰り返しをスキップします
//     }
//     }
//     // 1
//     // 2
//     // 4
//     // 5
//     // do ... while
//     let num2 = 1;
//     do {
//     console.log(num2);
//     num2 ++;
//     if (num2 > 5) {
//     break; // 繰り返しを終了します
//     }
//     } while (true);
//     // 1
//     // 2
//     // 3
//     // 4
//     // 5
//     // オブジェクトの繰り返し処理
//     // for ... in
//     let obj = {a: 1, b: 2, c: 3};
    
//     for (const key in obj) {
//     console.log(key + ": " + obj[key]);
//     }
//     // a: 1
//     // b: 2
//     // c: 3
//     // 配列の繰り返し処理
//     // forEach
//     let arr = [1, 2, 3];
//     arr.forEach(function(num) {
//     console.log(num);
//     });
//     // 1
//     // 2
//     // 3
    
//     //=================コード====================
    
    
//     //関数
//     関数＝function(ファンクション) 
    
    
//     //宣言と呼び出し
//     //=================コード====================
//     // function 関数名(引数1, ...) { 処理 }
//     function sayMessage(message) {
//     alert(message); // Helloと出力
//     }
//     // 呼び出し
//     sayMessage("Hello");
//     //=================コード====================
    
    
//     //return⽂
//     関数終了、返り値を得る場合使用。
//     //=================コード====================
//     function getCalc (num) {
//     if (num >= 5) {
//     // この時点で数値を返し、関数を終了します
//     return num * 2;
//     }
//     return num * num;
//     }
//     getCalc(4); // 16
//     getCalc(5); // 10
//     //=================コード====================
    
    
//     //変数のスコープ
//     //関数やオブジェクトの外で定義された変数＝グローバルスコープ
//     　　関数内外で使用可能。
//     //関数内で定義された変数＝ローカルスコープ
//     　　関数内で使用可能。
//     //=================コード====================
//     // グローバルスコープ変数
//     let message = "Hello";
//     function greet() {
//     // グローパルスコープは、関数ないでも自由に利用可能
//     console.log(message); // Hello
//     // ローカルスコープ変数
//     let text = "Good-Bye";
//     }
//     greet();
//     // ローカルスコープは関数外からアクセス不可
//     // Uncaught ReferenceError: text is not defined
//     console.log(text);
    
//     //=================コード====================
    
//     ポイント1. 値とデータ型は今まで学んできたプログラミング⾔語とほぼ同様で、
//     Number 型は整数と⼩数点をまとめて扱い、未定義の変数値は undefined となる
//     ポイント2. 変数宣⾔時、先頭には let または const を利⽤する
//     const は上書きできない値(定数)、変数宣⾔には稀に var を利⽤している場⾯も
//     ポイント3. 演算は、算術演算、⽐較演算、論理演算の3種類
//     等価のチェックは === と == で挙動が異なる ( !== と != もある)
//     ポイント4. 条件分岐や繰り返しなどの制御構⽂はサーバサイド⾔語の構⽂と類似している
//     ポイント5. for ... in などJavaScript特有の制御構⽂もある
//     ポイント6. 関数の定義は function 関数名([引数1, ...]) で、返り値の型定義は不要である
//     return を利⽤することで呼び出し元に返り値を返し、関数の処理を終了できる