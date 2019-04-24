<?php

$vetor1 = array(-1,2,-5);
$vetor2 = array(3,0,-3);
$vetor3 = array(5,7,-6);

$matrizA = array ($vetor1,$vetor2,$vetor3);

//    print_r($matrizA);

$sumMainDiag = $matrizA[0][0] + $matrizA[1][1] + $matrizA[2][2];
$sumSecDiag = $matrizA[0][2] + $matrizA[1][1] + $matrizA[2][0];

// echo "O valor da Diagonal Principal eh...=".$sumMainDiag."<br>";
// echo "O valor da Diagonal Secundaria eh...=".$sumSecDiag;


$vetor4 = array(1,2);
$vetor5 = array(3,4);

$matrizT = array($vetor4,$vetor5);
//    print_r($matrizT);

$value01 = $matrizT[0][1];
$value10 = $matrizT [1][0];

$matrizT[0][1] = $value10;
$matrizT[1][0] = $value01;

// print_r($matrizT);

$vetor20Positions = array(0,2,4,3,5,6,1,3,5,6,4,2,1,4,6,7,99,7,6,4,3);
$media = array_sum($vetor20Positions)/sizeof($vetor20Positions);

sort($vetor20Positions);
echo "o menor valor do vetor eh=".$vetor20Positions[0]."<br>";
echo "o maior valor do vetor eh=".$vetor20Positions[20]."<br>";
echo "o tamanho do vetor eh=".$media."<br>";








?>