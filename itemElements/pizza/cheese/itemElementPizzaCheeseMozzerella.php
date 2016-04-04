<?php
/**
 * itemElementPizzaCheeseMozzerella
 * 
 * Provides details for pizzas that have Mozzerella Cheese
 * 
 * @author Aaron Bell
 *
 */
class itemElementPizzaCheeseMozzerella extends itemElementBase {
	public function itemElementPizzaCheeseMozzerella(baseFactor $factor = null){
		parent::__construct($factor);
		$this->price = 2;
		$this->description = "mozzerella cheese";
	}
}