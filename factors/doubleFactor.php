<?php
/**
 * doubleFactor
 *
 * Doubles itemElement price.  Provides a 20% discount. Future versions
 * will allow for discounting rules to be applied to factors dynamically
 * 
 * @author Aaron Bell
 *
 */
class doubleFactor extends baseFactor {
	public function doubleFactor(){
		$this->factor = 2 * .8;
		$this->description = "double";
	}
}