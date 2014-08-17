<style>
	table,tr,td,th{
		border: 1px solid black;
		padding: 5px;
	}
</style>

<?php 
	$years = 0;
	$nowdate = getdate();
	if (isset($_POST['years'])) {
		$years = $_POST['years'];
	}
	$currentyear = $nowdate['year'];
 ?>
 <form method="post">
 	<input type="text" name="years">
 	<button type="submit">Submit</button>
 </form>

 <table>
 	<tr>
 		<th>Year</th>
 		<th>Jan</th>
 		<th>Feb</th>
 		<th>Mar</th>
 		<th>Apr</th>
 		<th>May</th>
 		<th>Jun</th>
 		<th>Jul</th>
 		<th>Aug</th>
 		<th>Sep</th>
 		<th>Oct</th>
 		<th>Nov</th>
 		<th>Dec</th>
 		<th>Total</th>
 	</tr>
 	<?php 
 	if (isset($_POST['years'])) {
 		for ($i=$currentyear; $i >= $currentyear-$years; $i--) { 
	 		$currentSum = 0;
 	?>	
	
	<tr>
		<td><?php echo $i ?></td>
		<td><?php $currentRand = rand(0, 999);
		$currentSum += $currentRand;
		echo $currentRand; ?></td>
		<td><?php $currentRand = rand(0, 999);
		$currentSum += $currentRand;
		echo $currentRand; ?></td>
		<td><?php $currentRand = rand(0, 999);
		$currentSum += $currentRand;
		echo $currentRand; ?></td>
		<td><?php $currentRand = rand(0, 999);
		$currentSum += $currentRand;
		echo $currentRand; ?></td>
		<td><?php $currentRand = rand(0, 999);
		$currentSum += $currentRand;
		echo $currentRand; ?></td>
		<td><?php $currentRand = rand(0, 999);
		$currentSum += $currentRand;
		echo $currentRand; ?></td>
		<td><?php $currentRand = rand(0, 999);
		$currentSum += $currentRand;
		echo $currentRand; ?></td>
		<td><?php $currentRand = rand(0, 999);
		$currentSum += $currentRand;
		echo $currentRand; ?></td>
		<td><?php $currentRand = rand(0, 999);
		$currentSum += $currentRand;
		echo $currentRand; ?></td>
		<td><?php $currentRand = rand(0, 999);
		$currentSum += $currentRand;
		echo $currentRand; ?></td>
		<td><?php $currentRand = rand(0, 999);
		$currentSum += $currentRand;
		echo $currentRand; ?></td>
		<td><?php $currentRand = rand(0, 999);
		$currentSum += $currentRand;
		echo $currentRand; ?></td>
		<td><?php echo $currentSum;?></td>
	</tr>

 	<?php } }?>
 	 </table>

