<?php
include("../config.php");
class itemElementPriceTests extends PHPUnit_Framework_TestCase {

	// base
	public function testPriceItemElementPizzaBaseThick(){
		$itemElement = new itemElementPizzaBaseThick();
		$this->assertEquals(1.5,$itemElement->getPrice());
	}
	public function testPriceItemElementPizzaBaseThin(){
		$itemElement = new itemElementPizzaBaseThin();
		$this->assertEquals(1,$itemElement->getPrice());
	}

	// cheese
	public function testPriceItemElementPizzaCheeseSwiss(){
		$itemElement = new itemElementPizzaCheeseSwiss();
		$this->assertEquals(4,$itemElement->getPrice());
	}
	public function testPriceItemElementPizzaCheeseAmerican(){
		$itemElement = new itemElementPizzaCheeseAmerican();
		$this->assertEquals(3,$itemElement->getPrice());
	}
	public function testPriceItemElementPizzaCheeseMozzerella(){
		$itemElement = new itemElementPizzaCheeseMozzerella();
		$this->assertEquals(2,$itemElement->getPrice());
	}

	// sauce
	public function testPriceItemElementPizzaSauceTomato(){
		$itemElement = new itemElementPizzaSauceTomato();
		$this->assertEquals(.25,$itemElement->getPrice());
	}
	public function testPriceItemElementPizzaSauceTomatoGarlic(){
		$itemElement = new itemElementPizzaSauceTomatoGarlic();
		$this->assertEquals(.75,$itemElement->getPrice());
	}
	public function testPriceItemElementPizzaSauceTomatoBasil(){
		$itemElement = new itemElementPizzaSauceTomatoBasil();
		$this->assertEquals(.5,$itemElement->getPrice());
	}

	// toppings
	public function testPriceItemElementPizzaToppingsMeatball(){
		$itemElement = new itemElementPizzaToppingsMeatball();
		$this->assertEquals(.8,$itemElement->getPrice());
	}
	public function testPriceItemElementPizzaToppingsMushroom(){
		$itemElement = new itemElementPizzaToppingsMushroom();
		$this->assertEquals(.6,$itemElement->getPrice());
	}
	public function testPriceItemElementPizzaToppingsOlive(){
		$itemElement = new itemElementPizzaToppingsOlive();
		$this->assertEquals(.4,$itemElement->getPrice());
	}
	public function testPriceItemElementPizzaSauceToppingsPeppers(){
		$itemElement = new itemElementPizzaToppingsPeppers();
		$this->assertEquals(.2,$itemElement->getPrice());
	}
}

class itemElementDescriptionTests extends PHPUnit_Framework_TestCase {

	// base
	public function testDescriptionItemElementPizzaBaseThick(){
		$itemElement = new itemElementPizzaBaseThick();
		$this->assertEquals("Thick Crust",$itemElement->getDescription());
	}
	public function testDescriptionItemElementPizzaBaseThin(){
		$itemElement = new itemElementPizzaBaseThin();
		$this->assertEquals("Thin Crust",$itemElement->getDescription());
	}

	// cheese
	public function testDescriptionItemElementPizzaCheeseSwiss(){
		$itemElement = new itemElementPizzaCheeseSwiss();
		$this->assertEquals("swiss cheese",$itemElement->getDescription());
	}
	public function testDescriptionItemElementPizzaCheeseAmerican(){
		$itemElement = new itemElementPizzaCheeseAmerican();
		$this->assertEquals("american cheese",$itemElement->getDescription());
	}
	public function testDescriptionItemElementPizzaCheeseMozzerella(){
		$itemElement = new itemElementPizzaCheeseMozzerella();
		$this->assertEquals("mozzerella cheese",$itemElement->getDescription());
	}

	// sauce
	public function testDescriptionItemElementPizzaSauceTomato(){
		$itemElement = new itemElementPizzaSauceTomato();
		$this->assertEquals("tomato",$itemElement->getDescription());
	}
	public function testDescriptionItemElementPizzaSauceTomatoGarlic(){
		$itemElement = new itemElementPizzaSauceTomatoGarlic();
		$this->assertEquals("tomato-garlic sauce",$itemElement->getDescription());
	}
	public function testDescriptionItemElementPizzaSauceTomatoBasil(){
		$itemElement = new itemElementPizzaSauceTomatoBasil();
		$this->assertEquals("tomato-basil sauce",$itemElement->getDescription());
	}

	// toppings
	public function testDescriptionItemElementPizzaToppingsMeatball(){
		$itemElement = new itemElementPizzaToppingsMeatball();
		$this->assertEquals("meatball",$itemElement->getDescription());
	}
	public function testDescriptionItemElementPizzaToppingsMushroom(){
		$itemElement = new itemElementPizzaToppingsMushroom();
		$this->assertEquals("mushroom",$itemElement->getDescription());
	}
	public function testDescriptionItemElementPizzaToppingsOlive(){
		$itemElement = new itemElementPizzaToppingsOlive();
		$this->assertEquals("olive",$itemElement->getDescription());
	}
	public function testDescriptionItemElementPizzaSauceToppingsPeppers(){
		$itemElement = new itemElementPizzaToppingsPeppers();
		$this->assertEquals("peppers",$itemElement->getDescription());
	}
}