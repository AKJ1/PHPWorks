<style>
	table,tr,th,td{
		border: 1px solid black;
	}
</style>
<form method="post">
	<input type="text" name="str">
	<button>Submit</button>
</form>

<table>
<?php
if (isset($_POST['str'])) {
    $str = explode(", ", $_POST['str']);
    foreach ($str as $key => $value) {
    	$currentResult;
        if (!is_int(intval($value))) {
            $currentResult = "i cant sum that";
        } else {
            $totalval = 0;
            for ($i = 0; $i < strlen($value); $i++) {
                $intval = intval(substr($value, $i, 1));
                $totalval+= $intval;
            }       
            $currentResult = $totalval;
        }?>
	<tr>
		<td><?php echo $value ?></td>
		<td><?php echo $currentResult?></td>
	</tr>  
<?php
    }
}
?>

</table>