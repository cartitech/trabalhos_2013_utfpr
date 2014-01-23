<?php
sleep(1);
$busca = $_GET['busca'];
$cidades = explode("\n", file_get_contents("./cidades.txt"));
$cidades_selecionadas = array_filter($cidades, function ($cidade) use ($busca){
    return (substr($cidade, 0, strlen($busca)) == $busca);
});

foreach ($cidades_selecionadas as $cidade) {
    echo "{$cidade},";
}
