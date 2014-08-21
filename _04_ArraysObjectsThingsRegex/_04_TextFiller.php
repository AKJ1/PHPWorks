<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TextFiller</title>
    </head>
    <body>
        <form  method="post">
        Your text:
        	<textarea name="text" cols="30" rows="5"></textarea>
        	<br>
    	Your bans:
        	<input type="text" name="banned">
        	<br>
        	<button type="submit">Submit</button>
        	<?php if (!empty($_POST['text'])) {
        		if (!empty($_POST['banned'])) {
        			$bannedWords = explode(", ", $_POST['banned']);
        			$finalString = $_POST['text'];
        			foreach ($bannedWords as $key => $value) {
        				$finalString = str_replace($value, str_repeat("*",strlen($value)), $finalString);
        			}
        		}
        		echo $finalString;
        	} ?>
        </form>
    </body>
</html>