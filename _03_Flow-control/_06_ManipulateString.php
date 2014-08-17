<form method="post">
	<input type="text" name="strinput">
	Check Palindrome<input type="radio" name="method" value="1">
	Reverse String<input type="radio" name="method" value="2">
	Split<input type="radio" name="method" value="3">
	Hash String<input type="radio" name="method" value="4">
	Shuffle String<input type="radio" name="method" value="5">
	<button type="submit"></button>
</form>

<?php 
	if (isset($_POST['strinput'])) {
		$str = $_POST['strinput'];
		switch (intval($_POST['method'])) {
			case 1:
				$result = true;
				for ($i=0; $i < strlen($str); $i++) { 
					if (!(substr($str, $i) == substr($str, -$i)){
						$result = false;
					}
				}
				break;
			case 2:
				$result = explode("",$str);
				$result = array_reverse($result);
				$result = implode(" ", $result);
				break;
			case 3:
				$result = split("", $str);
				break;
			case 4:
				$result = crypt($str);
				break;
			case 5:
				$result = shuffle($str);
				break;
			default:
				# code...
				echo "I don't even..";
				break;
		}
		echo $result;
	}
 ?>