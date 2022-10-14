<?php

    
    $mes = $_GET["f_mes"];
    $dia = $_GET["f_dia"];

    $xml = simplexml_load_file('document.xml');
   
    //Verifica a data e imprime o conteúdo correspondente ao sígno da data.
    //Caso seja uma data inválida, imprime uma frase de aviso e um botão para retornar a página inicial.
    
    //Capricórnio e Aquário
    if ($mes == 1) {
        if ($dia < 21) {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Capricórnio"){
                    echo '<h1>Você é de Capricórnio!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        } else {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Aquário"){
                    echo '<h1>Você é de Aquário!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        }
    };

    //Aquário e Peixes
    if ($mes == 2 && $dia < 30){
        if ($dia < 20) {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Aquário"){
                    echo '<h1>Você é de Aquário!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        } else {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Peixes"){
                    echo '<h1>Você é de Peixes!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        }
    } else if($mes == 2 && $dia >= 30) {
        echo 'A data informada é inválida u.u<br/><br/><a href="index.html">Voltar</a>';
    };

    //Peixes e Áries
    if ($mes == 3) {
        if ($dia < 21) {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Peixes"){
                    echo '<h1>Você é de Peixes!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        } else {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Áries"){
                    echo '<h1>Você é de Áries!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        }
    };

    //Áries e Touro
    if ($mes == 4 && $dia <= 30) {
        if ($dia < 21) {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Áries"){
                    echo '<h1>Você é de Áries!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        } else {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Touro"){
                    echo '<h1>Você é de Touro!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        }
    }else if($mes == 4 && $dia > 30){
        echo 'A data informada é inválida u.u<br/><br/><a href="index.html">Voltar</a>';
    };
    
    //Touro e Gêmeos
    if ($mes == 5) {
        if ($dia < 21) {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Touro"){
                    echo '<h1>Você é de Touro!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        } else {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Gêmeos"){
                    echo '<h1>Você é de Gêmeos!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        }
    };

    //Gêmeos e Câncer
    if ($mes == 6 && $dia <= 30) {
        if ($dia < 21) {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Gêmeos"){
                    echo '<h1>Você é de Gêmeos!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        } else {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Câncer"){
                    echo '<h1>Você é de Câncer!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        }
    } else if($mes == 6 && $dia > 30) {
        echo 'A data informada é inválida u.u<br/><br/><a href="index.html">Voltar</a>';
    };

    //Câncer e Leão
    if ($mes == 7) {
        if ($dia < 22) {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Câncer"){
                    echo '<h1>Você é de Câncer!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        } else {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Leão"){
                    echo '<h1>Você é de Leão!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        }
    };

    //Leão e Virgem
    if ($mes == 8) {
        if ($dia < 23) {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Leão"){
                    echo '<h1>Você é de Leão!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        } else {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Virgem"){
                    echo '<h1>Você é de Virgem!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        }
    };

    //Virgem e Libra
    if ($mes == 9 && $dia <= 30) {
        if ($dia < 23) {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Virgem"){
                    echo '<h1>Você é de Virgem!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        } else {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Libra"){
                    echo '<h1>Você é de Libra!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        }
    } else if($mes == 9 && $dia > 30) {
        echo 'A data informada é inválida u.u<br/><br/><a href="index.html">Voltar</a>';
    };

    //Libra e Escorpião
    if ($mes == 10) {
        if ($dia < 23) {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Libra"){
                    echo '<h1>Você é de Libra!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        } else {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Escorpião"){
                    echo '<h1>Você é de Escorpião!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        }
    };

    //Escorpião e Sagitário
    if ($mes == 11 && $dia <= 30) {
        if ($dia < 22) {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Escorpião"){
                    echo '<h1>Você é de Libra!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        } else {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Sagitário"){
                    echo '<h1>Você é de Sagitário!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        }
    } else if($mes == 11 && $dia > 30) {
        echo 'A data informada é inválida u.u<br/><br/><a href="index.html">Voltar</a>';
    };

    //Sagitário e Capricórnio
    if ($mes == 12) {
        if ($dia < 22) {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Sagitário"){
                    echo '<h1>Você é de Sagitário!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        } else {
            foreach($xml->signo as $signo):
                if ($signo->signoNome == "Capricórnio"){
                    echo '<h1>Você é de Capricórnio!</h1>';
                    echo '<strong>Data de início:</strong> ' . $signo->datainicio . '<br/>';
                    echo '<strong>Data final:</strong> ' . $signo->datafim . '<br/>';
                    echo '<strong>Descrição:</strong> ' . $signo->descricao . '<br/>';
                };
            endforeach;
        }
    };

 /*
$link = "http://www.devmedia.com.br/xml/devmedia_full.xml";
    //link do arquivo xml
    $xml = simplexml_load_file($link) -> channel;
    //carrega o arquivo XML e retornando um Array

    foreach($xml -> item as $item){
    //faz o loop nas tag com o nome "item"
        //exibe o valor das tags que estão dentro da tag "item"
        //utilizamos a função "utf8_decode" para exibir os caracteres corretamente
        echo "<strong>Título:</strong> "
        .utf8_decode($item -> title)."<br />";
        echo "<strong>Link:</strong> "
        .utf8_decode($item -> link)."<br />";
        echo "<strong>Descrição:</strong> "
        .utf8_decode($item -> description)."<br />";
        echo "<strong>Autor:</strong> "
        .utf8_decode($item -> author)."<br />";
        echo "<strong>Data:</strong> "
        .utf8_decode($item -> pubDate)."<br />";
        echo "<br />";
    } //fim do foreach*/
?>
