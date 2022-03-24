<!-- <?php
    $maVariable = 5;
    echo $maVariable;
    echo gettype ($maVariable);
    echo "<br>";
    $monString = 'Anthony';
    echo $monString;
    echo "<br>";
    $monBoolean = false;
    echo gettype ($monBoolean);
?> -->

<!-- Exemple Concaténation -->
<!-- <?php
    $prenom = 'Anthony';
    echo 'mon prénom : '.$prenom.'<br>';
    echo "mon prénom : $prenom<br>";
    echo "mon prénom : {$prenom}<br>";  
?> -->

<?php
/* 
    $a = 12;
    $b = 10;

    $total = $a + $b;
    echo "mon resultat $total";
    */
?> 

<?php

// EXO 2
    // $a = 5;
    // $b = 3;
    // $c = $a + $b;
    // echo "$a<br>"; 
    // echo "$b<br>"; 
    // echo "$c<br>"; 

    // $a = 2;
    // echo "$a<br>";
    // $c = $b - $a;
    // echo "$a<br>";
    // echo "$b<br>"; 
    // echo "$c<br>"; 

// EXO 3

    // $a = 15;
    // $b = 23;
    // $c = $a;
    // $a = $b;
    // $b = $c;
    // echo "$a<br>";
    // echo "$b<br>";

// EXEMPLE FONCTION

// function addition($a,$b)
//     {
//         /* $total = $a+$b;
//         return $total; */
//         return $a+$b;
//     }
//     echo addition(17,23);
//     $a = 10;
//     $b = 27;
//     echo "<script> 
//         console.log($a);
//         console.log($b);
//         </script>";


// EXO 4 
// $prixHt =15;
// $nbArticle = 22;
// $tauxTva = 0.2;
// function article($a,$b,$c)
// {
//     echo "$a <br>";
//     echo "$b <br>";
//     echo "$c <br>";
//     return $a*$b*$c;
// }
// echo article($prixHt,$nbArticle,$tauxTva);

function nombre($a) {
if($a >= 0)
{
    echo "le chiffre est positif";
} else {
    echo "le chiffre est négatif";
}
}
echo nombre(-2);
?>

