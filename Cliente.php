<?php
require_once "Coon.php"

class Cliente{
    private $id;
    private $nome;
    private $email;

    public function getId() {return $this->id; }
    public function getNome() {return $this->nome;}
    public function getEmail() {return $this->email;}

    public function setId($id) {$this->id = $id;}
    public function setNome($nome) {$this->nome = $nome;}
    public function setEmail($email) {$this->email = $email;}

    public function salvar() {
        $conn = Conn::getConexao();
        mysqli_query($conn, "CALL salvar_cliente($this->id, '$this->nome', '$this->email')")
    }
?>