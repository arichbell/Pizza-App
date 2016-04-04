<?php
/**
 * order
 * 
 * Holds on to 1 or more items, validates them and creates an order result object
 * that has the order results
 * 
 * @author Aaron Bell
 */
class order {
	private $items;
	private $price;
	private $orderValidation = array();
	private $priceAdjustors = array();
	
	public function order($items){
		$this->items = $items;
		$this->orderValidation= new orderValidation($this);
		$this->priceAdjustors[] = new swissOliveSurchargePriceAdjustor($this);
	}

	public function getOrderResult(){
		$this->orderValidation->validate();
		$orderResult = new orderResult();
		if(!$this->orderValidation->hasErrors()){
			$this->price = 0;
			foreach($this->items as $item){
				foreach($this->priceAdjustors as $priceAdjustor){
					$item->setPrice($priceAdjustor->getAdjustedPrice($item));
				}
				$this->price += $item->getPrice();
				$orderResult->setItemDescription($item->getItemizedPrice());
			}
				
			$orderResult->setPrice($this->price);
			return $orderResult;
		}
		$orderResult->setErrors($this->orderValidation->getErrors());
		return $orderResult;

	}

	public function getItems(){
		return $this->items;
	}

	public function getDescription(){
		foreach($this->items as $item){
			echo $item->getDescription()."<br/>";
		}
	}
}