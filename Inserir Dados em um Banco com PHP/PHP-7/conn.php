<?php
    function Connection(){
        $host = "localhost";
        $usuario = "root";
        $senha = "root";
        $bd = "monitor_alc";
        
        $mysqli = new mysqli($host, $usuario, $senha, $bd);
        
        if($mysqli->connect_errno){
            echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
        } else {
            return $mysqli;
        }
    }
?>