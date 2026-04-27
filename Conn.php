<?php

class Coon{
    
$servername = "localhost";
$username = "root";
$password = "";     
$dbname = "bd_backend"; 

    public static function getConexao(){
        $conexao = new mysqli($servername, $username, $password, $dbname);
        return $conexao
        }
    }
?>