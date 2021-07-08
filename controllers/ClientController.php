<?php
class ClientController {
    var $clientModel;

    function __construct() {
        require_once('models/ClientModel.php');
        return $this -> clientsModel = new ClientModel();
    }

    public function home() {
        $result = $this -> clientsModel -> listClients();

        $arrayClients = array();

        while($client = $result -> fetch_assoc()){
            array_push($arrayClients, $client);
        }

        require_once('views/templates/header.php');
        require_once('views/clients/listClients.php');
        require_once('views/templates/footer.php'); 
    }

    public function listClients() {
        $result = $this -> clientsModel -> listClients();

        $arrayClients = array();

        while($client = $result -> fetch_assoc()){
            array_push($arrayClients, $client);
        }

        require_once('views/templates/header.php');
        require_once('views/clients/listClients.php');
        require_once('views/templates/footer.php');
    }

    public function updateClient($id_cliente) {
        $result = $this -> clientsModel -> getClient($id_cliente); 
        if($arrayClients = $result -> fetch_assoc()) {
            require_once('views/templates/header.php');
            if($_REQUEST['action'] == 'updateClienteFisico') {
                require_once('views/clients/updateClienteFisico.php');
            } else {
                require_once('views/clients/updateClienteJuridico.php');
            }
            require_once('views/templates/footer.php');
        }
    }

    public function updateClientAction($id_cliente) {
        $arrayClients["id_cliente"] = $id_cliente;
        $arrayClients["nome_razao"] = $_POST["nome_razao"];
        $arrayClients["cpf_cnpj"] = $_POST["cpf_cnpj"];
        $arrayClients["fantasia"] = $_POST["fantasia"];
        $arrayClients["ie"] = $_POST["ie"];
        $arrayClients["data_nascimento"] = $_POST["data_nascimento"];
        $arrayClients["sexo"] = $_POST["sexo"];
        $arrayClients["logradouro"] = $_POST["logradouro"];
        $arrayClients["numero"] = $_POST["numero"];
        $arrayClients["bairro"] = $_POST["bairro"];
        $arrayClients["id_cidade"] = $_POST["id_cidade"];
        $arrayClients["uf"] = $_POST["uf"];
        $arrayClients["cep"] = $_POST["cep"];

        $result = $this -> clientsModel -> updateClient($arrayClients);
        header('Location:index.php?controller=client&action=listClients');
    }

    public function deleteClient($id_cliente) {
        $result = $this -> clientsModel -> deleteClient($id_cliente);
        header('Location:index.php?controller=client&action=listClients');
    }

    public function createClient() {
        require_once('views/templates/header.php');
        if($_REQUEST['action'] == 'createClienteFisico') {
            require_once('views/clients/createClienteFisico.php');
        } else {
            require_once('views/clients/createClienteJuridico.php');
        }
        require_once('views/templates/footer.php');
    }

    public function createClientAction() {
        $arrayClients["nome_razao"] = $_POST["nome_razao"];
        $arrayClients["cpf_cnpj"] = $_POST["cpf_cnpj"];
        $arrayClients["fantasia"] = $_POST["fantasia"];
        $arrayClients["ie"] = $_POST["ie"];
        $arrayClients["data_nascimento"] = $_POST["data_nascimento"];
        $arrayClients["sexo"] = $_POST["sexo"];
        $arrayClients["logradouro"] = $_POST["logradouro"];
        $arrayClients["numero"] = $_POST["numero"];
        $arrayClients["bairro"] = $_POST["bairro"];
        $arrayClients["id_cidade"] = $_POST["id_cidade"];
        $arrayClients["uf"] = $_POST["uf"];
        $arrayClients["cep"] = $_POST["cep"];
         
        $result = $this -> clientsModel -> createClient($arrayClients);
        header('Location: ?controller=client&action=listClients');
    }
}
?>