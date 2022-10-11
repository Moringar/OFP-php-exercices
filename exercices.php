<?php



// 1 #####################################
$nombre1 = 2;
$nombre2 = 3;
echo " l’addition du nombre 1 et du nombre 2 est égale à ".($nombre1 + $nombre2);



// 2 #####################################
// Integer
$myInteger = 1;
// String
$myString = "string";
// Float
$myFloat = 2.123;
// Boolean
$myBool = true;



// 3 #####################################
$isActive = false;
$genre = "Troll";

if($isActive){
    echo " le compte du personnage $genre est actif.";
}
else{
    echo " le compte du personnage $genre est inactif.";
}



// 4 #####################################
$monNombre = 15;

// Vérification:
if($monNombre / 2 != 1 ){
    echo "nombre impair";
}
else{
    echo "nombre pair";
}

// Verification ternaire:
$evenOrOdd = ($monNombre /2 !=1) ? "impair" : "pair";
echo $evenOrOdd;



// 5 #####################################
if( !is_float($monNombre / 3) AND !is_float($monNombre / 5) ){
    echo " mon nombre est un multiple de 3 et 5";
}
else{
    echo " mon nombre n'est pas un multiple de 3 et 5";
}



// 6 #####################################
echo ".la valeur absolue de $monNombre est ".abs($monNombre);



// 7 #####################################
$myDays = ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche"];

for($day = 0; $day < count($myDays); $day++){
    echo " ".($day+1)."=>$myDays[$day]";
}



// 8 #####################################
function countBetween($countStart,$countStop){

    for ($click = $countStart; $click <= $countStop; $click++){
        echo $click;
    }
}
countBetween(2,5);



// 9 #####################################
function IsTheSumOfTheFirstTwoHigherThanTheMultiplicationOfTheLasts($sum1, $sum2, $mult1, $mult2){
    if(($sum1+$sum2) > ($mult1*$mult2)){
        echo "La somme est plus puissante que la multiplication.";
    }
    else if(($sum1+$sum2) == ($mult1*$mult2)){
        echo "La somme est égale que la multiplication.";
    }
    else{
        echo "La somme est inférieure la multiplication.";
    }
}

IsTheSumOfTheFirstTwoHigherThanTheMultiplicationOfTheLasts(1,2,3,4);



// 10  #####################################
$myArrayOfNumbers = [1, 2, 3, 4, 5, 6];
function separateThemAll($theTargetLocation){
    $myOddArray = [];
    $myEvenArray = [];

    
    foreach($theTargetLocation as $number){
        // Soudaine réalisation que le modulo est quand même plus adapté dans ce cas de figure.
        if($number % 2 == 0){
            $myEvenArray[] = $number;
        }
        else{
            $myOddArray[] = $number;
        }
    }

    // print_r($theTargetLocation);
    return print_r($myEvenArray);
    return print_r($myOddArray);
}

separateThemAll($myArrayOfNumbers);



// 11 #####################################
function areTheseDivisibleBy3($myOtherTargets){
    $divisibleBy3 = [];

    foreach($myOtherTargets as $target){
        if( !is_float($target / 3)){
            $divisibleBy3[] = $target;
        }
    }

    return print_r($divisibleBy3);
}
areTheseDivisibleBy3($myArrayOfNumbers);



// 12 #####################################
function sumMyArray($myArray){
    return array_sum($myArray);
}

echo "somme de l'array =>".sumMyArray($myArrayOfNumbers);



// 13 #####################################
function myMoyenne($myArray){
    return array_sum($myArray) / sizeof($myArray);
}
echo "moyenne de l'array =>".myMoyenne($myArrayOfNumbers);


// finito
