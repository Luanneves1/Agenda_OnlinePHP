<?php
$idTarefa = $_GET["idTarefa"];
$sql = "SELECT * FROM tbtarefas WHERE idTarefa='$idTarefa'";
$rs = mysqli_query($conexao, $sql) or die("Erro ao recuperar os dados do registro." . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3 class="mb-3"><i class="bi bi-people"></i> Editar Tarefas</h3>
</header>
<div>
    <form class="needs-validation" action="index.php?menuop=atualizarTarefa" method="post" novalidate>

        <div class="mb-3 col-1">
            <label for="idTarefa" class="form-label">ID</label>
            <input class="form-control" type="text" name="idTarefa" id="idTarefa" value="<?= $dados["idTarefa"] ?>" readonly>
        </div>

        <div class="mb-3">
            <label for="tituloTarefa" class="form-label">Título</label>
            <input class="form-control" type="text" name="tituloTarefa" value="<?= htmlspecialchars($dados["tituloTarefa"]) ?>" id="tituloTarefa" required>
            <div class="valid-feedback">Tudo certo!</div>
            <div class="invalid-feedback">Campo obrigatório</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="descricaoTarefa">Descrição</label>
            <textarea id="descricaoTarefa" cols="30" rows="10" class="form-control" name="descricaoTarefa" required><?= htmlspecialchars($dados["descricaoTarefa"]) ?></textarea>
            <div class="valid-feedback">Tudo certo!</div>
            <div class="invalid-feedback">Campo obrigatório</div>
        </div>
        <div class="row">
            <div class="mb-3 col-2">
                <label for="dataConclusaoTarefa" class="form-label">Data de Conclusão</label>
                <input class="form-control" type="date" name="dataConclusaoTarefa" value="<?= htmlspecialchars($dados["dataConclusaoTarefa"]) ?>" id="dataConclusaoTarefa" required>
                <div class="valid-feedback">Tudo certo!</div>
                <div class="invalid-feedback">Campo obrigatório</div>
            </div>
            <div class="mb-3 col-2">
                <label for="horaConclusaoTarefa" class="form-label">Hora de Conclusão</label>
                <input class="form-control" type="time" name="horaConclusaoTarefa" value="<?= htmlspecialchars($dados["horaConclusaoTarefa"]) ?>" id="horaConclusaoTarefa">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-2">
                <label for="dataLembreteTarefa" class="form-label">Data do Lembrete</label>
                <input class="form-control" type="date" name="dataLembreteTarefa" id="dataLembreteTarefa" value="<?= htmlspecialchars($dados["dataLembreteTarefa"]) ?>" required>
                <div class="valid-feedback">Tudo certo!</div>
                <div class="invalid-feedback">Campo obrigatório</div>
            </div>
            <div class="mb-3 col-2">
                <label for="horaLembreteTarefa" class="form-label">Hora do Lembrete</label>
                <input class="form-control" type="time" name="horaLembreteTarefa" id="horaLembreteTarefa" value="<?= htmlspecialchars($dados["horaLembreteTarefa"]) ?>">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-3">
                <label for="recorrenciaTarefa" class="form-label">Recorrência</label>
                <select class="form-select mb-3" name="recorrenciaTarefa" id="recorrenciaTarefa">
                    <option value="0" <?= $dados["recorrenciaTarefa"] == 0 ? 'selected' : '' ?>>Não Recorrente</option>
                    <option value="1" <?= $dados["recorrenciaTarefa"] == 1 ? 'selected' : '' ?>>Diariamente</option>
                    <option value="2" <?= $dados["recorrenciaTarefa"] == 2 ? 'selected' : '' ?>>Semanalmente</option>
                    <option value="3" <?= $dados["recorrenciaTarefa"] == 3 ? 'selected' : '' ?>>Mensalmente</option>
                    <option value="4" <?= $dados["recorrenciaTarefa"] == 4 ? 'selected' : '' ?>>Anualmente</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <input type="submit" value="Atualizar Tarefa" name="btnAdicionar" class="btn btn-light mb-3">
        </div>
    </form>
</div>