<?php

require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';
require 'Type.php';

$Pikachu = new Pikachu('Pikachu');
$Charmeleon = new Charmeleon('Charmeleon');

$pikachuAttack = 0;
$charmeleonAttack = 1;

echo '<pre>';
//print_r($Pikachu);
//print_r($Charmeleon);
echo 'Pikachu has ' . $Pikachu->health . 'hp.<br>';
echo 'Charmeleon has ' . $Charmeleon->health . 'hp.<br>';
echo '<br>';
echo 'Pikachu used ' . $Pikachu->attacks[$pikachuAttack]->attackName . '.<br>';
$dmg = $Pikachu->attack($Pikachu->attacks[$pikachuAttack],$Charmeleon);
echo 'Pikachu did ' . $dmg . ' damage.<br>';
echo 'Charmeleon has ' . $Charmeleon->health . ' hp left.<br>';
echo '<br>';
echo 'Charmeleon used ' . $Charmeleon->attacks[$charmeleonAttack]->attackName . '.<br>';
$dmg = $Charmeleon->attack($Charmeleon->attacks[$charmeleonAttack],$Pikachu);
echo 'Charmeleon did ' . $dmg . ' damage.<br>';
echo 'Pikachu has ' . $Pikachu->health . ' hp left.<br>';

 ?>