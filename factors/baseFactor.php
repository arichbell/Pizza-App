<?php
/**
 * baseFactor
 * 
 * Provides the base level functionality for all factors
 * 
 * @author Aaron Bell
 *
 */
class baseFactor extends factor {
	public function getFactor(){
		return $this->factor;
	}
	public function getDescription(){
		return $this->description;
	}
}