<?php
/**
 * swissOliveSurchargePriceAdjustor
 * 
 * Used to adjust price based on the items containing swiss cheese and olive
 * 
 * @author Aaron Bell
 */
class swissOliveSurchargePriceAdjustor {

	public function getAdjustedPrice($pizza){
		$cheeseDescription = null;
		$currentPrice = $pizza->getPrice();
		$toppings = $pizza->getToppings();
		$cheese = $pizza->getCheese();
		if($cheese != null && method_exists($cheese, 'getItemDescription')){
			$cheeseDescription = $cheese->getItemDescription();
		}
		
		if(isset($toppings['olive']) && ($cheeseDescription == 'swiss cheese')){
			return ($currentPrice * 1.25);
		}
	}
}