<?php

    
    $mes = $_GET["f_mes"];
    $dia = $_GET["f_dia"];

    $xml = simplexml_load_file('document.xml');

    echo $xml;

   
    //Verifica a data e imprime o conteúdo correspondente ao sígno da data.
    //Caso seja uma data inválida, imprime uma frase de aviso e um botão para retornar a página inicial.
    if (checkdate($dia,$mes,2021)){
        if ($mes == 1) {
            if ($dia < 21) {
                foreach($xml->signos->signo as $signo):
                    if ($signo->signoNome == "Capricórnio"){
                        echo '<h1>Você é de Capricórnio!</h1>';
                    };
                endforeach;
            } else {
                echo 'Você é de Ares!<br/><br/><a href="./index.html">Voltar</a>';
            }
        }
    } else{
        echo 'A data informada é inválida u.u<br/><br/><a href="index.html">Voltar</a>';
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
