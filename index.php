<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  require_once('controllers/ClientController.php');
  $client = new ClientController();
  $client -> home();
  switch ($_REQUEST['action']){
    case 'listClients':
        $client -> listClients();
    break;
    case 'createClienteFisico':
        $client -> createClient();
    break;
    case 'createClienteJuridico':
      $client -> createClient();
    break;
    case 'createClientAction':
        $client -> createClientAction();
    break;
    case 'updateClient':
        $id_cliente = $_GET['id'];
        $client -> updateClient($id_cliente);
    break;
    case 'updateClientAction':
        $id_cliente = $_GET['id'];
        $client -> updateClientAction($id_cliente);
    break;
    case 'deleteClient':
        $id_cliente = $_GET['id'];
        $client -> deleteClient($id_cliente); 
}
?>