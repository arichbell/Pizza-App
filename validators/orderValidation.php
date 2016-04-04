<?php
/**
 * orderValidation
 * 
 * Validates an entire order that has one or more items
 * 
 * @author Aaron Bell
 *
 */
class orderValidation {

	private $order;
	private $validators;
	private $items;
	private $hasErrors = false;
	private $errors = array();

	public function orderValidation($order){
		$this->order = $order;
		$this->items = $order->getItems();

		$this->validators = array(
			new orderValidator(),
		);
			
	}

	public function getErrors(){
		

		return $this->errors;
	}

	public function hasErrors(){
		return $this->hasErrors;
		
	}

	public function addErrors($errors){
		foreach($errors as $error){
			$this->errors[] = $error;
		}
	}

	public function validate(){
		if($this->items){
			foreach($this->items as $item){
				$item->validate();
				if($item->hasErrors()){
					$this->errors[] = $item->getErrors();
					$this->hasErrors = true;
				}
			}
		} else {
			$this->errors[]= "Order can't be empty. Add Items.";
			$this->hasErrors = true;
		}
		if($this->validators != null){
			foreach($this->validators as $validator){
				if(!$validator->validate($this->order)){
					$this->errors[] =$validator->getErrors();
					$this->hasErrors = true;
				}
			}
		}
	}
}