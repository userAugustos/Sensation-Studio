import { menu, selectCutButton } from "./var.js";


(async () => {
  Array.from(selectCutButton).map(button => button.addEventListener('click', event => window.location.replace('/view/haircuts.php'))) 
  //criando um array apartir de um nodelist para poder mapear ele, nodelists não podem receber o paramêtro map
  //se não passar o event pro window.location ele irá executar ao carregar a pagina
  window.screen.width.addEventListener('change', event => console.log(event))
})();
