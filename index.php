<?php
require_once('function.php');


/* AFFICHER DE 1 en 1  */

// $i=1;

// while($i<=10){

//     echo $i++;

// }

/* AFFICHER DE 2 en 2 */


// for($i = 0; $i <= 10; $i=$i+2){

//     echo $i;

// }

/* AFFICHER LE CARRE DE CHAQUE */


// for($i = 1; $i <= 10; $i++){

//     echo $i*$i;

// }

/* CONCATENER 2 CHAINE DE VARIABLE  */

// $n = "hello";
// $m = "world";

// echo $n.' '.$m;


//   $array1 = ["fruits" => ['pomme', 'poire', 'banane']];
//   $array2 = ["vehicules" => ['voiture', 'motos', 'avion']];
//   $array3 = ["pays" => ['italie', 'france', 'belgique']];

// $arrayGlobal = array_merge($array1, $array2, $array3);

//   var_dump($arrayGlobal);

//   echo '<ul>';
//   foreach($arrayGlobal as $key => $array)
//   {

//       echo '<li>'.$key . '<ul>';
//       foreach($array as $value)
//       {
//           echo '<li>'.$value . '</li>';
//       }
//       echo '</ul></li>';
//   }

// $nombre = 20;

// number($nombre);

$nb = 5;

afficheInput($nb);


$array = array(
    array('name' => 'nom', 'type' => 'text', "class" => 'modal'),
    array('name' => 'prenom', 'type' => 'text', "class" => 'modal'),
    array('name' => 'valider', 'type' => 'submit', "class" => 'btn')
);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>


<form action="">
    <?php
    createForm($array);
    ?>
</form>