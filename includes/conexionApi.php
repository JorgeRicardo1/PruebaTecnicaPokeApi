<?php

    function getAllData(){
        $url = 'https://pokeapi.co/api/v2/pokemon?limit=150&offset=0';
        $data = file_get_contents($url);
        $json = json_decode($data);
        return $json;
    }

    function getPokemon($nombre){
        $url = "https://pokeapi.co/api/v2/pokemon/$nombre/";
        $data = file_get_contents($url);
        $json = json_decode($data);
        return $json;
    }

    function renderPokemons($limite, $datos)
    {
        
        for ($i = 0; $i < $limite; $i++){
            // echo $json->results[$i]->name;
            $nombreUrl = $datos->results[$i]->name;
            echo "<div class='nombre_pokemon'>
                    <a  href='http://localhost/ejercicios/pruebatecnica/vistas/habilidades.php?name=$nombreUrl'>". $datos->results[$i]->name. "</a>
                </div>";
        }
    }

    function renderHabilidades($pokemon){
        $numHabilidades = sizeof($pokemon->abilities);
        for ($i = 0; $i < $numHabilidades; $i++){
            $habilidad = $pokemon->abilities[$i]->ability->name;
            echo "<div class=habilidad>$habilidad</div>";
        }
    }

    $datos = getAllData();
    
    
?>