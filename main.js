// const suggest = [abaissa, abaissable, abaissai, abaissaient, abaissais, abaissait, abaissâmes, abaissant, abaissante, abaissantes, abaissants, abaissas, abaissasse, abaissassent, abaissasses, abaissassiez, abaissassions, abaissât, abaissâtes, abaisse, abaissé, abaissée, abaissées, abaisse-langue, abaissement, abaissements, abaissent, abaisser, abaissera];

const artists = [
    'Derow', 'Damso', 'Luther', 'Ysos',
    'Heezy Lee', 'Mellow', 'V€nus', 'Le motif'
  ];
  
  const div = document.querySelector('#cards')
  
  const input = document.querySelector('input');
  
  input.addEventListener('input', (event) => {
    const results = search(event.target.value, artists);
    // console.log(results);

    
    div.style.display="block";
    div.style.padding="15px";

    // if(input == "") {
    //     alert("hello");
    //     div.style.display="none";
    // }
    // return;
  
    let list = "";
  
    for(let i = 0; i < results.length; i++) {
      list += "<li>" + results[i] + "</li>";
    }
    div.innerHTML = list;
  });
  
  const search = (str, wordList) => {
    const results = [];
    if(str.length === 0) {
      return results;
    }
  
    for(let i = 0; i < wordList.length; i++) {
      const item = wordList[i];
      if(item.toUpperCase().startsWith(str.toUpperCase())) {
        results.push(item);
      }
    }
    return results;
  }


  // MENU
  const menu = document.querySelector("#menu");

