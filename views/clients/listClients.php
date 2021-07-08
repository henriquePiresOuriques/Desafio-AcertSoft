<h2>Clientes</h2>
<table class="table table-striped">
        <tr>
            <th>Código</th>
            <th>Nome/Razão Social</th>
            <th>CPF/CNPJ</th>
            <th colspan="2">Ações</th>

        </tr>

        <?php 
            foreach ($arrayClients as $client) {
        ?>
            <tr>
                <td><?=$client['id_cliente'] ?></td>
                <td><?=$client['nome_razao'] ?></td>
                <td><?=$client['cpf_cnpj'] ?></td>
                <td>
                <a class='btn btn-warning' href="?controller=client&action=updateClient&id=<?= $client['id_cliente'] ?>">
                    Editar
                </a>
            </td>
            <td>
                <a class='btn btn-danger' href="?controller=client&action=deleteClient&id=<?= $client['id_cliente'] ?>">
                    Excluir
                </a>
            </td>
            </tr>
        <?php 
            } 
        ?>   
</table>