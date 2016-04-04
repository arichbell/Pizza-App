<?php
/**
 * itemElementPizzaSauceTomato
 * 
 * Provides details for pizzas that have Tomato Sauce
 * 
 * @author Aaron Bell
 */
class itemElementPizzaSauceTomato extends itemElementBase {
	public function itemElementPizzaSauceTomato(baseFactor $factor = null){
		parent::__construct($factor);
		$this->price = .25;
		$this->description = "tomato";
	}
}