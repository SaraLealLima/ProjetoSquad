<?php
    function MensagemIMC($imc, $sexo){
        $baixo          = 12.0;
        $adequado       = 16.5;
        $sobrepeso      = 18.0;
        $imc_formatado  = number_format(floatval($imc), 2);
        $mensagem       = "Obesidade. IMC: ".$imc_formatado;
        if($sexo == "feminino"){
            $baixo      = 11.6;
            $adequado   = 16.1;
            $sobrepeso  = 17.6;
        }

        if($imc <= $baixo){
            $mensagem = " Abaixo do peso. IMC: ".$imc_formatado;
        }
        elseif($imc > $baixo and $imc <= $adequado){
            $mensagem = " Peso adequado. IMC: ".$imc_formatado;
        }
        elseif($imc > $adequado and $imc <= $sobrepeso){
            $mensagem = " Sobrepeso. IMC: ".$imc_formatado;
        }
        return $mensagem;
    }
    function IMC($peso, $alt){
        $altura     = floatval($alt) / 100;
        $baixo      = 12.0;
        $adequado   = 16.5;
        $sobrepeso  = 18.0;
        $imc        = floatval($peso) / ($altura ** 2);
        
        return $imc;
    }

?>