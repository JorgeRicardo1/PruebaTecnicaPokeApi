<?php

    function getData(){
        $url = 'https://pokeapi.co/api/v2/pokemon?limit=10&offset=0';
        $data = file_get_contents($url);
        $json = json_decode($data);
        return $json;
    }

    function renderPokemons($limite, $datos)
    {
        
        for ($i = 0; $i < $limite; $i++){
            // echo $json->results[$i]->name;
            echo '<div class="nombre_pokemon"><a href="">'.$datos->results[$i]->name.'</a></div>';
        }
    }

    $datos = getData();
    
    
?>