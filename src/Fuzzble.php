<?php
namespace Fuzzble;

class Fuzzble 
{
	
	public $name;
	public $bornTime;

	public function __construct($name) {

		$this->name = $name;
		$this->bornTime = time();

	}

	public function getAge() {
		$age = (time() - $this->bornTime) / 60;
		return $age;
	}

}