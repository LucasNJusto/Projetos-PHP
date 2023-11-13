<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $rg = $_POST["rg"];
    $telefone = $_POST["telefone"];
}

class Usuario
{

    private $nome;
    private $rg;
    private $telefone;

    public function __construct($nome, $rg, $telefone)
    {
        $this->nome = $nome;
        $this->rg = $rg;
        $this->telefone = $telefone;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getRg()
    {
        return $this->rg;
    }

    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
}
?>