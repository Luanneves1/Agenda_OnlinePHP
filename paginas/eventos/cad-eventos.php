<header>
    <h3 class="mb-3"><i class="bi bi-people"></i> Cadastro de Eventos</h3>
</header>
<div>
    <form class="needs-validation" action="index.php?menuop=inserir-evento" method="post" novalidate>
        <div class="mb-3">
            <label for="tituloEvento" class="form-label">Título</label>
            <input class="form-control" type="text" name="tituloEvento" id="tituloEvento" required>
            <div class="valid-feedback color">Tudo certo!</div>
            <div class="invalid-feedback">Campo obrigatório</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="descricaoEvento">Descrição</label>
            <textarea name="descricaoEvento" id="descricaoEvento" cols="30" rows="10" class="form-control" required></textarea>
            <div class="valid-feedback color">Tudo certo!</div>
            <div class="invalid-feedback">Campo obrigatório</div>
        </div>

        <div class="row">
            <div class="mb-3 col-2">
                <label for="dataInicioEvento" class="form-label">Data de Início</label>
                <input class="form-control" type="date" name="dataInicioEvento" id="dataInicioEvento" required>
                <div class="valid-feedback color">Tudo certo!</div>
                <div class="invalid-feedback">Campo obrigatório</div>
            </div>
            <div class="mb-3 col-2">
                <label for="horaInicioEvento" class="form-label">Hora de Início</label>
                <input class="form-control" type="time" name="horaInicioEvento" id="horaInicioEvento">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-2">
                <label for="dataFimEvento" class="form-label">Data de Fim</label>
                <input class="form-control" type="date" name="dataFimEvento" id="dataFimEvento" required>
                <div class="valid-feedback color">Tudo certo!</div>
                <div class="invalid-feedback">Campo obrigatório</div>
            </div>
            <div class="mb-3 col-2">
                <label for="horaFimEvento" class="form-label">Hora de Fim</label>
                <input class="form-control" type="time" name="horaFimEvento" id="horaFimEvento">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-3">
                <label for="statusEvento" class="form-label">Status</label>
                <select class="form-select mb-3" name="statusEvento" id="statusEvento">
                    <option value="0">Inativo</option>
                    <option value="1">Ativo</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <input type="submit" value="Cadastrar Evento" name="btnAdicionar" class="btn btn-light mb-3">
        </div>
    </form>
</div>
