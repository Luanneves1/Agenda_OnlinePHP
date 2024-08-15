<?php
//conexão com o banco de dados
include "./db/conexao.php";
//verificação para banco de dados;
$msg_error = "";

if (isset($_POST["loginUser"]) && isset($_POST["senhaUser"])) {
    $loginUser =  mysqli_escape_string($conexao,$_POST["loginUser"]);
    $senhaUser =  hash('sha256',$_POST["senhaUser"]);

    $sql = "SELECT * FROM tbusuarios WHERE loginUser = '{$loginUser}' AND senhaUser = '{$senhaUser}'";
    $rs = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_assoc($rs);
    $linha = mysqli_num_rows($rs);

    if ($linha != 0) {
        session_start();
        $_SESSION["loginUser"] = $loginUser;
        $_SESSION["senhaUser"] = $senhaUser;
        $_SESSION["nomeUser"] = $dados["nomeUser"];

        header('Location: index.php');
    } else {
        $msg_error = "<div class ='alert alert-danger mt-3'>
        <p>Usuário não encontrado ou senha invalida.</p>
        </div> ";
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <title>Login Agenda Online</title>

</head>

<body class="bg-primary">
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-10 sm-8 col-md-6 col-lg-4 p-4 bg-white shadow rounded">
                <div class="row justify-content-center mb-4 ">
                    <img src="./img/logo_agendador.png" alt="Agendador">
                </div>
                <form class="needs-validation" action="login.php" method="post" novalidate>
                    <div class="form-group mb-4">
                        <label for="loginUser" class="form-label">Login</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person-fill"></i>
                            </span>
                            <input type="text" name="loginUser" id="loginUser" class="form-control" required>
                            <div class="invalid-feedback">Informe seu Login de Usuário
                            </div>
                        </div>

                    </div>

                    <div class="form-group mb-4">
                        <label for="senhaUser" class="form-label">Senha</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-key-fill"></i>
                            </span>
                            <input type="password" name="senhaUser" id="senhaUser" class="form-control" required>
                            <div class="invalid-feedback">Informe sua senha e tente novamente.
                            </div>
                        </div>

                        <?php
                        echo $msg_error;
                        ?>

                    </div>
                    <button class="btn btn-success w-100"><i class="bi bi-box-arrow-in-right"></i> Entrar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


    <script src="js/validation.js">
        //chamada do metodo de validação bootstrap
    </script>
</body>

</html>