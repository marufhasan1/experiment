<?php 
	$items = array(
		"a" => 1000,
		"b" => 150,
		"c" => 200,
		"d" => 250,
		"e" => 350,
		"f" => 150,
		"g" => 450,
		"h" => 50,
		"i" => 70,
		"j" => 50
	);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
	<body>
		<table border="1">
			<tr>
				<th>Name</th>
				<th>Number</th>
				<th>10%</th>
			</tr>
			<?php
			$sum = 0;
			$persent_sum = 0;
			foreach ($items as $key => $value) { ?>
			<tr>
				<td><?php echo $key; ?></td>
				<td><?php $sum+=$value; echo $value; ?></td>
				<td>
					<?php
						$v = ($value*10)/100;

				 		$persent_sum+= $v;
				 		echo $v; 

				 	?>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td>Total</td>
				<td><?php echo $sum; ?></td>
				<td><?php echo $persent_sum; ?></td>
			</tr>
		</table>
	</body>
</html>