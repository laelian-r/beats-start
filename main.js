// const artists = [
//     'Derow', 'Damso', 'Luther', 'Ysos',
//     'Heezy Lee', 'Mellow', 'V€nus', 'Le motif'
//   ];
  
//   const div = document.querySelector('#cards')
  
//   const input = document.querySelector('input');
  
//   input.addEventListener('input', (event) => {
//     const results = search(event.target.value, artists);

    
//     div.style.display="block";
//     div.style.padding="15px";
  
//     let list = "";
  
//     for(let i = 0; i < results.length; i++) {
//       list += "<li>" + results[i] + "</li>";
//     }
//    div.innerHTML = list;
// });
  
//   const search = (str, wordList) => {
//     const results = [];
//     if(str.length === 0) {
//       return results;
//     }
  
//     for(let i = 0; i < wordList.length; i++) {
//       const item = wordList[i];
//       if(item.toUpperCase().startsWith(str.toUpperCase())) {
//         results.push(item);
//       }
//     }
//     return results;
//   }

alert("yo")


// MENU
const menu = document.querySelector("#menu");

document.addEventListener('keydown', e => {
  if (e.key === 'Escape') {
    menu.style.display = "flex";
  }
});


// INSCRIPTION
// const boxAlert = document.querySelector("#boxAlert");
// const message = document.querySelector("#message");

// if(message == "") {
//   boxAlert.style.display="none";
// } else {
//   boxAlert.style.display="flex";
// }