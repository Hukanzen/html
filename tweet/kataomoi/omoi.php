<!doctype html>
<html>
<head>
	<title>kataomoi</title>
</head>
<body>
	<?php
		require dirname(__FILE__).'/../TwistOAuth.phar'   ;
		require dirname(__FILE__).'/../main/user.php'     ;
		require dirname(__FILE__).'/../main/try_catch.php';
		require dirname(__FILE__).'/../myfunc/func.php'   ;

		require dirname(__FILE__).'/func.php';

		$connection	= new TwistOAuth($cK,$cS,$aT,$aTS);

	//	int $i;

		for($j=0;$_POST["list"][$j]!=NULL;$j++){
			var_dump($j);
			$sum[$j]=NULL;
			for($i=0;$i<100;$i++){
			//	echo $value."<br>"."\n";
				$value_id=$_POST["list"][$i];
				$sum[$j]=$sum[$j].$value_id.",";
			}
			
			//echo $sum;
			$option=array(
				"include_entities"=>"false",
				"user_id"=>$sum[$j]
			);
	
			$tweets=$connection->get("users/lookup",$option);
	
			for($i=0;$i<100;$i++){
			//	if($_POST["veri"]){
			//		echo $tweets[$i]->screen_name."<br>";
			//	}
			}
		}
	?>

</body>
</html>
