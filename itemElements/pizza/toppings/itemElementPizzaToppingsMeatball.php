<?php
/**
 * itemElementPizzaToppingsMeatball
 * 
 * Provides details for pizzas that have Meatball toppings
 * 
 * @author Aaron Bell
 */
class itemElementPizzaToppingsMeatball extends itemElementBase {
	public function itemElementPizzaToppingsMeatball(baseFactor $factor = null){
		parent::__construct($factor);
		$this->price = .8;
		$this->description = "meatball";
	}
}