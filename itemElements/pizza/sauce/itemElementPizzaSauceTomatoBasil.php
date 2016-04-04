<?php
/**
 * itemElementPizzaSauceTomatoBasil
 * 
 * Provides details for pizzas that have Tomato-Basil Sauce
 * 
 * @author Aaron Bell
 */
class itemElementPizzaSauceTomatoBasil extends itemElementBase {
	public function itemElementPizzaSauceTomatoBasil(baseFactor $factor = null){
		parent::__construct($factor);
		$this->price = .50;
		$this->description = "tomato-basil sauce";
	}
}