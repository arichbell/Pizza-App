<?php
/**
 * itemElementBase
 * 
 * Provides base functionality for itemElements
 * 
 * @author Aaron Bell
 */
class itemElementBase extends itemElement{
	protected $validators = array();
	protected $price;
	protected $factor;
	protected $description;
	protected $hasErrors = false;
	protected $errors = array();

	public function itemElementBase(baseFactor $factor = null){
		$this->factor = $factor;
		
	}

	public function validate(){
		foreach($this->validators as $validator){
			if(!$validator->validate($this)){
				$this->errors[] = $validator->getErrors();
				$this->hasErrors = true;
			}
		}
	}
	public function getErrors(){
		return $this->errors;
	}

	public function hasErrors(){
		return $this->hasErrors;
	}

	public function getPrice(){
		$factor = $this->factor;
		if($factor == null){
			$factor = $this->factor = new SingleFactor();
		}
		return $this->price * $this->factor->getFactor();
	}

	public function getValidators(){
		return $this->validators;
	}

	public function getItemDescription(){
		return $this->description;
	}

	public function getDescription(){
		$description = "";
		if($this->factor){
			$description = $this->factor->getDescription()." ";
		}
		return $description.$this->description;
	}
}