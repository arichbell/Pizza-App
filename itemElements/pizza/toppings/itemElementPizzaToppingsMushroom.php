<?php
/**
 * itemElementPizzaToppingsMushroom
 * 
 * Provides details for pizzas that have Mushroom toppings
 * 
 * @author Aaron Bell
 */
class itemElementPizzaToppingsMushroom extends itemElementBase {
	public function itemElementPizzaToppingsMushroom(baseFactor $factor = null){
		parent::__construct($factor);
		$this->price = .6;
		$this->description = "mushroom";
	}
}