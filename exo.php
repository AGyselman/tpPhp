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

// function nombre($a) {
// if($a >= 0)
// {
//     echo "le chiffre est positif";
// } else {
//     echo "le chiffre est négatif";
// }
// }
// echo nombre(-2);


    // function plusGrand($nbr1, $nbr2, $nbr3){
    //     if($nbr1>$nbr2 AND $nbr1>$nbr3){
    //         echo "$nbr1 est le plus grand des 3";
    //     }
    //     else if($nbr2>$nbr3){
    //         echo "$nbr2 est le plus grand des 3";
    //     }
    //     else{
    //         echo "$nbr3 est le plus grand des 3";
    //     }
    // }
    // function plusPetit($nbr1, $nbr2, $nbr3){
    //     if($nbr1<$nbr2 AND $nbr1<$nbr3){
    //         echo "$nbr1 est le plus petit des 3";
    //     }
    //     else if($nbr2<$nbr3){
    //         echo "$nbr2 est le plus petit des 3";
    //     }
    //     else{
    //         echo "$nbr3 est le plus petit des 3";
    //     }
    // }
    // function moyenne($nbr1, $nbr2, $nbr3){
    //     return ($nbr1+$nbr2+$nbr3)/3;
    // }
    // plusGrand(14,16,18);
    // echo '<br>';
    // plusPetit(14,16,18); 
    // echo '<br>';
    // echo 'la moyenne est égale à : '.moyenne(14,25,53).'';

    // EXO 4

    function jeSaisPas ($age)
    {
        switch ($age) {
            case $age>=6 and $age<=7:
                echo "est un poussin";
                break;
            case $age>=8 and $age<=9:
                echo "est un pupille";
                break;
            case $age>=10 and $age<=11:
                echo "est un minime";
                break;    
            case $age>=12:
                echo "est un cadet";
                break;     
            default:
            echo "est trop jeune";
            break;        
        }

    }
jeSaisPas(5);
?>

