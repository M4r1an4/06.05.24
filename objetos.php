<?php
class Fruta {
    public $nome;
    public $cor;

    function__construct($nome, $cor){
        $this->nome = $nome;
        $this->cor = $cor;

    }

    function get_nome(){
        return $this->nome;
    }

    function get_cor(){
        return $this->cor;
    }
}

$maca = new Fruta("Maçã", "Vermelha");//Aqui está sendo criado um novo objeto $maca

echo "O nome da fruta é: " . $maca->get_nome();
//aqui está sendo ivocado o novo objeto $maca, o qual está sendo invocado o metodo(fuction) 
//get_nome(), que, por sua vez, está reinderizando o texto(nome da fruta) "Maçã", declarando na linha 20

echo "<br/>"; //Aqui está sendo reinderizado uma quebra de linha em html

echo"O processador do computador é: ". $maca->get_cor():




/**
 * Padrões de nomenclatura:
 * kebab-case: todas as letras minúsculas com traço "-" entre as palavras, utilizado mais em css e arquivos comuns.
 * PascalCase: A Primeira Letra De Cada Palavra É Maiúscula, utilizada mais em Objetos
 * camelCase: a primeira letra sempre começa com minúscula e as Próximas Palavras São Maiúsculas A Primeira Letra De Cada Palavra, utilizado mais na criação de métodos
 * snake_case: todas as letras são minúsculas e tem um sublinhado "_" no meio de cada palavra, utilizado mais na criação de variáveis
 * SCREAM_CASE: todas as letras são maiúsculas e são separadas por sublinhado "_", utilizado mais em variáveis CONSTANTES de ambiente/interface
 */