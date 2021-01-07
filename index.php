<?php $_SESSION['isLogeed'] = false ?>
<html lang="pt-br">

<head>
  <title>Sensation</title>

  <?php require_once($_SERVER["DOCUMENT_ROOT"] . '/header.php')?>
</head>

<body>
  <header id="home">
    <div>
      <img src="./assets/logo-complete-name.png" alt="logo">
    </div>
    <nav id="menu">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#cuts">Cortes</a></li>

        <?php if ($_SESSION['isLogeed']) : ?>
          <li><a href="#appointment">Marque um Horário</a></li>
          <div id="user_info">
            <img src="<?$_SESSION['user_img']?>" alt="">
            <p><?= $_SESSION['user_name'] ?></p>
          </div>
        <?php else : ?>
          <button type="button" data-target="cadastrar" id="">
            Cadastrar
          </button>
        <?php endif; ?>
      </ul>
    </nav>
    <div class="toggle-menu">
      <i class="fa fa-bars" aria-hidden="true" id="menu-icon"></i>
    </div>
  </header>

  <section class="banner" id="home">

    <img src="./assets/logo-only-S.png" alt="banner">

    <div class="text-banner">
      <h2>Na Sensation buscamos atendimento de <br />primeira para o cliente</h2>
      <h3>Aqui você corta ao seu estilo</h3>
      <a href="#cuts"><button type="button" id="select-hair-cut">Selecionar Corte</button></a>
      <br />
      <span>
        Temos uma seção de avalição também <a href="#contact">Avaliar</a>
      </span>
    </div>
  </section>
  <main>
    <section class="hair-cards" id="cuts">
      <img src="./assets/hair-cut.png" alt="style" id="style">
      <div class="ad">
        <h4>Escolha os cortes ao seu estilo</h4>
        <h4>Especifique o que você busca</h4>
      </div>
      <div class="cards">
        <div class="card">
          <img src="https://img.icons8.com/cotton/64/000000/short-hair-sexy-woman.png" />
          <p>nome corte</p>
          <p>............R$15,00</p>
        </div>
        <div class="card">
          <img src="https://img.icons8.com/cotton/64/000000/short-hair-sexy-woman.png" />
          <p>nome corte</p>
          <p>............R$15,00</p>
        </div>
        <div class="card">
          <img src="https://img.icons8.com/cotton/64/000000/short-hair-sexy-woman.png" />
          <p>nome corte</p>
          <p>............R$15,00</p>
        </div>
        <div class="card">
          <img src="https://img.icons8.com/cotton/64/000000/short-hair-sexy-woman.png" />
          <p>nome corte</p>
          <p>............R$15,00</p>
        </div>
        <div class="card">
          <img src="https://img.icons8.com/cotton/64/000000/short-hair-sexy-woman.png" />
          <p>nome corte</p>
          <p>............R$15,00</p>
        </div>
        <div class="card">
          <img src="https://img.icons8.com/cotton/64/000000/short-hair-sexy-woman.png" />
          <p>nome corte</p>
          <p>............R$15,00</p>
        </div>
        <div class="card">
          <img src="https://img.icons8.com/cotton/64/000000/short-hair-sexy-woman.png" />
          <p>nome corte</p>
          <p>............R$15,00</p>
        </div>
        <div class="card">
          <img src="https://img.icons8.com/cotton/64/000000/short-hair-sexy-woman.png" />
          <p>nome corte</p>
          <p>............R$15,00</p>
        </div>
        <div class="card">
          <img src="https://img.icons8.com/cotton/64/000000/short-hair-sexy-woman.png" />
          <p>nome corte</p>
          <p>............R$15,00</p>
        </div>
        <div class="card">
          <img src="https://img.icons8.com/cotton/64/000000/short-hair-sexy-woman.png" />
          <p>nome corte</p>
          <p>............R$15,00</p>
        </div>
      </div>
      <button type="button" id="select-hair-cut">
        <i class="fas fa-cut"></i>
        escolher corte
      </button>
    </section>

    <section class="online-announcement">
      <img src="./assets/tudo-pelo-celular.png" alt="online">
      <div class="announcement">
        <h1>Na Sensation você pode fazer tudo pelo site!<i class="fas fa-mobile"></i> </h1>
        <h3>Crie uma conta para começar</h3>
        <p>Como usuario <i class="fas fa-user"></i> <br /> você pode marcar cortes <br />favoritar estilos de cortes <br />salvar seu historicode cortes e gostos para cortes futuros</p>
        <button type="button">
          <i class="fas fa-sign-in-alt"></i>Entrar
        </button>
      </div>
    </section>

    <section class="contact-us">
      <fieldset>
        <legend> Alguma Duvida? </legend>
        <span>Deixe-nos uma mensagem</span>
          
      </fieldset>
    </section>
  </main>

  <footer>
    <h2>Sensation Studio 2020.</h2>
    <a href="#">Onde fica a Sensation?</a>
  </footer>
  <script src="./node_modules/@fortawesome/fontawesome-free/js/all.js"></script>
  <script type="module" src="./js/script.js"></script>
</body>

</html>