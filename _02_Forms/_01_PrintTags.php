<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Thing</title>
        <link rel="stylesheet" href="css/default.css">
        <link rel="author" href="humans.txt">
        
    </head>
    <body>
        <form method="post">
        	<input type="text" name="FormVal" placeholder="Dont forget the commas">
        	<button type="submit">Submit</button>
        	<?php
			if (isset($_POST['FormVal'])) {
				$enteredString = $_POST['FormVal'];
				$enteredArray = explode(",", $enteredString);	
				echo "<p>";
				foreach ($enteredArray as $key => $value) {
					echo "<br> $key : $value";
				}
				echo "</p>";
			}
			?>
        </form>
    </body>
</html>


