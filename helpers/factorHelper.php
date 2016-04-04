<?php
/**
 * Helper that creates factor objects for pizza itemElements
 
 * @author Aaron Bell
 */
class factorHelper {
	public static function getFactor($factor){
		switch($factor) {
			case Factors::HALF:
				return new halfFactor();
				break;
			case Factors::SINGLE:
				return new singleFactor();
				break;
			case Factors::DOUBLE:
				return new doubleFactor();
				break;
			case Factors::TRIPLE:
				return new tripleFactor();
				break;
			break;
		}
	}
}