<?php
/**
 * itemBase
 * 
 * Provides base functionality for items
 * 
 * @author Aaron Bell
 */
class itemBase extends item {
	public $validators = array();
	public $price;
	public $itemElements;
	protected $hasErrors = false;
	protected $errors = array();

	public function itemBase(){
	}

	public function getValidators(){
		return $this->validators;
	}

	public function getErrors(){
		return $this->errors;
	}

	public function hasErrors(){
		return $this->hasErrors;
	}

	public function validate(){
		foreach($this->validators as $validator){
			if(!$validator->validate($this)){

				$this->errors[] = $validator->getErrors();
				$this->hasErrors = true;
			}
		}
		if($this->hasErrors){
			return false;
		}
		foreach($this->itemElements as $itemElement){
			$itemElement->validate();
			if($itemElement->hasErrors()){
				$this->errors[] =$itemElement->getErrors();
				$this->hasErrors = true;
			}
		}
		if($this->hasErrors){
			return false;
		}
		return true;

	}

	public function setPrice($price){
		$this->price = $price;
	}

	public function getPrice(){
		if($this->price == 0){
			foreach($this->itemElements as $itemElement){
				$this->price += $itemElement->getPrice();
			}
		}
		// format price in dollars
		return "$".number_format( $this->price, 2);
	}

	public function getItemizedPrice(){
		$itemizedPrice = array();
		foreach($this->itemElements as $itemElement){
			if(!isset($itemizedPrice['description'])){
				$itemizedPrice['description'] = $itemElement->getDescription() ." - ".$itemElement->getPrice()."<br/>";
			}else{
				$itemizedPrice['description'] .= $itemElement->getDescription() ." - ".$itemElement->getPrice()."<br/>";
			}
		}
		$itemizedPrice['description'] .= $this->getDescription() ." - ";
		$itemizedPrice['price'] = $this->getPrice();
		return $itemizedPrice;
	}

	public function getItemElements(){
		return $this->itemElements;
	}

	public function getDescription(){
		return get_class($this)." needs a description.";
	}
}