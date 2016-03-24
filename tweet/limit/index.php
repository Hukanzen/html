<html>
<head>
	<title>limit checker</title>
	<?php
		require dirname(__FILE__).'/../TwistOAuth.phar'   ;
		require dirname(__FILE__).'/../main/user.php'     ;
		require dirname(__FILE__).'/../main/try_catch.php';

		$connection	= new TwistOAuth($cK,$cS,$aT,$aTS);
		
		$data=$connection->get("application/rate_limit_status");

		/*users and...*/
		foreach($data->resources as $ldata){
	?>
</head>
<body>
	<table>
		<tr>
			<th>Category</th><th>limit</th><th>remaining</th><th>reset</th>
		</tr>
	<?php
			/*users->/users/profile_banner" and...*/
			foreach($ldata as $value){
			//	$value=get_class_vars($cval);
		//		print_r($value);
				$cval=get_class_vars($value);
				echo $cval;
	?>
		<tr>
			<td><?php echo $value->$cval[0];?></td>
			<td><?php echo $value->limit;?></td>
			<td><?php echo $value->remaining;?></td>
			<td><?php echo $value->reset;?></td>
		</tr>
	<?php
		}
	}
	
	?>
	</table>
</body>
</html>
