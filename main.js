// function keisan (num) {
//   //引数*3をculcに代入する
//   let culc = num * 3;
//   // culcが6の倍数だったら1を加算する
//   if (culc % 9 ===0) {
//     culc += 1;
//   }
//   return culc;
// }

// let num = 2;
// for (let i = 0; i < 10; i++){
//   num = keisan(num);
// }

// console.log(num);



let button = document.querySelector("button"); 
// clickイベントを登録します
button.addEventListener('click', function()　{
  // div要素の中身は「clickされました」となります。 
  let el = document.querySelector("div"); 
  el.textContent = "clickされました";
  //thisは変数buttonを指しています
  this.textContent="clickされました";
});