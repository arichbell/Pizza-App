<?php
/**
 * Helper that creates topping objects for pizza items
 
 * @author Aaron Bell
 */
class toppingsHelper {
	private $_toppings = array();
	public static function getTopping($topping,$factor){
		$toppingsClassVars = get_class_vars("Toppings");
		$factorObject = factorHelper::getFactor($factor);
		$toppingsConstructorBase = "itemElementPizzaTopping";
		switch($topping) {
			default:
				foreach($toppingsClassVars as $var){
					if ($var === $topping)
					{
						$class_name = $toppingsConstructorBase.ucfirst($var);
						return new $class_name($factorObject);
						break;
					}
				}
		}
	}

	public static function setToppings($request){
		$toppings = array();
		$names = Toppings::getToppings();
		foreach($names as $name){
			$factorName = "factor".$name;
			$toppingConstant = strtoupper($name);
			$toppingsClassVars = get_class_vars("Toppings");
			if(isset($request[$name])){
				if(!isset($request[$factorName])){
					$request[$factorName] = 1;
				}
				$toppings[$name] = toppingsHelper::getTopping($toppingsClassVars[$name],$request[$factorName]);
			}
		}
		return $toppings;
	}
}