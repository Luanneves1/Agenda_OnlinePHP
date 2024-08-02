
<header>
    <h3><i class="bi bi-calendar-heart"></i> Eventos</h3>
</header>
<?php
// Campo de PESQUISA 
$txt_pesquisa = isset($_POST["txt_pesquisa"]) ? $_POST["txt_pesquisa"] : "";

// Verifica se os parâmetros GET foram recebidos corretamente
$idEvento = isset($_GET['idEvento']) ? (int)$_GET['idEvento'] : 0;
$statusEvento = isset($_GET['statusEvento']) && $_GET['statusEvento'] == '0' ? 1 : 0;

// Atualiza o status do evento apenas se os parâmetros estiverem corretos
if ($idEvento > 0) {
    // Utilização de consulta preparada para evitar SQL injection
    $sql = "UPDATE tbeventos SET statusEvento = ? WHERE idEvento = ?";
    $stmt = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($stmt, "ii", $statusEvento, $idEvento);
    $result = mysqli_stmt_execute($stmt);

    if (!$result) {
        die("Erro ao executar a query de atualização: " . mysqli_error($conexao));
    }
}
?>

<div class="col-5">
    <form action="index.php?menuop=eventos" method="post">
        <div class="input-group">
            <input class="form-control" type="text" name="txt_pesquisa" value="<?= $txt_pesquisa ?>">
            <button type="submit" class="btn btn-warning btn-sm"><i class="bi bi-search"></i> Pesquisar</button>
        </div>
    </form>
</div>

<div class="Novo-Contato">
    <a class="btn btn-light btn-secondary mb-2" href="index.php?menuop=cad-eventos"><i class="bi bi-list-task"></i> Novo Evento</a>
</div>

<div class="tabela">
    <table class="table table-light table-hover table-bordered border-light">
        <thead>
            <tr class="table-dark">
                <th>Status</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Data de Início</th>
                <th>Hora de Início</th>
                <th>Data de Fim</th>
                <th>Hora de Fim</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $quantidade = 10;
            $pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
            $inicio = ($quantidade * $pagina) - $quantidade;

            $query = "SELECT
            idEvento, 
            statusEvento,
            tituloEvento,
            descricaoEvento,
            DATE_FORMAT(dataInicioEvento, '%d/%m/%Y') AS dataInicioEvento,
            horaInicioEvento,
            DATE_FORMAT(dataFimEvento, '%d/%m/%Y') AS dataFimEvento,
            horaFimEvento
            FROM tbeventos
            WHERE 
            tituloEvento LIKE '%{$txt_pesquisa}%' OR 
            descricaoEvento LIKE '%{$txt_pesquisa}%' OR
            DATE_FORMAT(dataInicioEvento, '%d/%m/%Y') LIKE '%{$txt_pesquisa}%' OR
            DATE_FORMAT(dataFimEvento, '%d/%m/%Y') LIKE '%{$txt_pesquisa}%'
            ORDER BY statusEvento, dataInicioEvento 
            LIMIT $inicio, $quantidade";

            $rs = mysqli_query($conexao, $query) or die("erro ao executar a consulta select" . mysqli_error($conexao));

            while ($dados = mysqli_fetch_assoc($rs)) {
            ?>
                <tr>
                    <td>
                        <a class="btn-btn-secondary btn-sm" href="index.php?menuop=eventos&pagina=<?= $pagina ?>&idEvento=<?= $dados['idEvento'] ?>&statusEvento=<?= $dados['statusEvento'] ?>">
                            <?php
                            if ($dados['statusEvento'] == 0) {
                                echo '<i class="bi bi-square"></i>';
                            } else {
                                echo '<i class="bi bi-check-square"></i>';
                            }
                            ?>
                        </a>
                    </td>
                    <td class="text-nowrap"><?= $dados["tituloEvento"] ?></td>
                    <td><?= $dados["descricaoEvento"] ?></td>
                    <td><?= $dados["dataInicioEvento"] ?></td>
                    <td><?= $dados["horaInicioEvento"] ?></td>
                    <td><?= $dados["dataFimEvento"] ?></td>
                    <td><?= $dados["horaFimEvento"] ?></td>
                    <td class='text-center'><a class='btn btn-warning' href="index.php?menuop=editarEvento&idEvento=<?= $dados["idEvento"] ?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td class='text-center'><a class='btn btn-danger' href="index.php?menuop=excluirEvento&idEvento=<?= $dados["idEvento"] ?>"><i class="bi bi-trash3"></i></a></td>
                </tr>
            <?php
            };
            ?>
        </tbody>
    </table>
</div>

<ul class="pagination justify-content-center">
    <?php
    $sqlTotal = "SELECT idEvento FROM tbeventos";
    $qrTotal = mysqli_query($conexao, $sqlTotal) or die(mysqli_error($conexao));
    $numTotal = mysqli_num_rows($qrTotal);
    $totalPaginas = ceil($numTotal / $quantidade);

    echo "<li class='page-item'><span class='page-link'>Total de Registro: " . $numTotal . "</span></li>";
    echo '<li class="page-item"><a class="page-link" href="?menuop=eventos&pagina=1">Primeira Página</a></li>';

    if ($pagina > 5) {
    ?>
        <li class="page-item"><a class="page-link" href="?menuop=eventos&pagina=<?= $pagina - 1 ?>"><<</a></li>
    <?php
    }

    for ($i = 1; $i <= $totalPaginas; $i++) {
        if ($i >= ($pagina - 4) && $i <= ($pagina + 5)) {
            if ($i == $pagina) {
                echo "<li class='page-item active'><span class='page-link'>$i</span></li>";
            } else {
                echo "<li class='page-item'><a class='page-link' href=\"?menuop=eventos&pagina=$i\">$i</a></li>";
            }
        }
    }

    if ($pagina < ($totalPaginas - 5)) {
    ?>
        <li class='page-item'><a class="page-link" href="?menuop=eventos&pagina=<?= $pagina + 1 ?>">>></a></li>
    <?php
    }

    echo "<li class='page-item'><a class='page-link' href=\"?menuop=eventos&pagina=$totalPaginas\">Última Página</a></li>";
    ?>
</ul>
