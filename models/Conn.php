<?php

class Coon{

    public static function getConexao(){
        $servername = "localhost";
        $username = "root";
        $password = "";     
        $dbname = "aula_php"; 
        $conexao = new mysqli($servername, $username, $password, $dbname);
        return $conexao;
        
        }
    }
?>