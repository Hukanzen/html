<!doctype html>
<html>
<head>
	<title>kataomoi</title>
</head>
<?php
	require dirname(__FILE__).'/../TwistOAuth.phar'   ;
	require dirname(__FILE__).'/../main/user.php'     ;
	require dirname(__FILE__).'/../main/try_catch.php';
	require dirname(__FILE__).'/../myfunc/func.php'   ;

	require dirname(__FILE__).'/func.php';

	$connection	= new TwistOAuth($cK,$cS,$aT,$aTS);

	$user_sname="AkihisaYoshii4";
	$option=array(
		"stringify_ids"=>"true",
		"count"=>"5000"
	);

	$friend_ids=$connection->get("friends/ids",$option);
	$followers_ids=$connection->get("followers/ids",$option);

	$omoi_list=kataomoi($friend_ids,$followers_ids);
	$omoi_c=count($omoi_list); 

	$omoware_list=kataomoware($friend_ids,$followers_ids);
	$omoware_c=count($omoware_list);	
	$key=0;
?>
<body>	
	<table>
		<tr>
			<td>kataomoi   </td>
			<td><?php echo htmlspecialchars($omoi_c); ?>   </td>
			<td>
				<form action="./omoi.php" method="POST">
					<?php foreach($omoi_list as $key => $value){ ?>
						<input type="hidden" name="list[<?php echo $key;?>]" value="<?php echo $value;?>">
					<?php }?>
					<input type="submit" value="go">
				</form>
			</td>
		</tr>
		<tr><td>kataomoware</td><td><?php echo htmlspecialchars($omoware_c); ?></td><td><a href="./omoware.php">omoware</a></td></tr>
	</table>
	<br>
	<a href="../">return</a>
</body>
</html>
