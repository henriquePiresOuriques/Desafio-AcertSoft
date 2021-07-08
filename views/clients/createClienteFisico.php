<h1>Inserir um novo cliente</h1>
<form action="?controller=client&action=createClientAction" method=POST enctype='multipart/form-data'>
    <div class="form-group">
        <div>
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="nome_razao" required>
        </div>
        <div>
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf_cnpj" required>
        </div>
        <div>
            <label for="dataNascimento">Data de nascimento:</label>
            <input type="text" class="form-control" id="data" name="data_nascimento" >
        </div>
        <div>
            <label for="Sexo">Sexo:</label>
            <input type="text" class="form-control" name="sexo">
        </div>
        <div>
            <label for="end">Logradouro:</label>
            <input type="text" class="form-control" name="logradouro" required>
        </div>
        <div>
            <label for="num">Número:</label>
            <input type="text" class="form-control" name="numero" required>
        </div>
        <div>
            <label for="bairro">Bairro:</label>
            <input type="text" class="form-control" name="bairro">
        </div>
        <div>
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" name="id_cidade">
        </div>
        <div>
            <label for="uf">UF:</label>
            <input type="text" class="form-control" name="uf">
        </div>
        <div>
            <label for="cep">CEP:</label>
            <input type="text" class="form-control" id="cep" name="cep" required>
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>
