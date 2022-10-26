<!-- Orientação a Objeto -->
<?php
// CLASSE
class Gato { // CamelCase
    // Elementos privados não podem ser usados fora da classe
    private $raca;
    private $peso;
    private $cor;

    public function miar(){ // pascalCase
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
        return "{$this->peso} gramas";
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
// Criando um objeto chamando a classe

// $irineu = new Gato();
// $irineu->raca = "você não sabe e nem eu"; 
// $irineu->imprimirDados();
// Não é possível diretamente definir o valor de um atributo privado fora da classe
// Por padrão, defina todos os atributos de uma classe como privados


$robson = new Gato();
$robson->matar("samarah");

// Definindo os atributos da classe usando as funções setters
$fernando = new Gato("FERNANDO");
$fernando -> setRaca("Bulldog");
$fernando -> setCor("Verde");
$fernando -> setPeso(14);
$fernando -> imprimirDados();
?>