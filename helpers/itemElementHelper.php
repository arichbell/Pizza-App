<?php
/**
 * Helper that creates itemElement objects for pizza items
 
 * @author Aaron Bell
 */
class itemElementHelper {
	public static function createItemElement($itemName, $itemElementCategoryName,$itemElementDetailName,$factor){
		$classVars = get_class_vars($itemElementCategoryName);
		$factorObject = factorHelper::getFactor($factor);
		$constructorBase = "itemElement".$itemName.$itemElementCategoryName;
		switch($itemElementDetailName) {
			default:
				foreach($classVars as $var){
					if ($var === $itemElementDetailName)
					{
						$class_name = $constructorBase.ucfirst($var);
						return new $class_name($factorObject);
						break;
					}
				}
		}
	}

	public static function getItemElementNames($request,$itemName,$itemElementCategoryName){
		$itemElementNames = array();
		$names = call_user_func($itemElementCategoryName."::get".$itemElementCategoryName);
		foreach($names as $name){
			$lowerCategoryName = strtolower($itemElementCategoryName);
			$classVars = get_class_vars($itemElementCategoryName);
			$requestCategorySet = isset($request[$lowerCategoryName]);
			$factorName = $requestCategorySet ? "factor".$lowerCategoryName : "factor".$name;
			if(isset($request[$name])|| ($requestCategorySet && $request[$lowerCategoryName] == $name  )){
				
				
				if(!isset($request[$factorName])){
					$request[$factorName] = 1;
				}
				if($requestCategorySet){
					$itemElementNames[$lowerCategoryName] = itemElementHelper::createItemElement($itemName,$itemElementCategoryName,$classVars[$name],$request[$factorName]);
				}else{
					$itemElementNames[$name] = itemElementHelper::createItemElement($itemName,$itemElementCategoryName,$classVars[$name],$request[$factorName]);
				}
			}
		}
		return $itemElementNames;
	}
}