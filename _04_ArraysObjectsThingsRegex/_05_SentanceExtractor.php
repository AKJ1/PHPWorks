<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>titled</title>
    </head>
    <body>
        <form method="post">
        	Your Text:
        	<br>
        	<textarea name="text" cols="30" rows="10"></textarea>
        	<br>
        	Your Word:
        	<br>
        	<input type="text" name="find">
        	<br>
        	<button type="submit">Submit</button>
        </form>
        <section>
        	<div id="results">
        		<?php 	
	        		if (!empty($_POST['text']) && !empty($_POST['find'])) {
	        			$pucntuation = "/[\?\!\.]+/";
	        			$find = $_POST['find'];
	        			$regex = "/\W$find\W/";
	        			$sentanceArray = preg_split($pucntuation, $_POST['text'], -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
	        			$sentanceArray = array_splice($sentanceArray,0,-1);

	        			foreach ($sentanceArray as $key => $value) {
	        				if (preg_match($regex, $value) >= 1 ) {
	        					echo "$value", "<br>"	;
	        				}
	        			}
	        		}
        		 ?>
        	</div>
        </section>
    </body>
</html>