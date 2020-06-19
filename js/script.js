import {cardSection} from './var.js';

( async () => {
	const cardsQTD = 6;
  for(let i = 0; i < cardsQTD; i++){
		cardSection.innerHTML += ` 
      <div class="card">
        <img src="./assets/men-cut.jpg" alt="corte-x" />
        <div class="title">
          <h2>Corte X</h2>
        </div>
        <div class="description">
          <p>Corte X. Feito de forma X sendo assim pra X então X</p>
        </div>
        <div class="price">
          <span>R$15,00</span>

          <button type="button">Usar Cupom</button>
        </div>
      </div>
		`
	}
})()

