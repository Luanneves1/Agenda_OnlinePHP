<header>
    <h3><i class="bi bi-people"></i> Contatos</h3>
</header>

<?php
//Variavel da pesquisa
$txt_pesquisa = (isset($_POST["txt_pesquisa"])) ? $_POST["txt_pesquisa"] : ""; ?>

<div class="col-5">
    <form action="index.php?menuop=contatos" method="post">

        <div class="input-group ">
            <input class="form-control" type="text" name="txt_pesquisa" value="<?= $txt_pesquisa ?>">
            <button type="submit" class="btn btn-warning btn-sm"><i class="bi bi-search"></i> Pesquisar</button>

    </form>
</div>

</div>

<div class="Novo-Contato">
    <a class="btn btn-light btn-secondary mb-2" href="index.php?menuop=cad-contatos"><i class="bi bi-person-add"></i> Novo Contato</a>
</div>

<div class="tabela ">
    <table class="table table-light  table-hover table-bordered border-light">
        <thead>
            <tr class="table-dark">
                <th><i class="bi bi-star-fill"></i></th>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Sexo</th>
                <th>Data de Nasc.</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>


        <tbody>
            <?php
//quantidade de linhas 
            $quantidade = 10;

            $pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;

            $inicio = ($quantidade * $pagina) - $quantidade;



            $query = "SELECT `idContato`, upper(nomeContato) AS nomeContato,
             lower(emailContato) AS emailContato, 
             `telefoneContato`,
              upper(enderecoContato) AS enderecoContato, 

        CASE 
        WHEN sexoContato ='F' THEN 'FEMININO'
        WHEN sexoContato = 'M' THEN 'MASCULINO' 
        ELSE 
        'NÃO ESPECIFICADO'
        END AS sexoContato,
         DATE_FORMAT(dataNascimentoContato,'%d/%m/%Y') AS dataNascimentoContato,
          flagFavoritoContato
           FROM `tb_contatos`
            WHERE idContato='{$txt_pesquisa}'
        or nomeContato LIKE '%{$txt_pesquisa}%' ORDER BY  flagFavoritoContato DESC ,nomeContato ASC
        LIMIT $inicio, $quantidade
        ";

            $rs = mysqli_query($conexao, $query) or die("erro ao executar a consulta select" . mysqli_error($conexao));

            while ($dados = mysqli_fetch_assoc($rs)) {
            ?>

                <tr>
                    <td><?php
                        if ($dados["flagFavoritoContato"] == 1) {

                            echo "<a href=\"#\"class =\"flagFavoritoContato link-warning\" title=\"Favorito\"id=\"{$dados["idContato"]}\"> 
                       <i class=\"bi bi-star-fill\"> </i> </a>";
                        } else {
                            echo "<a href=\"#\"class =\"flagFavoritoContato link-warning\" title=\"Não Favorito\"id=\"{$dados["idContato"]}\"> 
                        <i class=\"bi bi-star\"> </i> </a>";
                        };
                        ?>


                    </td>
                    <td><?= $dados["idContato"] ?></td>
                    <td class="text-nowrap"><?= $dados["nomeContato"] ?></td>
                    <td><?= $dados["emailContato"] ?></td>
                    <td><?= $dados["telefoneContato"] ?></td>
                    <td><?= $dados["enderecoContato"] ?></td>
                    <td><?= $dados["sexoContato"] ?></td>
                    <td><?= $dados["dataNascimentoContato"] ?></td>
                    <td class='text-center'><a class='btn btn-warning' href="index.php?menuop=editarContato&idContato=<?= $dados["idContato"] ?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td class='text-center'><a class='btn btn-danger' href="index.php?menuop=excluirContato&idContato=<?= $dados["idContato"] ?>"><i class="bi bi-trash3"></i></a></td>

                </tr>

            <?php
            };
            ?>
        </tbody>

    </table>
</div>

<ul class="pagination justify-content-center">
    <?php
    $sqlTotal = "SELECT idContato FROM tb_contatos";
    $qrTotal = mysqli_query($conexao, $sqlTotal) or die(mysqli_error($conexao));
    $numTotal = mysqli_num_rows($qrTotal);
    $totalPaginas = ceil($numTotal / $quantidade);

    echo " <li class='page-item'><span class= 'page-link'>Total de Registro:" . $numTotal . "</span></li>";

    echo '<li class="page-item"> <a class="page-link" href="?menuop=contatos&pagina=1">Primeira Página </a></li>';

    if ($pagina > 5) {
    ?>

        <li class="page-item"><a class="page-link" href="?menuop=contatos&pagina=<?php echo $pagina - 1 ?>">
                << </a>
        </li>
    <?php
    }


    for ($i = 1; $i <= $totalPaginas; $i++) {

        if ($i >= ($pagina - 4) && $i <= ($pagina + 5)) {

            if ($i == $pagina) {
                echo "<li class='page-item active'> <span class='page-link'>$i</span> </li>";
            } else {
                echo "<li class='page-item'><a class='page-link'  href=\"?menuop=contatos&pagina=$i\">$i</a> </li>";
            }
        }
    }

    if ($pagina < ($totalPaginas - 5)) {
    ?>
        <li class='page-item'> <a class="page-link" href="?menuop=contatos&pagina=<?php echo $pagina + 1 ?>">
                >> </a> </li>

    <?php
    }

    echo "<li class='page-item' > <a class='page-link'  href=\"?menuop=contatos&pagina=$totalPaginas\">Última Página</a></li>";


    ?>
</ul>