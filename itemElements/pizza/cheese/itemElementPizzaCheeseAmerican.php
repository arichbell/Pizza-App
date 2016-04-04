<?php
/**
 * itemElementPizzaCheeseAmerican
 * 
 * Provides details for pizzas that have American Cheese
 * 
 * @author Aaron Bell
 */
class itemElementPizzaCheeseAmerican extends itemElementBase {
	public function itemElementPizzaCheeseAmerican(baseFactor $factor = null){
		parent::__construct($factor);
		$this->price = 3;
		$this->description = "american cheese";
	}
}