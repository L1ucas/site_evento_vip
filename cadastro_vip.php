<!DOCTYPE html>
<html lang="en">

<head>
  <link href="bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style/style1.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VIP Eventos</title>
</head>

<body>
  <br>
  <div class="cnt2">
    <h1 id="cnt">Dados do cliente</h1>
  </div><br>

  <div class="row mb-1">
    <div class="col-sm-1">
    </div>

    <div id="back" class="col-sm-3">
      Nome Completo: <input id="back2" type="text" name="cpfmae" class="form-control form-control-sm input"
        oninput="mascaraCM('CpfMae')" required>
    </div>

    <div id="back" class="col-sm-3">
      <label id="back2" for="">Sexualidade:</label>
      <select class="form-select input" aria-label="Default select example">
        <option selected>...</option>
        <option value="1">Masculino</option>
        <option value="2">Feminino</option>
        <option value="3">Outros</option>
      </select>
    </div>

    <div id="back" class="col-sm-3">
      Cidade: <input id="back2" type="text" name="cpfmae" class="form-control form-control-sm input"
        oninput="mascaraCM('CpfMae')" required>
    </div>
  </div>


  <div class="row mb-1"></div>


  <div id="back" class="row mb-3">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-3">
      Nº do CPF: <input type="text" name="cpfal" placeholder="000.000.000-00" class="form-control form-control-sm input"
        id="cpfal" maxlength="11" oninput="mascaraCA('Cpfal')" required>
    </div>
    <div class="col-sm-3">
      Telefone: <input id="telefone" type="text" name="telefone" class="form-control form-control-sm input"
        maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div class="col-sm-3">
      E-Mail: <input id="back2" type="text" name="emailmae" class="form-control form-control-sm input" required>
    </div>
  </div>


  <div class="row mb-1"></div>
  <div class="row mb-1"></div>
  <div class="row mb-1"></div>

  <div class="row mb-1"></div>

  <div class="cnt2">
    <h1 id="cnt">Formulário de aluguel</h1>
  </div><br>
  <div class="row mb-3" style="color: black;">
    <div class="col-sm-1">
    </div>
    <div id="back" class="col-sm-3">
      Qual a data que você deseja alugar: <input id="back2" type="date" name="emailmae"
        class="form-control form-control-sm--bs-primary input" maxlength="11" required>
    </div>
    <div id="back" class="col-sm-3">
      Por quantos dias você deseja alugar: <input id="back2" type="text" name="telefone"
        class="form-control form-control-sm input" maxlength="11" oninput="mascaraa('TelPai')" required>
    </div>
    <div id="back" class="col-sm-3">
      <label id="back" for="">Forma de pagamento:</label>
      <select class="form-select input" aria-label="Default select example">
        <option selected>...</option>
        <option value="1">Boleto Bancário</option>
        <option value="2">Espécie</option>
        <option value="3">Pix</option>
        <option value="4">Cartão de crédito/débito</option>
      </select>
    </div>

  </div>

  <div class="row mb-3">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-6">
      <p id="but">Deseja finalizar o pedido de aluguel do imóvel?</p>
      <!-- Botão para acionar modal -->
      <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exemploModal">
        Sim
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exemploModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Obrigado!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Seu horário está agendado!
            </div>
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-primary">Não</button>
      <a href="./index.php" class="btn btn-dark">Voltar</a>
    </div>
  </div>


  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>
