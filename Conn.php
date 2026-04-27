<?php

class Coon{
    
$servername = "localhost";
$username = "root";
$password = "";     
$dbname = "aula_php"; 

    public static function getConexao(){
        $conexao = new mysqli($servername, $username, $password, $dbname);
        return $conexao
        }
    }
?>