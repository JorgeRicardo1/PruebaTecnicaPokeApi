<?php

    // $url = 'https://pokeapi.co/api/v2/pokemon/2/';
    $limite = 30;
    $url = 'https://pokeapi.co/api/v2/pokemon?limit='.$limite.'&offset=0';
    $data = file_get_contents($url);
    $json = json_decode($data);
    
    // echo '<img src="'.$json->sprites->front_default.'" witdth="200"></img>';


    // print_r($json->results[0]->name);

    function renderPokemons($limite)
    {
        global $url, $data, $json;

        for ($i = 0; $i < $limite; $i++){
            // echo $json->results[$i]->name;
            echo '<div class="nombre_pokemon">'.$json->results[$i]->name.'</div>';
        }
    }
    
?>