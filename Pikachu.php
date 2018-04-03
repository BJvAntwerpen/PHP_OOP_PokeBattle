<?php

class Pikachu extends Pokemon {

	public function __construct($name) {
		$type = new Type(Type::ELECTRIC);
		$attacks = array(new Attack('Electric Ring', 50), new Attack('Pika Punch', 20));
		$weakness = new Weakness(Type::FIRE, 1.5);
		$resistance = new resistance(Type::STEEL, -20);
		$name = $name;
		$hp = 60;

		parent::__construct($name, $type, $hp, $attacks, $weakness, $resistance);
	}
}