<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento Vip | Tela de Início</title>

    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="style/telaDeinicio.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Eventos VIP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-around">
              <li class="nav-item">
                <a class="nav-link" href="Destaques.php">Destaques</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sobre nós</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            </ul>
            <a class="btn btn-light" href="cadastro.html">Sign Up</a>
          </div>
        </div>
      </nav>

      <div class="container">
        <div class="content">
          <h2>
            <span>Eventos</span><br>
            <span style="padding-left: 100px;">Vips</span><br>
            <span style="padding-left: 135px;">Secrets</span>
          </h2>
        </div>
      </div>

      <div class="col">
        <form action="">
          <div class="mb-3">
            <div class="search-box">
              <button type="submit"><img src="./assets/search.png" alt="Ícone de pesquisa"></button>
              <input type="text" placeholder="Pesquisar">
            </div>
          </div>
        </form>
      </div>

      <div class="col">


        <div class="mb-3">
          <h3 class="title">Sugestões</h3>
        </div>
        <div class="mb-3">
          <span>
            <a href="#">
              <img src="./assets/sugestão01.png" alt="Sugestão 01">
            </a>
          </span>
        </div>
        <div class="mb-3">
          <a href="#">
            <img src="./assets/sugestão02.png" alt="Sugestão 02">
          </a>
        </div>
        <div class="mb-3">
          <a href="#">
            <img src="./assets/sugestão03.png" alt="Sugestão 03">
          </a>
        </div>



      </div>

      <footer>
        <div class="container">
          <h3>O MELHOR LUGAR PARA VOCÊ ENCONTRAR O SEU ESPAÇO IDEAL</h3>
        </div>
      </footer>
</body>
</html>
