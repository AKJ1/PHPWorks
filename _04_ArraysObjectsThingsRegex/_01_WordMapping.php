<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WordMapping</title>
        <style>
        table,tr,td{
        	border:1px solid black;
        	font-family: "SegoeUI", sans-serif;
        }
        </style>
    </head>
    <body>
        <form method="post">
        	<textarea name="wordcounter" id="" cols="30" rows="3"></textarea>
        	<button type="submit">Count Words</button>
    	</form>
    	<table>
    		<?php if (!empty($_POST['wordcounter'])) {
    			$regex = "/[^A-Za-z ]/";
    			$enteredString = $_POST['wordcounter'];
    			$enteredString = strtolower($enteredString);
    			$enteredString = explode(" " ,$enteredString);
				$enteredString = preg_replace($regex, "", $enteredString);

				$enteredArray = [];
				foreach ($enteredString as $key => $value) {
					if (isset($enteredArray[$value])) {
						$enteredArray[$value] += 1;
					}else{
						$enteredArray[$value] = 1;
					}
				}
				foreach ($enteredArray as $key => $value) {
					?>
					<tr>
						<td><?php echo $key; ?> </td>
						<td><?php echo $value; ?> </td>
					</tr>
		<?php  }
    		} ?>
    	</table>
    </body>
</html>