<?php
// interface é um contrato que serve para "obrigar" as class a usar esses parâmetros
interface Animais {
    public function fazerSom ();
}
class Animal  {
    private $raca;
    private $peso;
    private $cor;
    private $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function imprimirDados(){
        echo 
        "Nome: {$this->getNome()} <br>
        Raça: {$this->getRaca()} <br>
        Peso: {$this->getPeso()} <br>
        Cor: {$this->getCor()} <br><br>";
    }

    protected function getPeso(){
        return "{$this->peso} gramas";
    }
    public function setPeso($peso){
        if ($peso < 16000000 && $peso > 0) {
            return $this->peso = $peso;
        }
    }

    protected function getRaca(){
        return $this->raca;
    }
    public function setRaca($raca){
        if ($raca <> "")
        return $this->raca = $raca;
        else {
            echo"insira as coisas <br>";
        }
    }

    protected function getCor(){
        return $this->cor;
    }
    public function setCor($cor){
        if ($cor <> "")
        return $this->cor = $cor;
        else {
            echo"insira as coisas <br>";
        }
    }

    protected function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        return $this->nome = $nome;
    }

    public function matar($quem){
        echo "{$quem} foi brutalmente aniquilado(a) <br><br>";
    }
}

// implements serve para usar a interface na classe
class Gato implements Animais {
    public function fazerSom(){
        echo "VRUM VRUM! <br><br>";
    }
}
class Cachorro extends Animal implements Animais {
    public function fazerSom(){
        echo "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA <br><br>";
    }
}

$chuvisco = new Cachorro("Chuvisco");
$chuvisco -> setRaca("canibal");
$chuvisco -> setCor("idjsg");
$chuvisco -> setPeso(1);
$chuvisco -> imprimirDados();
$chuvisco -> fazerSom();
$chuvisco -> matar("cauan");

$timba = new Gato("Timba");
$timba->fazerSom();
?>