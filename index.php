<?php

require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';
require 'Type.php';

$pikachu = new Pikachu('Pikachu');
$pikachuAttack = 0;

$charmeleon = new Charmeleon('Charmeleon');
$charmeleonAttack = 1;

echo '<pre>';
//print_r($pikachu);
//print_r($charmeleon);
echo 'Pikachu has ' . $pikachu->health . 'hp.<br>';
echo 'Charmeleon has ' . $charmeleon->health . 'hp.<br>';
echo '<br>';
echo 'Pikachu used ' . $pikachu->attacks[$pikachuAttack]->attackName . '.<br>';
$dmg = $pikachu->attack($pikachu->attacks[$pikachuAttack],$charmeleon);
echo 'Pikachu did ' . $dmg . ' damage.<br>';
echo 'Charmeleon has ' . $charmeleon->health . ' hp left.<br>';
echo '<br>';
echo 'Charmeleon used ' . $charmeleon->attacks[$charmeleonAttack]->attackName . '.<br>';
$dmg = $charmeleon->attack($charmeleon->attacks[$charmeleonAttack],$pikachu);
echo 'Charmeleon did ' . $dmg . ' damage.<br>';
echo 'Pikachu has ' . $pikachu->health . ' hp left.<br>';

 ?>