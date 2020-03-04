<?php
// Define lista de caracteres do alfabeto e caracteres especiais
$alfabeto = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$especiais = ['.',':',' ']; 

//funcao de deslocamento
function organizandoLetras ($frase){
    $quebraPalavra = str_split($frase); //quebra os caracteres
    $minusculas = strtolower($quebraPalavra); //colocar tudo em minuscula
}

function deslocamento ($numeroDeCasas, $minusculas) {
    global $alfabeto;
    $numeroDeCasas = 6; 
    if(in_array($alfabeto,$minusculas)) {
        foreach($minusculas as $indice=>$minuscula) {
            $posicaoFinal = $indice - $numeroCasas; 
        }
        if($posicaoFinal < 0) {
            $posicaoFinal = count($alfabeto) - $numeroCasas; 
        }
    }
    return $posicaoFinal; 
    }

function verificaEspeciais ($numeroDeCasas, $especiais) {
    global $minusculas;
    if(!in_array($minusculas, $especiais)) {
           deslocamento($numeroDeCasas, $minusculas); 
    } else {
        deslocamento(0, $minusculas); 
    }
}

?> 