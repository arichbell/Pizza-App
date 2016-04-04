<?php
/**
 * itemPizza
 * 
 * Provides base functionality for a pizza item
 * 
 * @author Aaron
 */
class itemPizza extends itemBase {
	private $sauce;
	private $base;
	private $cheese;
	private $toppings = array();
	private $isPizzaSet = false;

	public function itemPizza($itemElements){
		$this->itemElements = $itemElements;
		$this->validators[] = new itemPizzaValidator();
		$this->base = $itemElements['base'];
		$this->cheese = $itemElements['cheese'];
		$this->sauce = $itemElements['sauce'];
		
		foreach($itemElements['toppings'] as $itemElement){
			$this->itemElements[] = $itemElement;
			$this->toppings[$itemElement->getItemDescription()] = $itemElement;
		}
        
		foreach($this->itemElements as $k => $v){
			if($v == $itemElements['toppings']){
				unset($this->itemElements[$k]);
			}
		}
		
		$this->isPizzaSet = true;
	}

	public function isPizzaSet(){
		return $this->isPizzaSet;
	}

	public function getBase(){
		return $this->base;
	}

	public function getSauce(){
		return $this->sauce;
	}

	public function getToppings(){
		return $this->toppings;
	}

	public function getCheese(){
		return $this->cheese;
	}

	public function getDescription(){
		$description = "";
		if(isset($this->base) && $this->base->getDescription()){
			$description .=	$this->base->getDescription();
		}
		if($this->sauce != null){
			
			if($description != ''&& $this->cheese == null && $this->toppings == null){
				$description .= " with ";
			}else if($description != '') {
				$description .= ",";
			}
			$description .= $this->sauce->getDescription();
		}
		if($this->toppings != null){
			foreach($this->toppings as $toppings){
			if($toppings != null && $description != ''){
				$description .= ",";
			}
			if($description != '' && $this->cheese == null){
				$description .= " with ";
			}
				$description .= $toppings->getDescription();
			}
		}
		if($this->cheese != null){
			if($description != ""){
				$description .= " with ";
			}
			$description .= $this->cheese->getDescription();
		}
		return $description;
	}
}