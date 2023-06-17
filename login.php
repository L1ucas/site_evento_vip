<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="edge=IE">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <link href="bootstrap.min.css" rel="stylesheet"/>
     <title>Login</title>
</head>

<style>
body {
    height: 100vh;
    background: linear-gradient(180deg, #225C86 26.04%, rgba(34, 92, 134, 0) 100%);
    background-repeat: no-repeat;
    font-family: 'Alice';
}
</style>

<body>
    <div class="tela_login">
        <form action="" class="form_login">
            <div class="container">

        <h1>Login</h1>
                <div class="row">

                    <div class="col">
                        <label for="">Nome</label>
                        <input type="text" id="input_nome" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Senha</label>
                        <input type="password" id="input_senha" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                </div>
                <div class="row">
                    Esqueceu sua senha

                </div>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
