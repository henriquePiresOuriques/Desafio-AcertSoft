<h1>Alterar cliente</h1>
<form action="?controller=client&action=updateClientAction&id=<?=$arrayClients['id_cliente']?>" method=POST enctype='multipart/form-data'>
<div class="form-group">
<div>
            <label for="name">Razão Social:</label>
            <input type="text" class="form-control" name="nome_razao" value="<?=$arrayClients['nome_razao']?>">
        </div>
        <div>
            <label for="name">Nome fantasia:</label>
            <input type="text" class="form-control" name="fantasia" value="<?=$arrayClients['fantasia']?>">
        </div>
        <div>
            <label for="email">CNPJ:</label>
            <input type="mail" class="form-control" name="cpf_cnpj" value="<?=$arrayClients['cpf_cnpj']?>">
        </div>
        <div>
            <label for="email">Inscrição estadual:</label>
            <input type="mail" class="form-control" name="ie" value="<?=$arrayClients['logradouro']?>">
        </div>
        <div>
            <label for="end">Logradouro:</label>
            <input type="text" class="form-control" name="logradouro" value="<?=$arrayClients['logradouro']?>">
        </div>
        <div>
            <label for="end">Número:</label>
            <input type="text" class="form-control" name="numero" value="<?=$arrayClients['numero']?>">
        </div>
        <div>
            <label for="end">Bairro:</label>
            <input type="text" class="form-control" name="bairro" value="<?=$arrayClients['bairro']?>">
        </div>
        <div>
            <label for="end">Cidade:</label>
            <input type="text" class="form-control" name="id_cidade" value="<?=$arrayClients['id_cidade']?>">
        </div>
        <div>
            <label for="end">UF:</label>
            <input type="text" class="form-control" name="uf" value="<?=$arrayClients['uf']?>">
        </div>
        <div>
            <label for="end">CEP:</label>
            <input type="text" class="form-control" name="cep" value="<?=$arrayClients['cep']?>">
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>