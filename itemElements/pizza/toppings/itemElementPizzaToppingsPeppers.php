<?php
/**
 * itemElementPizzaToppingsPeppers
 * 
 * Provides details for pizzas that have Peppers toppings
 * 
 * @author Aaron Bell
 */
class itemElementPizzaToppingsPeppers extends itemElementBase {
	public function itemElementPizzaToppingsPeppers(baseFactor $factor = null){
		parent::__construct($factor);
		$this->validators = array(
		new itemElementPizzaToppingsPeppersValidator()
		);
		$this->price = .2;
		$this->description = "peppers";
	}
}