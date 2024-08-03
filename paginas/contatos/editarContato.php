<?php
$idContato = $_GET["idContato"];
$sql = "SELECT * FROM tb_contatos WHERE idContato={$idContato}";
$rs = mysqli_query($conexao, $sql) or die("Erro ao recuperar os dados do registro." . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>
<header>
    <h3><i class="bi bi-pencil-square"></i> Editar Contato</h3>
</header>

<div class="row">
    <div class="col-6">
        <form class="needs-validation" action="index.php?menuop=atualizarContato" method="post" novalidate>
            <div class="mb-3">
                <label class="form-label" for="idContato">ID</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-key"></i></span>
                    <input class="form-control" type="text" name="idContato" value="<?= $dados["idContato"] ?>" readonly>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="nomeContato">Nome</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                    <input class="form-control" type="text" name="nomeContato" value="<?= $dados["nomeContato"] ?>" required>
                    <div class="valid-feedback color">Tudo certo!</div>
                    <div class="invalid-feedback">Campo obrigatório</div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="emailContato">E-mail</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope-at"></i></span>
                    <input class="form-control" type="email" name="emailContato" value="<?= $dados["emailContato"] ?>" required>
                    <div class="valid-feedback color">Tudo certo!</div>
                    <div class="invalid-feedback">Campo obrigatório</div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="telefoneContato">Telefone</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                    <input class="form-control" type="text" name="telefoneContato" value="<?= $dados["telefoneContato"] ?>" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="enderecoContato">Endereço</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-mailbox2"></i></span>
                    <input class="form-control" type="text" name="enderecoContato" value="<?= $dados["enderecoContato"] ?>" required>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label" for="sexoContato">Gênero</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                        <select class="form-control" name="sexoContato" required>
                            <option <?php echo ($dados['sexoContato'] == '') ? 'selected' : '' ?> value="">Selecione o seu Gênero.</option>
                            <option <?php echo ($dados['sexoContato'] == 'M') ? 'selected' : '' ?> value="M">Masculino</option>
                            <option <?php echo ($dados['sexoContato'] == 'F') ? 'selected' : '' ?> value="F">Feminino</option>
                            <option <?php echo ($dados['sexoContato'] == 'O') ? 'selected' : '' ?> value="O">Outros</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label" for="dataNascimentoContato">Data de Nascimento</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-calendar-date"></i></span>
                        <input class="form-control" type="date" name="dataNascimentoContato" value="<?= $dados["dataNascimentoContato"] ?>" required>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <input class="btn btn-warning mb-3 form-control" type="submit" value="Atualizar" name="btnAtualizar">
            </div>
        </form>
    </div>

    <div class="col-6">
        <?php
        if ($dados["nomeFotoContato"] == "" || !file_exists('./paginas/contatos/fotos-contatos/' . $dados["nomeFotoContato"])) {
            $nomeFoto = "Semavatar.png";
        } else {
            $nomeFoto = $dados["nomeFotoContato"];
        }
        ?>
        <div class="col-6 img-fluid">
            <img id="foto-contato"  class="rounded-circle mb-3" src="./paginas/contatos/fotos-contatos/<?= $nomeFoto ?>" alt="Foto Contato">
        </div>


        <div class="mb-3">
            <button class="btn btn-warning" id="btn-editar-foto"><i class="bi bi-camera2"> Editar Foto</i></button>
        </div>

        <div id="editar-foto">
            <form id="form-upload-foto" class="mb-3" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="idContato" value="<?= $idContato ?>">
                <label class="form-label" for="arquivo">Selecione um arquivo</label>

                <div class="input-group">
                    <input class="form-control" type="file" name="arquivo" id="arquivo">
                    <input id="btn-enviar-foto" class="btn btn-warning" type="submit" value="Enviar">
                </div>
            </form>
            <div id="mensagem" class="mb-3 alert alert-success">
                Carregando
            </div>

            <div id="preloader" class="progress" role="progressbar" aria-label="Success example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                <div id="barra" class="progress-bar bg-warning" style="width: 0%">0%</div>
            </div>
        </div>
    </div>
</div>