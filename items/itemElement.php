<?php
/**
 * itemElement
 * 
 * Provides abstract method signatures for itemElements
 * 
 * @author Aaron Bell
 */
abstract class itemElement{
	abstract public function validate();
	abstract public function getDescription();
	abstract public function hasErrors();
}