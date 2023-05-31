<?php

$cad = array(

    array(
        "nome" => "Luiza",
        "idade" => 58,
        "endereço" => "hena",
        "cidade" => "São Paulo",
        "estado" => "SP",
        "bairro" => "Tiradentes",
        "escolaridade" => "Superior  completo"

    ),
    array(
        "nome" => "Carla",
        "idade" => 72,
        "endereço" => "hena",
        "cidade" => "São Paulo",
        "estado" => "SP",
        "bairro" => "Tiradentes",
        "escolaridade" => "Superior  completo"
    ),
    array(
        "nome" => "Roberta",
        "idade" => 19,
        "endereço" => "hena",
        "cidade" => "São Paulo",
        "estado" => "SP",
        "bairro" => "Tiradentes",
        "escolaridade" => "Superior  completo"
    ),
    array(
        "nome" => "Tamires",
        "idade" => 37,
        "endereço" => "hena",
        "cidade" => "São Paulo",
        "estado" => "SP",
        "bairro" => "Tiradentes",
        "escolaridade" => "Superior  completo"
    ),
    array(
        "nome" => "Pamela",
        "idade" => 46,
        "endereço" => "hena",
        "cidade" => "São Paulo",
        "estado" => "SP",
        "bairro" => "Tiradentes",
        "escolaridade" => "Superior  completo"
    ),
);

foreach ($cad as $cod) {
   
    echo "nome:" . $cod["nome"] . '<br/>' . "idade: " . $cod["idade"] . '<br/>' . "endereço: " . $cod["cidade"] . '<br/>' . "cidade: " . $cod["cidade"] . '<br/>' . "estado: " . $cod["estado"] . '<br/>' . "bairro: " . $cod["bairro"] . '<br/>' . "escolaridade: " . $cod["escolaridade"] . '<br/>' . '<br/>';

}

?>