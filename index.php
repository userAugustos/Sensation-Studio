<?php $_SESSION['isLogeed'] = false ?>
<html lang="pt-br">

<head>
  <title>Sensation</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="shortcut icon" href="../assets/logo-only-S.png">

  <link rel="stylesheet" href="./node_modules/alertifyjs/build/css/alertify.min.css">
  <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap">

  <link rel="stylesheet" href="./css/main.css">

  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
</head>

<body>
  <header id="home">
    <div>
      <img src="./assets/logo-complete-name.png" alt="logo">
    </div>
    <div id="menu">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#cuts">Cortes</a></li>
        <li><a href="#appointment">Marque um Horário</a></li>

        <?php if ($_SESSION['isLogeed']) : ?>
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
    </div>
  </header>

  <section class="banner">

    <img src="./assets/logo-only-S.png" alt="banner">

    <div class="text-banner">
      <h2>Na Sensation buscamos atendimento de <br />primeira para o cliente</h2>
      <h3>Aqui você corta ao seu estilo</h3>
      <button type="button" id="select-hair-cut">Selecionar Corte</button>
      <br />
      <span>
        Temos uma seção de avalição também <a href="#contact">Avaliar</a>
      </span>
    </div>
  </section>
  <main>
    <section class="hair-cards">
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
      <button type="button" id="select-hair-cut">
        <i class="fas fa-cut"></i>
        escolher corte
      </button>
    </section>

    <section class="online-announcement">

    </section>
  </main>
  <footer>

  </footer>
  <script src="./node_modules/@fortawesome/fontawesome-free/js/all.js"></script>
  <script type="module" src="./js/var.js">
  </script>
  <script type="module" src="./js/script.js"></script>
</body>

</html>