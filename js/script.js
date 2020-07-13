import { menu, selectCutButton, toggleMenuButton, navMenu } from "./var.js";

(async () => {
  if (screen.width >= 845) {
    window.addEventListener("scroll", (event) => {
      if (window.scrollY >= 180) {
        menu.style.backgroundColor = "#1b1d21";
        menu.style.color = "#e6eded";
      } else {
        menu.style.backgroundColor = "transparent";
        menu.style.color = "#1b1d21";
      }
    });
  }
  toggleMenuButton.addEventListener('click', event => {navMenu.classList.toggle('show')})
  Array.from(selectCutButton).map((button) =>
    button.addEventListener("click", (event) =>
      window.location.replace("/view/haircuts.php")
    )
  ); //criando um array apartir de um nodelist para poder mapear ele, nodelists não podem receber o paramêtro map
  //se não passar o event pro window.location ele irá executar ao carregar a pagina

})();
