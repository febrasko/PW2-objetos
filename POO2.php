<?php
class Gato {
    private $raca;
    private $peso;
    private $cor;
    
    // A função __construct() é executada sempre que a classe é chamada
    public function __construct($raca, $cor, $peso){
        if ($raca == null || $cor == null || $peso == null) {
            throw new Exception("GATO QUEBROU");
        }
        $this->setRaca($raca);
        $this->setCor($cor);
        $this->setPeso($peso);
        echo "GATO EM PRODUÇÃO<br>";
    }

    public function getPeso(){
        return "{$this->peso} gramas";
    }
    public function setPeso($peso){
        if ($peso < 16000000 && $peso > 0) 
        return $this->peso = $peso;        
    }
    public function getRaca(){
        return $this->raca;
    }
    public function setRaca($raca){
        return $this->raca = $raca;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($cor){
        return $this->cor = $cor;
    }

    
    public function miar(){
        echo "VRUM VRUM!";
    }

    public function matar($quem){
        echo "{$quem} foi brutalmente aniquilado(a) <br><br>";
    }

    public function imprimirDados(){
        echo 
        "Raça: {$this->getRaca()} <br>
        Peso: {$this->getPeso()} <br>
        Cor: {$this->getCor()} <br><br>";
    }

}

$robson = new Gato("Rottweiler", "Roxo", 14000);
$robson->imprimirDados();
?>