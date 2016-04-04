<?php
/**
 * itemPizzaValidator
 * 
 * Provides basic validation for a pizza item
 * 
 * @author Aaron Bell
 */
class itemPizzaValidator{
	public $errors;
	public $hasErrors = false;

	public function validate($item){
		$itemElements = $item->getItemElements();
		$cheese = isset($itemElements['cheese']) ? $itemElements['cheese']: null;
		$sauce =  isset($itemElements['sauce']) ? $itemElements['sauce']: null;
		$toppings = isset($itemElements['toppings']) ? $itemElements['toppings']: null;
		$base =  isset($itemElements['base']) ? $itemElements['base']: null;

		
		if($base == null){
			$this->errors[] = "Pizza must have a crust type.";
			$this->hasErrors = true;
		}

		if($base != null && $cheese == null && $sauce == null && $toppings == null){
			$this->errors[] = "Pizza must have a crust and some additional item element";
			$this->hasErrors = true;
		}
		
		if(($cheese != null &&$cheese->getItemDescription() == "mozzerella cheese" ) && ($sauce !=null && $sauce->getItemDescription() == "tomato-garlic sauce")){
			$this->errors[] = "Mozzerella can't be used with tomato-garlic sauce";
			$this->hasErrors = true;
		}
		return !$this->hasErrors;
	}

	public function getErrors(){
		return $this->errors;
	}
}