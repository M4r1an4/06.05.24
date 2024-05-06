

<?php
class Paciente {
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;

    }

    function get_nome(){
        return $this->nome;
    }

    function get_idade(){
        return $this->idade;
    }
}

$pacientes = new Paciente("Rayssa", "17");//Aqui está sendo criado um novo objeto $maca

echo "O nome do paciente é: " . $pacientes->get_nome();
//aqui está sendo ivocado o novo objeto $maca, o qual está sendo invocado o metodo(fuction) 
//get_nome(), que, por sua vez, está reinderizando o texto(nome da fruta) "Maçã", declarando na linha 20

echo "<br/>"; //Aqui está sendo reinderizado uma quebra de linha em html

echo"A idade do paciente é: " . $pacientes->get_idade(); //aqui está sendo invocado o novo objeeto $pacientes, o qual está invocando o método (function) get_processador(), que,por sua vez, está renderizando o texto (processador do computador) "Ryzen", declarado na linha 20


//nome 
//idade
?>