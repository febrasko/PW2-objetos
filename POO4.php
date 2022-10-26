<!-- Orientação a Objeto -->
<?php
// CLASSE
// interface é um contrato que serve para "obrigar" as class a usar esses paremetros
interface Animais {
    public function fazerSom ();
    public function getRaca();
    public function seteRaca($setRaca); 
}
// implements serve para usar a inteface na funcao
class Gato implements Animais { // CamelCase
    // Elementos privados não podem ser usados fora da classe
    // Elementos protected podem ser acessados somente pela classe e pelos filhos

    public function miar(){ // pascalCase
        echo "VRUM VRUM!";
    }

    
    // ORDEM DE ELEMENTOS EM UMA CLASSE: 
    // Atributos -> Getters e Setters -> Outras funções
}
class Cachorro extends Animal {
    // extends serve para herdar os atributos e metodos de outra class
    // herança é utilizada para não ter repetição de codigo 
    public function latir(){
        echo"mau";
    }
}
class Animal  {
    private $raca;
    private $peso;
    private $cor;
    
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
        if ($raca <> "")
        return $this->raca = $raca;
        else {
            echo"insira as coisas <br>";
        }
    }
    public function setCor($cor){
        if ($cor <> "")
        return $this->cor = $cor;
        else {
            echo"insira as coisas <br>";
        }
    }
    public function setPeso($peso){
        if ($peso < 16000000 && $peso > 0) 
        return $this->peso = $peso;
    }

    public function matar($quem){
        echo "{$quem} foi brutalmente aniquilado(a) <br><br>";
    }
}
// OBJETO
$irineu = new Gato("IRINEU");

// $irineu->raca = "você não sabe e nem eu"; 
// $irineu->imprimirDados();
// Não é possível diretamente definir o valor de um atributo privado fora da classe
// Por padrão, defina todos os atributos de uma classe como privados
$chuvisco = new Cachorro ();
$chuvisco -> setRaca("canibal");
$chuvisco -> setCor("idjsg");
$chuvisco -> setPeso(1);
$chuvisco -> imprimirDados();
$chuvisco -> matar("cauan");

$robson = new Gato("ROBSON");
$robson->matar("samarah");

$fernando = new Gato("FERNANDO");
$fernando -> setRaca("Bull dog");
$fernando -> setCor("Verde");
$fernando -> setPeso(1);
$fernando -> imprimirDados();

$lanaDelRey = new Gato("LANA DEL REY");

?>