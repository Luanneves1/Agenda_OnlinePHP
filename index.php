<?php
include("db/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo-padrao.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <title>Agenda Online 1.0</title>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">

            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/glass.png" alt="Sis-Agendador" width="80"> </a>

                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active"><a class="nav-link" href="index.php?menuop=home">Home</a></li>
                        <li class="nav-item "><a class="nav-link" href="index.php?menuop=contatos">Contato</a></li>
                        <li class="nav-item "><a class="nav-link" href="index.php?menuop=tarefas">Tarefas</a></li>
                        <li class="nav-item "><a class="nav-link" href="index.php?menuop=eventos">Eventos</a></li>
                    </ul>


                </div>

            </div>
            <form class="d-flex container col-2" role="search">
                <input class="form-control me-2" type="search" placeholder="Pesquisa" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Pesquisa</button>
            </form>
        </nav>
    </header>

    <main>
        <div class="container">
            <?php
            $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";

            switch ($menuop) {
                case 'home':
                    include("paginas/home/home.php");
                    break;
                case 'contatos':
                    include("paginas/contatos/contatos.php");
                    break;
                case 'cad-contatos':
                    include("paginas/contatos/cad-contato.php");
                    break;

                case 'inserirContato':
                    include("paginas/contatos/inserirContato.php");
                    break;

                case 'editarContato':
                    include("paginas/Contatos/editarContato.php");
                    break;

                case 'excluirContato':
                    include("paginas/Contatos/excluirContato.php");
                    break;

                case 'atualizarContato':
                    include("paginas/Contatos/atualizarContato.php");
                    break;



                case 'tarefas':
                    include("paginas/tarefas/tarefas.php");
                    break;

                case 'cad-tarefa':
                    include("paginas/tarefas/cad-tarefa.php");
                    break;

                case 'inserir-tarefa':
                    include("paginas/tarefas/inserir-tarefa.php");
                    break;

                case 'excluirTarefa':
                    include("paginas/tarefas/excluirTarefa.php");
                    break;

                case 'editarTarefa':
                    include("paginas/tarefas/editarTarefa.php");
                    break;

                case 'atualizarTarefa':
                    include("paginas/tarefas/atualizarTarefa.php");
                    break;

                case 'eventos':
                    include("paginas/eventos/eventos.php");
                    break;

                case 'cad-eventos':
                    include("paginas/eventos/cad-eventos.php");
                    break;

                case 'inserir-evento':
                    include("paginas/eventos/inserir-evento.php");
                    break;


                default:
                    include("paginas/home/home.php");
                    break;
            }
            ?>
        </div>
    </main>
    <footer class="container-fluid fixed-bottom bg-dark ">
        <div class="text-center">Agenda Online 1.0

        </div>
    </footer>


    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/upload.js"></script>
    <script src="js/javascript-agendador.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="js/validation.js"></script>



</body>

</html>