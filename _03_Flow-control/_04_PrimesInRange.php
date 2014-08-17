<form method="post">
	<input type="text" name="start" id="">
	<input type="text" name="end" id="">
	<button type="submit">Submit</button>
</form>
<?php 
	if (isset($_POST['start']) && isset($_POST['end'])) {
		$start = $_POST['start'];
		$end = $_POST['end'];
		if ($end > $start) {
			for ($i=$start; $i <= $end; $i++) { 
				if (CheckPrime($i)) {
					echo "<strong>$i</strong> &nbsp";
				}else{
					echo "$i &nbsp";
				}
			}
		}
	}

	function CheckPrime($value)
	{	
		$result = true;
		for ($i=$value-1 ; $i > 1 ; $i--) { 
			if ($value % $i == 0) {
				$result = false;
			}
		}
		return $result;
	}
 ?>