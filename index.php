<html>
	<head>
		<link rel="stylesheet" href="src/css/bootstrap.min.css">
		<link rel="stylesheet" href="src/css/pizza.css">
	</head>
	<body>
	<div id="wrapper">
		<div class="info">
		<?php include('pizzeriaApp.php'); ?>
		</div>
			<div class="form-holder">
				<h1>Pizza App</h1>
				<form action="index.php" method="POST">
				<input type="hidden" name="cmd" value="addItem" />
				<input type="hidden" name="1" value="itemType" />
				<div class="form-group">
					<label for="base">Base</label> 
					<select class="form-control" id="base" name="base">
						<option value="">Select Base</option>
						<option value="thin">Thin</option>
						<option value="thick">Thick</option>
					</select>
				</div>
				<div class="form-group">
					<label for="sauce">Sauce</label> 
					<select class="form-control" id="sauce" name="sauce">
						<option value="">Select Sauce</option>
						<option value="tomato">Tomato</option>
						<option value="tomatoBasil">Tomato-Basil</option>
						<option value="tomatoGarlic">Tomato-Garlic</option>
					</select> 
					<div>
					
					</div>
					<label class="radio-inline"><input type="radio" name="factorsauce" value="1">Half</label> 
					<label class="radio-inline"><input type="radio" name="factorsauce" value="2" checked>Single</label>
					<label class="radio-inline"><input type="radio" name="factorsauce" value="3">Double</label>
					<label class="radio-inline"><input type="radio" name="factorsauce" value="4">Triple</label>
				<div>
				<div class="form-group">
				<label for="cheese">Cheese</label> 
				<select class="form-control" id="cheese" name="cheese">
					<option value="">Select Cheese</option>
					<option value="swiss">Swiss</option>
					<option value="american">American</option>
					<option value="mozzerella">Mozzerella</option>
				</select> 
				<label class="radio-inline"><input type="radio" name="factorcheese" value="1">Half</label> 
				<label class="radio-inline"><input type="radio" name="factorcheese" value="2" checked>Single</label> 
				<label class="radio-inline"><input type="radio" name="factorcheese" value="3">Double</label>
				<label class="radio-inline"><input type="radio" name="factorcheese" value="4">Triple</label>
				</div>
				<div class="form-group">
					<label>Toppings</label>
					<div class="checkbox">
					  <label><input type="checkbox" name="olive" id="olive" value="1">Olive</label>
					  <div>
						  <label class="radio-inline"><input type="radio" name="factorolive" value="1">Half</label>
						  <label class="radio-inline"><input type="radio" name="factorolive" value="2" checked>Single</label>
						  <label class="radio-inline"><input type="radio" name="factorolive" value="3">Double</label>
						  <label class="radio-inline"><input type="radio" name="factorolive" value="4">Triple</label>
					  </div>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" name="peppers" id="peppers" value="1">Peppers</label>
					  <div>
						  <label class="radio-inline"><input type="radio" name="factorpeppers" value="1">Half</label>
						  <label class="radio-inline"><input type="radio" name="factorpeppers" value="2" checked>Single</label>
						  <label class="radio-inline"><input type="radio" name="factorpeppers" value="3">Double</label>
						  <label class="radio-inline"><input type="radio" name="factorpeppers" value="4">Triple</label>
					  </div>
					</div>
					<div class="checkbox">
					 <label><input type="checkbox" name="mushroom" id="mushroom" value="1">Mushroom</label>
					  <div>
						  <label class="radio-inline"><input type="radio" name="factormushroom" value="1">Half</label>
						  <label class="radio-inline"><input type="radio" name="factormushroom" value="2" checked>Single</label>
						  <label class="radio-inline"><input type="radio" name="factormushroom" value="3">Double</label>
						  <label class="radio-inline"><input type="radio" name="factormushroom" value="4">Triple</label>
					  </div>
					</div>
					<div class="checkbox">
					  <label><input type="checkbox" name="meatball" id="meatball" value="1">Meatball</label>
					  <div>
						  <label class="radio-inline"><input type="radio" name="factormeatball" value="1">Half</label>
						  <label class="radio-inline"><input type="radio" name="factormeatball" value="2" checked>Single</label>
						  <label class="radio-inline"><input type="radio" name="factormeatball" value="3">Double</label>
						  <label class="radio-inline"><input type="radio" name="factormeatball" value="4">Triple</label>
					  </div>
					</div>
				</div>
				<input type="submit" class="btn btn-info" value="Get Pizza Price">
				</form>
			</div>
		</div>
	</body>
</html>
