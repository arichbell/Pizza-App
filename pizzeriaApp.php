<?php
/**
 * Pizzeria App 
 * Aaron Bell
 * April 3, 2016
 * 
 * This is the main entry point into the application.
 * 
 * Right now, it only excepts a direct POST from the view (form) and echo's the
 * content directly out to the view. I hope to updated that to accept a POST and
 * returning a JSON reponse; decoupling the user interface from the application.
 * 
 * On first load of the page, by default 5 example order outcomes are displayed
 * to demonstrate the possible output from the system.
 * 
 * The application's menu is comprised of items and itemElements.  
 * 
 * Each item contains n itemElements.
 * 
 * itemElements can take in factors, which adjust the price; but can be extend to adjust
 * other itemElement properties.
 * 
 * items are passed to an order item, which validates the items and provides an orderResult
 * item that give a description containing a price or order errors
 * 
 * The app allows for order, item and itemElement level validation.
 * 
 * The price of the order can be adjusted with price adjustors.
 * 
 * If the order fails validation at any level, it throws an invalidPriceException error
 * 
 * Test only provide coverage for the itemElements price and description for now
 * 
 */

include('config.php');
if($_POST){
	// addPizzFormHandler takes in the request and prints out a response
	// **************************
	// Future addition: add a cmd parameter to all controllers and url requests to allow
	// a dispatcher to pass the cmd to each handler to find the appropriate
	// controller method to execute and respond to the user request
	$form = new addPizzaFormHandler($_POST);
} else {
	// Outcome 1
	$pizza1 = new itemPizza(array(
		"base" => null,
		"sauce" => new itemElementPizzaSauceTomato(),
		"toppings" => array(new itemElementPizzaToppingsMeatball()),
		"cheese" => new itemElementPizzaCheeseAmerican()
			)
	);
	
	// Outcome 2
	$pizza2 = new itemPizza(array(
		"base" => new itemElementPizzaBaseThin(),
		"sauce" => new itemElementPizzaSauceTomato(new doubleFactor()),
		"toppings" => array(new itemElementPizzaToppingsMushroom(), new itemElementPizzaToppingsPeppers()),
		"cheese" => new itemElementPizzaCheeseMozzerella(new tripleFactor())
			)
	);
	
	// Outcome 3
	$pizza3 = new itemPizza(array(
		"base" => new itemElementPizzaBaseThick(),
		"sauce" => new itemElementPizzaSauceTomatoBasil(),
		"toppings" => array(new itemElementPizzaToppingsOlive(new halfFactor()), new itemElementPizzaToppingsPeppers(new halfFactor())),
		"cheese" => new itemElementPizzaCheeseSwiss()
			)
	);
	
	// Outcome 4
	$pizza4 = new itemPizza(array(
		"base" => new itemElementPizzaBaseThin(),
		"sauce" => new itemElementPizzaSauceTomato(),
		"toppings" => array(new itemElementPizzaToppingsOlive(new halfFactor()), new itemElementPizzaToppingsPeppers(new halfFactor())),
		"cheese" => new itemElementPizzaCheeseAmerican()
			)
	);
	
	// Outcome 5
	$pizza5 = new itemPizza(array(
		"base" => new itemElementPizzaBaseThick(),
		"sauce" => new itemElementPizzaSauceTomatoGarlic(),
		"toppings" => array(new itemElementPizzaToppingsOlive(new doubleFactor())),
		"cheese" => new itemElementPizzaCheeseMozzerella(new tripleFactor())
			)
	);
	
	// Outcome 1
	$order = new order(array($pizza1));
	$orderResult = $order->getOrderResult();
	try{
		$result = $orderResult->getResult();
		echo '<div class="alert alert-success" role="alert">Outcome 1 - <br/>-----<br/>'.$result.'</div>';
	}
	catch(InvalidPriceException $e) {
		echo '<div class="alert alert-danger" role="alert">Outcome 1 - InvalidPriceException: ' .$e->getMessage().'<br/>-----<br/>'.$pizza1->getDescription().'</div>';
	}
	
	// Outcome 2
	$order = new order(array($pizza2));
	$orderResult = $order->getOrderResult();
	try{
		$result = $orderResult->getResult();
		echo '<div class="alert alert-success" role="alert">Outcome 2 - <br/>-----<br/>'.$result.'</div>';
	}
	catch(InvalidPriceException $e) {
		echo '<div class="alert alert-danger" role="alert">Outcome 2 - InvalidPriceException: ' .$e->getMessage().'</div>';
	}
	
	// Outcome 3
	$order = new order(array($pizza3));
		$orderResult = $order->getOrderResult();
	try{
		$result = $orderResult->getResult();
		echo '<div class="alert alert-success" role="alert">Outcome 3 - <br/>-----<br/>'.$result.'</div>';
	}
	catch(InvalidPriceException $e) {
		echo '<div class="alert alert-danger" role="alert">Outcome 3 - InvalidPriceException: ' .$e->getMessage().'</div>';
	}
	
	// Outcome 4
	$order = new order(array($pizza4));
	$orderResult = $order->getOrderResult();
	try{
		$result = $orderResult->getResult();
		echo '<div class="alert alert-success" role="alert">Outcome 4 - <br/>-----<br/>'.$result.'</div>';
	}
	catch(InvalidPriceException $e) {
		echo '<div class="alert alert-danger" role="alert">Outcome 4 - InvalidPriceException: ' .$e->getMessage().'</div>';
	}
	
	// Outcome 
	$order = new order(array($pizza5));
	$orderResult = $order->getOrderResult();
	try{
		$result = $orderResult->getResult();
		echo '<div class="alert alert-success" role="alert">Outcome 5 - '.$result.'</div>';
	}
	catch(InvalidPriceException $e) {
		echo '<div class="alert alert-danger" role="alert">Outcome 5 - InvalidPriceException: ' .$e->getMessage().'<br/>-----<br/>'.$pizza5->getDescription().'</div>';
	}
}
?>
