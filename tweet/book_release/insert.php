<?php
	/*=== conect DB ===*/	
	//require dirname(__FILE__).'/connect.php';
	require dirname(__FILE__).'/../myfunc/connect.php';
	require dirname(__FILE__).'/../myfunc/func.php';

	$book_name=mysqli_real_escape_string($link,($_POST["book_name"]));
	$kansu    =mysqli_real_escape_string($link,($_POST["kansu"]));

	$rd=array(
		//"year"  => $_POST["rd_year"],
		//"month" => $_POST["rd_month"],
		//"day"   => $_POST["rd_day"]
		mysqli_real_escape_string($link,$_POST["rd_year"] ),
		mysqli_real_escape_string($link,$_POST["rd_month"]),
		mysqli_real_escape_string($link,$_POST["rd_day"]  )
	);

	for($i=1;$i<3;$i++){
		if($rd[$i]>=0 && $rd[$i]<= 9){
			$rd[$i]="0".$rd[$i];
		}
	}
	$release_date=$rd[0].$rd[1].$rd[2];
	$query="INSERT INTO twitter.book_release(book_name,kansu,release_date,input_date) VALUES('".$book_name."',".$kansu.",".$release_date.","."NOW());";
	echo $query;
	$result=mysqli_query($link,$query);
	if(!$result){
		die("result error");
	}

	mysqli_close($link);

	$return_file='./index.php';
	header('Location: '.$return_file);
?>
