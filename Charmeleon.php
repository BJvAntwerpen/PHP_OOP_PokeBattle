<?php

class Charmeleon extends Pokemon {
	public $type = 'Fire';
	public $HP = 60;
	public $health = 60;
	public $attacks = array(array('Head Butt', 10), array('Flare', 30));
	public $weakness = array('Water', 2);
	public $resistance = array('Electric', -10);

	public function __construct($name) {
		parent::__construct($name, $this->type, $this->HP, $this->health, $this->attacks, $this->weakness, $this->resistance);
	}
}