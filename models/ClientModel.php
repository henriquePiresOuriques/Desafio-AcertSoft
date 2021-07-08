<?php
class ClientModel {

    var $connection;

    function __construct()
    {
        require_once("db/connectionClass.php");
        $connectClass = new connectClass();
        $connectClass->openConnect();
        $this -> connection = $connectClass -> getConn();
    }

    public function listClients()
    {

        $sql = "
            SELECT * FROM clientes
        ";

        return $this -> connection -> query($sql);
    }

    public function getClient($id_cliente){
        $sql = "
            SELECT * FROM clientes
                WHERE id_cliente = {$id_cliente}
        ";

        return $this -> connection -> query($sql);
    }

    public function updateClient($arrayClients)
    {
        $sql = "
            UPDATE clientes 
            SET 
                nome_razao='{$arrayClients['nome_razao']}', 
                cpf_cnpj='{$arrayClients['cpf_cnpj']}', 
                data_nascimento='{$arrayClients['data_nascimento']}', 
                sexo='{$arrayClients['sexo']}', 
                logradouro='{$arrayClients['logradouro']}', 
                numero='{$arrayClients['numero']}', 
                bairro='{$arrayClients['bairro']}', 
                id_cidade='{$arrayClients['id_cidade']}', 
                uf='{$arrayClients['uf']}', 
                cep='{$arrayClients['cep']}' 
            WHERE 
                id_cliente={$arrayClients['id_cliente']}
            (
                SELECT logradouro, numero, bairro, enderecos.id_cidade, cidade.uf, cep 
                FROM enderecos
                INNER JOIN cidades
                WHERE enderecos.id_cidade = cidades.id_cidade
            )
        ";

        return $this -> connection -> query($sql);
    }

    public function deleteClient($id_cliente)
    {
        $sql =  "
            DELETE FROM clientes, enderecos
            USING clientes
            INNER JOIN enderecos
            WHERE id_cliente={$id_cliente} 
                AND clientes.id_endereco = enderecos.id_endereco
           
        ";
        return $this -> connection -> query($sql);
    }

    public function createClient($arrayClients) {
        $sql = "
            INSERT INTO clientes
                (nome_razao, fantasia, cpf_cnpj, ie, data_nascimento, sexo)
            VALUES(  
                '{$arrayClients['nome_razao']}',
                '{$arrayClients['fantasia']}',
                '{$arrayClients['cpf_cnpj']}',
                '{$arrayClients['ie']}',
                '{$arrayClients['data_nascimento']}',
                '{$arrayClients['sexo']}',   
            );
            SET @last_id_in_clientes = LAST_INSERT_ID();
            
            INSERT INTO enderecos
                (logradouro, numero, bairro, id_cidade, uf, cep)
            VALUES (
                @last_id_in_clientes,
                '{$arrayClients['logradouro']}',
                '{$arrayClients['numero']}',
                '{$arrayClients['bairro']}',
                '{$arrayClients['id_cidade']}',
                '{$arrayClients['uf']}',
                '{$arrayClients['cep']}', 
            );
            ";

        return $this -> connection -> query($sql);
    }

}
