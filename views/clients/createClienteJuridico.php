<h1>Inserir um novo cliente</h1>
<form action="?controller=client&action=createClientAction" method=POST enctype='multipart/form-data'>
    <div class="form-group">
        <div>
            <label for="name">Razão Social:</label>
            <input type="text" class="form-control" name="nome_razao" required>
        </div>
        <div>
            <label for="name">Nome fantasia:</label>
            <input type="text" class="form-control" name="fantasia">
        </div>
        <div>
            <label for="email">CNPJ:</label>
            <input type="mail" class="form-control" id="cnpj" name="cpf_cnpj" required>
        </div>
        <div>
            <label for="email">Inscrição estadual:</label>
            <input type="mail" class="form-control" name="ie">
        </div>
        <div>
            <label for="end">Logradouro:</label>
            <input type="text" class="form-control" name="logradouro" required>
        </div>
        <div>
            <label for="end">Número:</label>
            <input type="text" class="form-control" name="numero" required>
        </div>
        <div>
            <label for="end">Bairro:</label>
            <input type="text" class="form-control" name="bairro">
        </div>
        <div>
            <label for="end">Cidade:</label>
            <input type="text" class="form-control" name="id_cidade">
        </div>
        <div>
            <label for="end">UF:</label>
            <select name="uf">
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>
        </div>
        <div>
            <label for="end">CEP:</label>
            <input type="text" class="form-control" name="cep" required>
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>