<?php

class Charmeleon extends Pokemon {

	public function __construct($name) {
		$type = new Type(Type::FIRE);
		$attacks = array(new Attack('Head Butt', 10), new Attack('Flare', 30));
		$weakness = new Weakness(Type::WATER, 2);
		$resistance = new resistance(Type::ELECTRIC, -10);
		$name = $name;
		$hp = 60;

		parent::__construct($name, $type, $hp, $attacks, $weakness, $resistance);
	}
}