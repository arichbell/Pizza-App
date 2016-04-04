<?php
/**
 * itemElementPizzaToppingsOlive
 * 
 * Provides details for pizzas that have Olive toppings
 * 
 * @author Aaron Bell
 */
class itemElementPizzaToppingsOlive extends itemElementBase {
	public function itemElementPizzaToppingsOlive(baseFactor $factor = null){
		parent::__construct($factor);
		$this->validators = array(
		new itemElementPizzaToppingsOliveValidator()
		);
		$this->price = .4;
		$this->description = "olive";
	}
}