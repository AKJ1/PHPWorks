<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>URL Replacer</title>
    </head>
    <body>
    	<form action="" method="post">
    		<textarea name="text" id="" cols="30" rows="10"></textarea>
    		<br>
    		<button type="submit"></button>
    		<br>
    	</form>
        <section>
        	<div id="results">
        		<?php if (!empty($_POST['text'])) {
        			$text = $_POST['text'];
        			$regex_first = "/<a href=+[\"'].*?['\"]>/";
        			$regex_second = "/</a>/";
        			$text = preg_replace($regex_first, "[URL=\"\"", $text);
        		} ?>
        	</div>
        </section>
    </body>
</html>