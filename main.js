let menu = document.querySelector("#menu");

function functionMenu() {
    alert("Hello");
    alert(menu.value);
}

menu.addEventListener('click', ()=> {
    alert("Hello, world!")
});