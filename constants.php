<?php
/**
 * Contains constants used in the pizzeriaApp that work much like Java enums
 * 
 * @author Aaron Bell
 *
 */
class Cheese
{
	const SWISS = "swiss";
	const MOZZERELLA = "mozzerella";
	const AMERICAN = "american";

	public static $swiss = Cheese::SWISS;
	public static $mozzerella = Cheese::MOZZERELLA;
	public static $american = Cheese::AMERICAN;


	public static function getCheese(){
		return get_class_vars("Cheese");
	}
}

class Factors
{
	const HALF = 1;
	const SINGLE = 2;
	const DOUBLE = 3;
	const TRIPLE = 4;
}
class Base
{
	const THICK = "thick";
	const THIN = "thin";

	public static $thick = Base::THICK;
	public static $thin = Base::THIN;


	public static function getBase(){
		return get_class_vars("Base");
	}
}

class Sauce
{
	const TOMATO = "tomato";
	const TOMATOBASIL = "tomatoBasil";
	const TOMATOGARLIC = "tomatoGarlic";

	public static $tomato = Sauce::TOMATO;
	public static $tomatoBasil = Sauce::TOMATOBASIL;
	public static $tomatoGarlic = Sauce::TOMATOGARLIC;


	public static function getSauce(){
		return get_class_vars("Sauce");
	}
}

class Toppings
{
	const OLIVE = "olive";
	const PEPPERS = "peppers";
	const MUSHROOM = "mushroom";
	const MEATBALL = "meatball";

	public static $olive = Toppings::OLIVE;
	public static $peppers = Toppings::PEPPERS;
	public static $mushroom = Toppings::MUSHROOM;
	public static $meatball = Toppings::MEATBALL;


	public static function getToppings(){
		return get_class_vars("Toppings");
	}
}