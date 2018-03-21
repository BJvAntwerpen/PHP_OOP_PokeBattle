<?php

require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';
//require 'Attack.php';

$Pikachu = new Pikachu('Pikachu');
$Charmeleon = new Charmeleon('Charmeleon');

print_r($Pikachu);
print_r($Charmeleon);

 ?>