<?php

require_once "Conn.php";

class Fornecedor {

    private $id;
    private $nome;
    private $cidade;

    public function getId()     { return $this->id; }
    public function getNome()   { return $this->nome; }
    public function getCidade() { return $this->cidade; }

    public function setId($id)         { $this->id = $id; }
    public function setNome($nome)     { $this->nome = $nome; }
    public function setCidade($cidade) { $this->cidade = $cidade; }

    public function salvar() {
        $conn = Conn::getConexao();
        mysqli_query($conn, "CALL salvar_fornecedor($this->id, '$this->nome', '$this->cidade')");
    }
}
?>