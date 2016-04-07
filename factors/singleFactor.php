<?php
/**
 * singleFactor
 *
 * Keeps prices the same; default factor
 * 
 * @author Aaron Bell
 *
 */
class singleFactor extends baseFactor {
	public function singleFactor(){
		$this->factor = 1;
		$this->description = "";
	}
}