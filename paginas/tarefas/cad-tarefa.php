<header>
    <h3 class="mb-3"><i class="bi bi-people "></i> Cadastro de Tarefas</h3>
</header>
<div>
    <form class="needs-validation " action="index.php?menuop=inserir-tarefa" method="post" novalidate>

        <div class="mb-3">
            <label for="tituloTarefa" class="form-label">Título</label>
            <input class="form-control" type="text" name="tituloTarefa" id="tituloTarefa" required>
            <div class="valid-feedback color"> Tudo certo!</div>
            <div class="invalid-feedback">Campo obrigatório</div>
        </div>
        <div class="mb-3">
            <label class="form-label " for="descricaoTarefa">Descrição</label>
            <textarea name="descricaoTarefa" id="descricaoTarefa" cols="30" rows="10" class="form-control" required></textarea>
            <div class="valid-feedback color"> Tudo certo!</div>
            <div class="invalid-feedback">Campo obrigatório</div>
        </div>

        <div class="row">
            <div class="mb-3 col-2">
                <label for="dataConclusaoTarefa" class="form-label">Data de Conclusão</label>
                <input class="form-control" type="date" name="dataConclusaoTarefa" id="dataConclusaoTarefa" required>
                <div class="valid-feedback color"> Tudo certo!</div>
                <div class="invalid-feedback">Campo obrigatório</div>
            </div>
            <div class="mb-3 col-2">
                <label for="horaConclusaoTarefa" class="form-label">Hora de Conclusão</label>
                <input class="form-control" type="time" name="horaConclusaoTarefa" id="horaConclusaoTarefa">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-2">
                <label for="dataLembreteTarefa" class="form-label">Data do Lembrete</label>
                <input class="form-control" type="date" name="dataLembreteTarefa" id="dataLembreteTarefa" required>
                <div class="valid-feedback color"> Tudo certo!</div>
                <div class="invalid-feedback">Campo obrigatório</div>
            </div>
            <div class="mb-3 col-2">
                <label for="horaLembreteTarefa" class="form-label">Hora do Lembrete</label>
                <input class="form-control" type="time" name="horaLembreteTarefa" id="horaLembreteTarefa">
            </div>
        </div>

        <div class="row">
            <div class=" mb-3 col-3">
                <label for="recorrenciaTarefa" class="form-lebal">Reccorrência</label>
                <select class="form-select mb-3" name="recorrenciaTarefa" id="recorrenciaTarefa">
                    <option value="0">Não Recorrente</option>
                    <option value="1">Diariamente</option>
                    <option value="2">Semanalmente</option>
                    <option value="3">Mensalmente</option>
                    <option value="4">Anualmente</option>
                </select>


                <div class="mb-3">
                    <input type="submit" value="Cadastrar Tarefa" name="btnAdicionar" class="btn btn-light mb-3 ">
                </div>

    </form>
</div>