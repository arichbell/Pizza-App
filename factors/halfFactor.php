<?php
/**
 * halfFactor
 *
 * halfs itemElement price.  
 * 
 * @author Aaron Bell
 *
 */
class halfFactor extends baseFactor {
	
	public function halfFactor(){
		$this->factor = .5;
		$this->description = "half";
	}
}