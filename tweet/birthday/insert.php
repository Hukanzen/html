<?php
	require dirname(__FILE__).'/../myfunc/connect.php';
	require dirname(__FILE__).'/../myfunc/func.php';

	$b_name=mysqli_real_escape_string($link,($_POST["b_name"]));
	
	$btd=array(
		mysqli_real_escape_string($link,$_POST["bd_month"]),	
		mysqli_real_escape_string($link,$_POST["bd_day"])
	);

	
	for($i=0;$i<2;$i++){
		if($btd[$i]>=0 && $btd[$i]<= 9){
			$btd[$i]="0".$btd[$i];
		}
	}

	$b_btd="1000".$btd[0].$btd[1];
	
	$query="INSERT INTO twitter.birthday(name,birthday) VALUES('".$b_name."','".$b_btd."');";
	echo $query;
	$result=mysqli_query($link,$query);
	if(!$result){
		die("result error");
	}

	mysqli_close($link);

	$return_file='./index.php';
	header('Location: '.$return_file);
?>
