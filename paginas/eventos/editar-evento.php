<?php
$idEvento = $_GET["idEvento"];
$sql = "SELECT * FROM tbeventos WHERE idEvento='$idEvento'";
$rs = mysqli_query($conexao, $sql) or die("Erro ao recuperar os dados do registro." . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3 class="mb-3"><i class="bi bi-people"></i> Atualizar de Eventos</h3>
</header>
<div>
    <form class="needs-validation" action="index.php?menuop=atualizarEvento" method="post" novalidate>
        <div class="mb-3 col-1">
            <label for="idEvento" class="form-label">ID</label>
            <input class="form-control" type="text" name="idEvento" id="idEvento" value="<?= $dados["idEvento"] ?>" readonly>
        </div>
    
        <div class="mb-3">
            <label for="tituloEvento" class="form-label">Título</label>
            <input class="form-control" type="text" name="tituloEvento" id="tituloEvento" value="<?= $dados["tituloEvento"] ?>" required>
            <div class="valid-feedback color">Tudo certo!</div>
            <div class="invalid-feedback">Campo obrigatório</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="descricaoEvento">Descrição</label>
            <textarea name="descricaoEvento" id="descricaoEvento" cols="30" rows="10" class="form-control" required><?= $dados["descricaoEvento"] ?></textarea>
            <div class="valid-feedback color">Tudo certo!</div>
            <div class="invalid-feedback">Campo obrigatório</div>
        </div>

        <div class="row">
            <div class="mb-3 col-2">
                <label for="dataInicioEvento" class="form-label">Data de Início</label>
                <input class="form-control" type="date" name="dataInicioEvento" id="dataInicioEvento" value="<?= $dados["dataInicioEvento"] ?>" required>
                <div class="valid-feedback color">Tudo certo!</div>
                <div class="invalid-feedback">Campo obrigatório</div>
            </div>
            <div class="mb-3 col-2">
                <label for="horaInicioEvento" class="form-label">Hora de Início</label>
                <input class="form-control" type="time" name="horaInicioEvento" id="horaInicioEvento" value="<?= $dados["horaInicioEvento"] ?>">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-2">
                <label for="dataFimEvento" class="form-label">Data de Fim</label>
                <input class="form-control" type="date" name="dataFimEvento" id="dataFimEvento" value="<?= $dados["dataFimEvento"] ?>" required>
                <div class="valid-feedback color">Tudo certo!</div>
                <div class="invalid-feedback">Campo obrigatório</div>
            </div>
            <div class="mb-3 col-2">
                <label for="horaFimEvento" class="form-label">Hora de Fim</label>
                <input class="form-control" type="time" name="horaFimEvento" id="horaFimEvento" value="<?= $dados["horaFimEvento"] ?>">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-3">
                <label for="statusEvento" class="form-label">Status</label>
                <select class="form-select mb-3" name="statusEvento" id="statusEvento">
                    <option value="0" <?= $dados["statusEvento"] == '0' ? 'selected' : '' ?>>Inativo</option>
                    <option value="1" <?= $dados["statusEvento"] == '1' ? 'selected' : '' ?>>Ativo</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <input type="submit" value="Atualizar Evento" name="btnAtualizar" class="btn btn-light mb-3">
        </div>
    </form>
</div>
