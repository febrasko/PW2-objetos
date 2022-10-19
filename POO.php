<!-- Orientação a Objeto -->
<?php
// CLASSE
class Gato {
    // Elementos privados não podem ser usados fora da classe(?)
    private $raca;
    private $peso;
    private $cor;

    public function miar(){
        echo "VRUM VRUM!";
    }

    public function matar($quem){
        echo "{$quem} foi brutalmente aniquilado(a) <br><br>";
    }

    public function imprimirDados(){
        // This referencia o objeto que está sendo chamado com a função
        echo 
        "Raça: {$this->getRaca()} <br>
        Peso: {$this->getPeso()} <br>
        Cor: {$this->getCor()} <br><br>";
    }

    // GETTER: tipo de função feita para adquirir o valor de um atributo de um objeto
    public function getPeso(){
        return $this->peso;
    }
    public function getRaca(){
        return $this->raca;
    }
    public function getCor(){
        return $this->cor;
    }

    // SETTER: Tipo de função feita para definir o valor de um atributo de um objeto
    public function setRaca($raca){
        return $this->raca = $raca;
    }
    public function setCor($cor){
        return $this->cor = $cor;
    }
    public function setPeso($peso){
        if ($peso < 16000000 && $peso > 0) 
        return $this->peso = $peso;        
    }

    // ORDEM DE ELEMENTOS EM UMA CLASSE: 
    // Atributos -> Getters e Setters -> Outras funções
}

// OBJETO
$irineu = new Gato("IRINEU");

// $irineu->raca = "você não sabe e nem eu"; 
// $irineu->imprimirDados();
// Não é possível diretamente definir o valor de um atributo privado fora da classe


$robson = new Gato("ROBSON");
$robson->matar("samarah");

$fernando = new Gato("FERNANDO");
$fernando -> setRaca("Bulldog");
$fernando -> setCor("Verde");
$fernando -> setPeso(-1);
$fernando -> imprimirDados();

$lanaDelRey = new Gato("LANA DEL REY");

?>