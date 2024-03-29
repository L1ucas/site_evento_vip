<!DOCTYPE html>
<html lang="en">

<head>
  <link href="style/style1.css" rel="stylesheet"/>
  <link href="bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style1.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VIP Eventos</title>
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
                <a class="nav-link" href="#">Eventos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Piscinas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sobre nós</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
              </li>
            </ul>
            <a class="btn btn-light" href="#">Sign Up</a>
          </div>
        </div>
      </nav>

  <div class="container">

    <div id="carouselExampleIndicators" class="carousel slide">

      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="1000">
          <img src="img/img3.png" id="imgs" class="d-block w-100" alt="..." height="280px" width="100%">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="img/img2.png" id="imgs" class="d-block w-100" alt="..." height="280px" width="100%">
        </div>
        <div class="carousel-item">
          <img src="img/img1.png" id="imgs" class="d-block w-100" alt="..." height="280px" width="100%">
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <br><br><br>

    <div class="cnt2">
      <h1 id="cnt">Piscinas</h1>
    </div>
    <br><br>
    <div class="row">
      <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./img/card.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Espaço Aquasplash</h5>
            <p class="card-text">Localizada nas extremidades da cidade, é uma boa opção para realizar festas e confrartenizações</p>
            <strong>
              <p class="card-text">R$ 20,00/Hora</p>
            </strong>
            <strong>
              <p class="card-text">R$ 480,00/Dia</p>
            </strong>
            <a href="./index1.html" class="btn btn-primary">Alugar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./img/card1.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Club Bluescape Pools</h5>
            <p class="card-text">Localizada na bairro morada dos ventos, é uma das melhores opções para realizar eventos, festas e confrartenizações</p>
            <strong>
              <p class="card-text">R$ 35,00/Hora</p>
            </strong>
            <strong>
              <p class="card-text">R$ 620,00/Dia</p>
            </strong>
            <a href="./index1.html" class="btn btn-primary">Alugar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./img/card2.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Piscina Swimming</h5>
            <p class="card-text">Localizada no centro da cidade, é uma das melhores opções para realizar festas em família e confrartenizações</p>
            <strong>
              <p class="card-text">R$ 45,00/Hora</p>
            </strong>
            <strong>
              <p class="card-text">R$ 850,00/Dia</p>
            </strong>
            <a href="./index1.html" class="btn btn-primary">Alugar</a>
          </div>
        </div>
      </div>

    </div>
    <br><br>

    <div class="cnt2">
      <h1 id="cnt">Casas de Festas</h1>
    </div>
    <br><br>
    <div class="row">
      <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./img/card3.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Party House</h5>
            <p class="card-text">Localizada nas extremidades da cidade, é uma boa opção para realizar festas, com o intuito de arrecadação.</p>
            <strong>
              <p class="card-text">R$ 30,00/Hora</p>
            </strong>
            <strong>
              <p class="card-text">R$ 500,00/Dia</p>
            </strong>
            <a href="./index1.html" class="btn btn-primary">Alugar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./img/card4.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Espaço Unique</h5>
            <p class="card-text">Localizada na bairro morada dos ventos, é uma das melhores opções para realizar festas, com finalidade de diversão.</p>
            <strong>
              <p class="card-text">R$ 40,00/Hora</p>
            </strong>
            <strong>
              <p class="card-text">R$ 700,00/Dia</p>
            </strong>
            <a href="./index1.html" class="btn btn-primary">Alugar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./img/card5.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Bombar Clube</h5>
            <p class="card-text">Localizada no centro da cidade, é o local ideal para realizar festas e confrartenizações com a família.</p>
            <strong>
              <p class="card-text">R$ 50,00/Hora</p>
            </strong>
            <strong>
              <p class="card-text">R$ 900,00/Dia</p>
            </strong>
            <a href="./index1.html" class="btn btn-primary">Alugar</a>
          </div>
        </div>
      </div>
    </div>
    <br><br>

    <div class="cnt2">
      <h1 id="cnt">Casa de Praia</h1>
    </div>
    <br><br>
    <div class="row">
      <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./img/card6.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Concha Branca</h5>
            <p class="card-text">Localizada na praia de Beberibe, é uma opções boa e barata para passar o final de semana com a família.</p>
            <strong>
              <p class="card-text">R$ 70,00/Hora</p>
            </strong>
            <strong>
              <p class="card-text">R$ 900,00/Dia</p>
            </strong>
            <a href="./index1.html" class="btn btn-primary">Alugar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./img/card7.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Rainha do Mar</h5>
            <p class="card-text">Localizada na praia do Cumbuco, é uma das melhores opções para realizar festas e confrartenizações no litoral.</p>
            <strong>
              <p class="card-text">R$ 80,00/Hora</p>
            </strong>
            <strong>
              <p class="card-text">R$ 1000,00/Dia</p>
            </strong>
            <a href="./index1.html" class="btn btn-primary">Alugar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./img/card8.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Maré Azul</h5>
            <p class="card-text">Localizada na praia do futuro, é uma opção que apresenta mais luxos, ideal para passar o feriado com a família.</p>
            <strong>
              <p class="card-text">R$ 100,00/Hora</p>
            </strong>
            <strong>
              <p class="card-text">R$ 1200,00/Dia</p>
            </strong>
            <a href="./index1.html" class="btn btn-primary">Alugar</a>
          </div>
        </div>
      </div>
    </div>


  </div>
  <script src="sript.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <br><br><br>

</body>

</html>
