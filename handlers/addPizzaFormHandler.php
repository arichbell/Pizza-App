<?php
/**
 * addPizzaFormHandler
 * 
 * Controller that handles requests from pizza form
 * 
 * @author Aaron Bell
 */
class addPizzaFormHandler {
	private $_toppings = array();
	private $_sauce;
	private $_cheese;
	private $_base;

	public function addPizzaFormHandler($request){
		$this->_base = array_values(itemElementHelper::getItemElementNames($request,"Pizza","Base"));
		$this->_toppings = itemElementHelper::getItemElementNames($request,"Pizza","Toppings");
		$this->_cheese = array_values(itemElementHelper::getItemElementNames($request,"Pizza","Cheese"));
		$this->_sauce = array_values(itemElementHelper::getItemElementNames($request,"Pizza","Sauce"));
		$this->validate();
	}
	
	public function validate(){
		$pizza = new itemPizza(array(
			"base" => isset($this->_base[0])?$this->_base[0] :null,
			"sauce" => isset($this->_sauce[0])?$this->_sauce[0]:null,
			"toppings" => $this->_toppings,
			"cheese" => isset($this->_cheese[0])?$this->_cheese[0]:null
			)
		);
		$order = new order(array($pizza));
		$orderResult = $order->getOrderResult();
		try{
			$result = $orderResult->getResult();
			echo '<div class="alert alert-success" role="alert">Success<br/>-----<br/>'.$result.'</div>';
		}
		catch(InvalidPriceException $e) {
			echo '<div class="alert alert-danger" role="alert">InvalidPriceException: <br/>' .substr($e->getMessage(),0,strlen($e->getMessage())-1).'<br/>-----<br/>'.$pizza->getDescription().'</div>';
		}
	}
}