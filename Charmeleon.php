<?php

class Charmeleon extends Pokemon {

	public function __construct($name) {
		$type = new Type('Fire');
		$attacks = array(new Attack('Head Butt', 10), new Attack('Flare', 30));
		$weakness = new Weakness('Water', 2);
		$resistance = new resistance('Electric', -10);
		$name = $name;
		$hp = 60;

		parent::__construct($name, $type, $hp, $attacks, $weakness, $resistance);
	}
}