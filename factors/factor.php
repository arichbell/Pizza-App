<?php
/**
 * factor
 * 
 * Abstract class providing method signatures to all factors
 * 
 * @author Aaron Bell
 *
 */
abstract class factor {
	protected $factor;
	protected $description;
	abstract public function getFactor();
	abstract public function getDescription();
}