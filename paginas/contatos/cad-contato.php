<header>
    <h3><i class="bi bi-people"></i> Cadastro de Contatos</h3>
</header>
<div>
    <form class="needs-validation " action="index.php?menuop=inserirContato" method="post" novalidate>
        <div class="mb-3 col-4">
            <label for="nomeContato" class="form-label ">Nome</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input type="text" name="nomeContato" class="form-control" required>
                <div class="valid-feedback color" > Tudo certo!</div>
                <div class="invalid-feedback">Campo obrigatório</div> 
            </div>
        </div>
        <div class="mb-3 col-4">
            <label class="form-label " for="emailContato">E-mail</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope-at"></i></span>
                <input type="email" name="emailContato" class="form-control " required>
                <div class="valid-feedback color" > Tudo certo!</div>
                <div class="invalid-feedback">Campo obrigatório</div>
            </div>
        </div>
        <div class="mb-3 col-4">
            <label class="form-label" for="telefoneContato">Telefone</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                <input type="text" name="telefoneContato" class="form-control" required>
                <div class="valid-feedback color" > Tudo certo!</div>
                <div class="invalid-feedback">Campo obrigatório</div>
            </div>
        </div>

        <div class="mb-3 col-4">
            <label class="form-label" for="enderecoContato">Endereço</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-mailbox2"></i></span>
                <input type="text" name="enderecoContato" class="form-control" required>
                <div class="valid-feedback color" > Tudo certo!</div>
                <div class="invalid-feedback">Campo obrigatório</div>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-3">
                <label class="form-label" for="sexoContato">Gênero</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                    <select name="sexoContato" class="form-select" required>
                        
                        <option value="">Selecione o seu Gênero. </option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                        <option value="O">Outros</option>
                    </select>
                    <div class="valid-feedback color" > Tudo certo!</div>
                    <div class="invalid-feedback">Campo obrigatório</div>
                </div>
            </div>

            <div class="mb-3 col-2">
                <label class="form-label" for="dataNascimentoContato">Data de Nascimento</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-calendar-date"></i></span>
                    <input type="date" name="dataNascimentoContato" class="form-control" required>
                    <div class="valid-feedback color" > Tudo certo!</div>
                    <div class="invalid-feedback">Campo obrigatório</div>
                </div>
            </div>
        </div>



        <div class="mb-3">
            <input type="submit" value="Adicionar" name="btnAdicionar" class="btn btn-light mb-3 ">
        </div>
    </form>
</div>