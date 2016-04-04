<?php
/**
 * itemElementPizzaCheeseSwiss
 * 
 * Provides details for pizzas that have Swiss Cheese
 * 
 * @author Aaron Bell
 */
class itemElementPizzaCheeseSwiss extends itemElementBase {
	public function itemElementPizzaCheeseSwiss(baseFactor $factor = null){
		parent::__construct($factor);
		$this->price = 4;
		$this->description = "swiss cheese";
	}
}