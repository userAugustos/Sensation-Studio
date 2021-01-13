const selector = document.querySelector.bind(document);
const selectorAll = document.querySelectorAll.bind(document); 

const menu = selector('header#home');
const selectAllCutButton  = selectorAll('button#select-hair-cut');
const toggleMenuButton = selector('div.toggle-menu');
const menuButtonIcon = selector('#menu-icon');
const navMenu = selector('nav#menu');

window.onload = () => {
  if (screen.width >= 845) {
        menu.style.backgroundColor = "#1b1d21";
        menu.style.color = "#e6eded";
      } else {
        menu.style.backgroundColor = "transparent";
        menu.style.color = "#1b1d21";
    }

  toggleMenuButton.addEventListener('click', event => {
     navMenu.classList.toggle('show');
    });

  Array.from(selectAllCutButton).map((button) => /*criando um array apartir de um nodelist para poder mapear ele, nodelists não podem receber o paramêtro map */
    button.addEventListener("click", (event) => { //se não passar o event pro window.location ele irá executar ao carregar a pagina
      window.location.replace('../view/login.php')
    })
  );
}