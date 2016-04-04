<?php
/**
 * itemElementPizzaBaseThick
 * 
 * Provides details for pizzas that have thick crust
 * 
 * @author Aaron Bell
 */
class itemElementPizzaBaseThick extends itemElementBase {

	public function itemElementPizzaBaseThick(baseFactor $factor = null){
		parent::__construct(null);
		$this->price = 1.5;
		$this->validators[] = new itemElementPizzaBaseThickValidator();
	}

	public function getDescription(){
		return "Thick Crust";
	}
	
}