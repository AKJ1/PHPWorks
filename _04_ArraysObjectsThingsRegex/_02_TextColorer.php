<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>_02_Colors</title>
    </head>
    <body>
        <form method="post">
        	<textarea name="input" cols="30" rows="3"></textarea>
        	<br>
        	<button type="submit">Submit</button>
        </form>
        <section id="results">
        	<?php 
        		if (!empty($_POST['input'])) {
        			$enteredString = $_POST['input'];
        			$enteredString = str_split($enteredString);

        			foreach ($enteredString as $key => $value) {
        				if ((ord($value) % 2) == 0) {
        					?>
        					<span style="color:red"><?php echo $value; ?> &nbsp<span>
        				<?php } else{ ?>
    						<span style="color:blue"><?php echo $value; ?> &nbsp<span>
    						<?php
        				}
        			}
        		}
        	 ?>
        	 </section>
    </body>
</html>