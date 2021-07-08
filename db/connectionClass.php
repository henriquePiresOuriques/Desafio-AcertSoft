<?php 
    class connectClass {
        var $conn;

        function openConnect() {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "teste_acertsoft";

            $this -> conn = new mysqli($servername, $username, $password, $dbname);

            if($this -> conn -> connect_error) {
                die("Conexão com o Banco Falhou ->". $this -> conn -> connect_error);
            }
        }
            

        public function getConn() {
            return $this -> conn;
        }
    }
?>