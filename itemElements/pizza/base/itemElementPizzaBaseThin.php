<?php
/**
 * itemElementPizzaBaseThin
 * 
 * Provides details for pizzas that have thin crust
 * 
 * @author Aaron Bell
 */
class itemElementPizzaBaseThin extends itemElementBase{
	public function itemElementPizzaBaseThin(baseFactor $factor = null){
		parent::__construct(null);
		$this->price = 1;
	}
	public function getDescription(){
		return "Thin Crust";
	}
}