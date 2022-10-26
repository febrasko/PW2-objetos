<?php
class Animal {
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

    // Elementos protected podem ser acessados somente pela classe e pelos seus filhos
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

// extends serve para herdar os atributos e metodos de outra class
// herança é utilizada para não ter repetição de codigo
// Gato está herdando os atributos e métodos de Animal
class Gato extends Animal {
    public function miar(){
        echo "VRUM VRUM!";
    }
}

class Cachorro extends Animal {
    public function latir(){
        echo"mau";
    }
}

$chuvisco = new Cachorro("Chuvisco");
$chuvisco -> setRaca("canibal");
$chuvisco -> setCor("arco-íris");
$chuvisco -> setPeso(1);
$chuvisco -> imprimirDados();
$chuvisco -> matar("kauan");

$bambi = new Gato("Bambi");
$bambi->setRaca("Ração");
$bambi->setCor("Preto");
$bambi->setPeso(900);
$bambi->imprimirDados();
$bambi->matar("Steve Jobs");

?>