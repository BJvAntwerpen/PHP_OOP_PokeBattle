<?php

class Pikachu extends Pokemon {
	public $type = 'Electric';
	public $HP = 60;
	public $health = 60;
	public $attacks = array(array('Electric Ring', 50), array('Pika Punch', 20));
	public $weakness = array('Fire', 1.5);
	public $resistance = array('Steel', -20);

	public function __construct($name) {
		parent::__construct($name, $this->type, $this->HP, $this->health, $this->attacks, $this->weakness, $this->resistance);
	}
}