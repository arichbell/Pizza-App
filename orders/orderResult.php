<?php
/**
 * orderResult
 * 
 * Created by an order to hold it's results
 * @author Aaron Bell
 */
class orderResult {

	public $errors = "";
	public $hasErrors;
	public $price;
	public $result;
	public $itemDescription = array();

	function orderResult(){

	}

	function getErrors(){
		return $this->errors;
	}

	function hasErrors(){
		return $this->hasErrors;
	}

	function setErrors($errors){
		$this->errors = $errors;
		$this->hasErrors = true;
	}

	function getPrice(){
		return $this->price;
	}

	function setPrice($price){
		$this->price = $price;
	}
	
	function setItemDescription($description){
		$this->itemDescription[] = $description;
	}

	function getResult(){
		if($this->hasErrors()){
			$error = "";
			// flatten array
			$it = new RecursiveIteratorIterator(new RecursiveArrayIterator($this->errors));
			foreach($it as $v) {
				$error .= $v. ", ";
			}
			throw new InvalidPriceException($error, 1);  
		} else {
			$description = "";
			foreach($this->itemDescription as $itemDescription){
				$description .= implode($itemDescription);
			}
			return $description;
		}
		return;
	}
	function getItemDescription(){
		return $this->itemDescription;
	}
}