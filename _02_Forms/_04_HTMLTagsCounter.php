<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/default.css">
    </head>
    <body>
    <section>
        <form method="post">
        	<label for="inpfield">Enter your html tags:</label>
        	<input type="text" name="inputField" id="inpfield">
        	<button type="submit">Submit</button>
        	<style>
        	label{
        		display: block;
        		width: 40%;
        		text-align: center;
        		font-size: 22px;
        		margin-left: auto;
        		margin-right: auto;
        	}
        	</style>
        </form>
    </section>
    <?php 
    session_start();
    $htmlTags = ["html","body","section","a","b","span","footer","header","form","input","head","em","strong","img","table","tr","td","th","thead","tbody","tfoot","article","h1","h2","h3","h4","h5","h6","label"];
    $scoreForNow = 0;
    if (isset($_SESSION['score'])) {
    	if (isset($_POST['inputField'])) {
    		$enteredArray =  explode(" ", $_POST['inputField']);
    		$validator = false;
    		$scoreForNow = 0;
    		foreach ($htmlTags as $k => $v) {
    			foreach ($enteredArray as $key => $value) {
    				if ($v == $value) {
    					$scoreForNow++;
    					$validator = true;
    				}
    			}
    		}
    		echo "<p>";
    		if ($validator) {
    			echo "You've entered atleast 1 valid tag!";
    		}else{
    			echo "There are no valid HTML tags.";
    		}
    		echo "</p>";
    	}
	$_SESSION['score'] += $scoreForNow;
	$finalResult = $_SESSION['score'];
	echo ("<p>Score: $finalResult</p>");
    }
    else{
    	$_SESSION['score'] = 0;
    }
    ?>    
    </body>
</html>