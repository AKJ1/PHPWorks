<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Thing</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
        <style>
        body{
        	font-family: Verdana;
        	background-color: #FCCC00;
        }

        input{
        	width: 50%;
        	margin-left: auto;
        	margin-right: auto;
        	font-size: 28px;
        	padding: 10px;
        	border: 1px solid black;
        	border-radius: 5px;
        	box-sizing: border-box;
        	display: block;
        }
        button{
        	width: 25%;
        	margin-top: 50px;
        	margin-left: auto;
        	margin-right: auto;
        	font-size: 32px;
        	border-radius: 5px;
        	padding: 5px;
        	background: white;
        	border: 1px solid black;
        	display: block;
        	back
        }
        button:hover{
        	background-color: #000;
        	color: white;
        }
        p{
        	display: block;
        	width: 30%;
        	font-size: 26px;
        	margin-left: auto;
        	margin-right: auto;
        	text-align: center;
        }
        </style>
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


