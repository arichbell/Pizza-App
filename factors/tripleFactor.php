<?php
/**
 * tripleFactor
 *
 * Triples item price.  Provides a 20% discount. Future versions
 * will allow for discounting rules to be applied to factors dynamically
 * @author Aaron Bell
 *
 */
class tripleFactor extends baseFactor {
	public function tripleFactor(){
		$this->factor = 3 * .8;
		$this->description = "triple";
	}
}