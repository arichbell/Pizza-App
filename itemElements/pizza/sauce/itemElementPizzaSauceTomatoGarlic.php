<?php
/**
 * itemElementPizzaSauceTomatoGarlic
 * 
 * Provides details for pizzas that have Tomato-Garlic Sauce
 * 
 * @author Aaron Bell
 */
class itemElementPizzaSauceTomatoGarlic extends itemElementBase {
	public function itemElementPizzaSauceTomatoGarlic(baseFactor $factor = null){
		parent::__construct($factor);
		$this->price = .75;
		$this->description = "tomato-garlic sauce";
	}
}