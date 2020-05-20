<?php

// function number($nombre)
// {

//     for ($i = 1; $i <= $nombre; $i++) {

//         echo $i.' ';
//     }
// };

function afficheInput($nb){

    for ($i = 1; $i <= $nb; $i++) {

        echo 'input : <input></input><br>';
    }

};

function createForm($array){

    foreach($array as $attribut){

        echo '<input name="'.$attribut['name'].'" type="'.$attribut['type'].'"class="'.$attribut['class'].'"
        placeholder="'.$attribut['name'].'"><br>';


    }
}

