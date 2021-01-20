<?php
    function MensagemIMC($imc, $sexo){
        $baixo = 12.0;
        $adequado = 16.5;
        $sobrepeso = 18.0;
        $mensagem = "Obesidade.";
        if($sexo == "menina"){
            $baixo = 11.6;
            $adequado = 16.1;
            $sobrepeso = 17.6;
            $imc = $peso / ($altura ** 2);
        }

        if($imc <= $baixo){
            $mensagem = " Abaixo do peso."." IMC: ".number_format($imc, 2);
        }
        elseif($imc > $baixo and $imc <= $adequado){
            $mensagem = " Peso adequado."." IMC: ".number_format($imc, 2);
        }
        elseif($imc > $adequado and $imc <= $sobrepeso){
            $mensagem = " Sobrepeso."." IMC: ".number_format($imc, 2);
        }
        return $mensagem;
    }
    function IMC($peso, $alt){
        $altura = $alt / 100;
        $baixo = 12.0;
        $adequado = 16.5;
        $sobrepeso = 18.0;
        $imc = $peso / ($altura ** 2);
        
        return $imc;
    }

?>