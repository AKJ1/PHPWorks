<style>
	table, tr, td, th{
		border: 1px solid black;
	}
</style>
<table>
<?php
$sum = 0;
for ($i=0; $i <= 100; $i+=2) { 
	?>
<tr>
	<td>
	<?php echo $i;?>
	</td>
	<td>
	<?php
	$sqrti = round(sqrt($i),2);
	$sum += $sqrti;
	echo $sqrti?>
	</td>
</tr>	
<?php	
}
?>
<tr>
	<th>Total:</th>
	<td><?php echo round($sum,2)?></td>
</tr>
</table>