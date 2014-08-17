<style>
	table, tr, th, td{
		border: 1px solid black;
	}
</style>

<?php 
	$colors = ['green','blue','black','red','yellow','orange','coral','violet','purple','royalblue','teal','aquamarine','schoolbusyellow','poisongreen','forest'];
	$carArray = [];
	if (isset($_POST['Cars'])) {
		$carArray = explode(', ', $_POST['Cars']);
	} 
	$shoppingArray = [];
	if (!is_null($carArray)) {
		foreach ($carArray as $key => $value) {
			array_push($shoppingArray, [$value, $colors[rand(0,count($colors)-1)], rand(1, 5)]);
		}
	}
?>
<form method="POST">
	<input type="text" name="Cars" id="">
	<button type="submit">Tell me what to buy.</button>
</form>
<table>

	<tr>
		<th>Car</th>
		<th>Color</th>
		<th>Count</th>
	</tr>
<?php foreach ($shoppingArray as $key => $value) { ?>
	<tr>
		<td><?php echo $value[0];?></td>
		<td><?php echo $value[1];?></td>
		<td><?php echo $value[2];?></td>
	</tr>
	<?php } ?>
</table>