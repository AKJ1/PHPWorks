<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Untitled</title>
		<link rel="stylesheet" href="css/default.css">
		<link rel="author" href="humans.txt">
	</head>
	<body>
		<form method="post">
			<input type="text" name="inputField" placeholder="Begin Typing..">
			<button type="submit">Submit</button>
		</form>
		<?php
			if (isset($_POST['inputField'])) {
				$inputString = $_POST['inputField'];
				$inputArray = explode(" ", $inputString);
				$workingArray;

				foreach ($inputArray as $key => $value) {
					if (isset($workingArray[$value])) {
						$workingArray[$value] += 1;
					}
					else{
						$workingArray[$value] = 1;
					}
				}
				arsort($workingArray);
				echo "<p>";
				foreach ($workingArray as $key => $value) {
					echo "<br>$value : $key " ;
				}

				$third = array_splice($workingArray, 0, 1);
				$third = array_keys($third)[0];
				echo("<br> Most frequent is $third");
				echo "</p>";
			}
		?>
		<script src="js/main.js"></script>
	</body>
</html>