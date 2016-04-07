<?php
/**
 * item
 * 
 * Provides method signatures for items
 * 
 * @author Aaron Bell
 */
abstract class item {
    protected $validators;
	protected $price;
	
	abstract public function getValidators();
	abstract public function getPrice();
	abstract public function getDescription();
}