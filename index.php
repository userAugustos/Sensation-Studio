<?php $_SESSION['isLogeed'] = false ?>
<html lang="pt-br">
<head>
  <title>Sensation</title>
  <?php require_once './view/header.php'; ?>

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
        
        <?php if($_SESSION['isLogeed']): ?>
        <div id="user_info">
          <img src="<?$_SESSION['user_img']?>" alt="">
          <p><?=$_SESSION['user_name']?></p>
        </div>
        <?php else: ?>
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
      <h2>Na Sensation buscamos atendimento de <br/>primeira para o cliente</h2>
      <h3>Aqui você corta ao seu estilo</h3>
      <button type="button">Selecionar Corte</button>
      <br/>
      <span>
        Temos uma seção de avalição também <a href="#contact">Avaliar</a>
      </span>
    </div>
  </section>
  <main>
		
  </main>
  <footer>

  </footer>
  <script src="./node_modules/alertifyjs/src/js/alertify.js">
  	
  </script>
</body>
</html>
