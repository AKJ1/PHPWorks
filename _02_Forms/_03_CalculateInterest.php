<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Untitled</title>
		<link rel="stylesheet" href="css/default.css">
		<link rel="author" href="humans.txt">
		<style>
			input:radio{
				display: inline;
			}
			select{
				font-size: 28px;
				padding: 10px;
				display: block;
				width: 30%;
				margin-left: auto;
				margin-right: auto;
			}
			#currencyRadio *{
				display: block;
				margin-left: auto;
				margin-right: auto;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<section>
			<form method="post">
				<input type="text" name="amount" placeholder="Starting money">
				<input type="text" name="interest" placeholder="Your Interest Rate">
				<span id="currencyRadio">
					<label for="USD">USD</label>
					<input type="radio" name="currency" value="USD" id="USD">
					<label for="EUR">EUR</label>
					<input type="radio" name="currency" value="EUR"id="EUR">
					<label for="BGN">BGN</label>
					<input type="radio" name="currency" value="BGN" id="BGN">
				</span>
				<select name="length">
					<option value="6">6 Months</option>
					<option value="12">1 Year</option>
					<option value="24">2 Years</option>
					<option value="60">5 Years</option>
				</select>
				<button type="submit">Submit</button>
			</form>
		</section>
		<?php
			$types = ["currency", "interest", "amount", "length"];
			foreach ($types as $key => $value) {
				if (isset($_POST["$value"])) {
				} 
				else {
					echo "<p>Missing Input</p>";
					exit();	
				}
			}
			$currency = $_POST["$types[0]"];
			$interest = $_POST["$types[1]"];
			$amount = $_POST["$types[2]"];
			$length = $_POST["$types[3]"];
			$monthlyInterest = ($interest / 100) / 12 ;

			for ($i = 0; $i < $length; $i++) { 
				$amount = $amount*(1+$monthlyInterest);
			}

			$formattedResult = number_format($amount, 2);
			echo "<p>Your total is : $formattedResult $currency</p>";
		?>
		<script src="js/main.js"></script>
	</body>
</html>