<?php
/**
 * itemElementPizzaBaseThickValidator
 *
 * Validator class used to validate itemElements.  While this class is really a stub right now, it 
 * provides the scaffolding for builing on itemElement level validation
 * 
 * @author Aaron Bell
 */
class itemElementPizzaBaseThickValidator {

	public function validate($item){
		return true;
	}

	public function getErrors(){
		return "Thick Crust base doesn't pass validation";
	}
}