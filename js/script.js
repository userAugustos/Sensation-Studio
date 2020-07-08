import { cardSection, menu } from "./var.js";

window.addEventListener('scroll', event => {
  if(window.scrollY >= 180){
    menu.style.backgroundColor = '#1b1d21';
    menu.style.color = '#e6eded';
  }else{
    menu.style.backgroundColor = 'transparent';
    menu.style.color = '#1b1d21';
  }
});

(async () => {
  for (let index = 0; index < 10; index++) {    
    cardSection.innerHTML +=`
      <div class="card">
        <img src="https://img.icons8.com/cotton/64/000000/short-hair-sexy-woman.png"/>
        <p>nome corte</p>
      </div>
    `;
  }
})();
