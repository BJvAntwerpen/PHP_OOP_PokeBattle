<?php

require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';
//require 'Attack.php';
//require 'Resistance.php';
//require 'Weakness.php';

$Pikachu = new Pikachu('Pikachu');
$Charmeleon = new Charmeleon('Charmeleon');

print_r($Pikachu);
print_r($Charmeleon);

 ?>