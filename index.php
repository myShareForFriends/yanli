<table border='1' cellpadding='10'>
<?php 

for($i = 0; $i < 10; $i ++) {
	echo "<tr>";
	for($j = 1; $j <=10; $j ++){
		$k = $i + $j;
		echo "<td>$k</td>";
	}	
	echo "</tr>";
}
?>
</table>