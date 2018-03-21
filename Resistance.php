<?php

class Resistance {
	public $type;
	public $reduce;

	public function __construct($type, $reduce) {
		$this->type = $type;
		$this->reduce = $reduce;
	}
}