//JavaScriptの処理
    // document.getElementById("id名") で取得します
    // let title = document.getElementById("title"); console.log(title); 

    //<h1id="title">JavaScriptのDOM操作</h1>に変更します 
    title.textContent="JavaScriptのDOM操作";

    // <h1 id="title">JavaScriptの基礎</h1>

    // name属性から取得 console.log(document.getElementsByName("p_tag")); // NodeList(2) [p.paragraph, p]
    // length: 2
    // 0: p.paragraph
    // 1: p
    // __proto__: NodeList
    // class属性から取得 console.log(document.getElementsByClassName("paragraph"));
    // HTMLCollection(2) [p.paragraph, p.paragraph, p_tag: p.paragraph] // length: 2
    // 0: p.paragraph
    // 1: p.paragraph
    // p_tag: p.paragraph
    // __proto__: HTMLCollection
    // タグ名から取得
    console.log(document.getElementsByTagName("p"));
    // HTMLCollection(3) [p.paragraph, p.paragraph, p, p_tag: p.paragraph] // length: 3
    // 0: p.paragraph
    // 1: p.paragraph
    // 2: p
    // p_tag: p.paragraph
    // __proto__: HTMLCollection
    // 要素を一つだけ取得 console.log(document.getElementsByTagName("p")[0]); // <p class="paragraph">a</p>


//スタイルを変更する
    // 文字色を白色に title.style.color = "#FFF";
    // ハイフンはstyle.font-sizeのようにできないためobject["プロパティ名"]のようにアクセ スします
    // 文字サイズを2em
    title.style["font-size"] = "2em";
    // 文字の太さを標準 title.style["font-weight"] = "normal";
    // 2pxの黒色の枠線
    title.style.border = "2px solid #000";
    // paddingを四方に10px title.style.padding = "10px";
    // marginを四方に5px title.style.margin = "5px";
    // 幅を90% title.style.width = "90%";
    // 背景色を灰色に title.style["background-color"] = "#BBB";
    // 角を10px半径で丸める title.style["border-radius"] = "10px";
    // 文字の影を設定
    title.style["text-shadow"] = "0 0 2px #000, 0 0 2px #000";


//クラスの追加と削除
    // クラスを追加します。 
    title.classList.add("test-class");
    // クラスを削除します。 
    title.classList.remove("test-class");
    // クラスがなければ追加、あれば削除します 
    title.classList.toggle("test-class");
    // クラスがあるかどうかを返します
    // 例では追加して削除して追加しているのでtrueです。 
    console.log(title.classList.contains("test-class"));


//属性の取得と追加、削除
    // 属性の追加
    // 要素.setAttribute(属性名, 属性値);
    title.setAttribute("name", "header"); // <h1 name="header">Hello world!</h1>
    
    // 属性の取得
    // 要素.getAttribute(属性名)
    console.log(title.getAttribute("name")); // name

    // 属性を保持しているか
    // hasAttribute(属性名) 
    title.hasAttribute("name"); // true

    // 属性の削除
    // removeAttribute(属性名)
    title.removeAttribute("name");

    // DOM操作(2) 要素の追加 JavaScriptを利用してHTMLを書き換える際に、要素を追加する場面がままあります。
    // 要素を追加するためには基本的には次の手順となります。
    // 1. 子要素オブジェクトを生成する
    // 2. 子要素オブジェクトのテキストコンテントや属性の追加などを行う 3. 親要素オブジェクトを取得する
    // 4. 親要素オブジェクトに子要素オブジェクトを追加する


//要素の生成        
    // 1. 子要素オブジェクトを生成する
    let child = document.createElement("p");
    // 2. 子要素オブジェクトのテキストコンテントや属性の追加などを行う child.textContent = "追加された要素";
    child.textContent = "追加された要素";

//要素の追加
    // 3. 親要素オブジェクトを取得する
    let parent = document.getElementById("parent_element"); 
    // 4. 親要素オブジェクトに子要素オブジェクトを追加する
    // 親要素.appendChild(子要素); で要素が追加されます 
    parent.appendChild(child);


//DOMの削除
    //要素削除にはメソッドとして、 remove() が用意されています。 要素を削除せずに非表示にする場合は style プロパティの中に、 visibility というプロパティもあります。
    // 要素の削除 
    child.remove();
    // 要素の非表示 (非削除) 
    parent.style.visibility = "hidden";

    
//まとめ
    // DOM操作はHTML文書を操作する上で欠かすことのできない知識です。それゆえブラウザで利用する JavaScriptを使いこなすためにはDOM操作の理解が不可欠となります。また、本項では割愛していま すが、 テーブルのような複雑に子要素を配置できるオブジェクトにはそれ専用の関数が用意されています。 基本的なDOM操作を理解したら複雑な要素の操作にも挑戦してみましょう。
    // ポイント1. DOMはHTML文書に加筆・修正を加えるための方法である
    // ポイント2. 要素オブジェクトを取得するには次の4つのメソッドのいずれかを利用する
    // document.getElementById() document.getElementsByName() document.getElementsByTagName() document.getElementsByClassName()
    // ポイント3. 取得した要素のプロパティを修正して文書に変更を加える ex1) 要素.textContent = "Hello";
    // ex2) 要素.style.color = "red";
    // ポイント4. 要素を追加するには次の手順を踏む
    // 1. document.createElement() で子要素を生成する
    // 2. 子要素のプロパティを修正して要素を完成させる
    // 3. 親要素.appendChild(子要素)で親要素に子要素を追加する
    // ポイント5. 要素.remove() で要素を削除できる