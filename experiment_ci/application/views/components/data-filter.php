<div class="container-fluid">
	<pre>
		<?php //print_r($datas[0]); ?>
	</pre>


	<!-- Creating Table -->
	<table class="table table-bordered">
		<tr>
			<?php foreach ($datas[0] as $key => $col) {
				if(!in_array($key,$purpose)) {
			 ?>
			<th><?php echo $key; ?></th>
			<?php }} ?>
			<th>purpose</th>
			<th>amount</th>
		</tr>
		<?php foreach ($datas as $key => $data) {
            $payment_id = strtotime("now").rand(100000,999999);
			//Getting Purpose Data Start here
			$purposes = array();
			foreach ($data as $p => $p_value) {
				if($p_value>0 && in_array($p,$purpose)){
					$purposes[$p] = $p_value;
				}
			}
			//Getting Purpose Data End here
			foreach ($purposes as $pp => $amount) {
		?>
		<tr>
			<td><?php echo $key+1; ?></td>
			<td><?php echo $data->date; ?></td>
			<td><?php echo $data->student_id; ?></td>
			<td><?php echo $payment_id; ?></td>
			<td><?php echo $data->year; ?></td>
			<td><?php echo $data->month; ?></td>
			<td><?php echo $data->class; ?></td>
			<td><?php echo $pp ?></td>
			<td><?php echo $amount; ?></td>
		</tr>
		<?php }} ?>
	</table>
</div>

