<!doctype type>

<?php
	require dirname(__FILE__).'/../myfunc/func.php'   ;
	require dirname(__FILE__).'/../myfunc/connect.php';

	$n=0;
	$query="SELECT * FROM twitter.book_release;";
//	var_dump($query);
	if($result=mysqli_query($link,$query)){
		while($book_d[$n]=mysqli_fetch_row($result)) $n++;
	}else{
		echo "result == NULL";
	}

	mysqli_close($link);
?>

<html>

<head>
	<meta charset="UTF-8">
	<title>book release</title>
	<style>
		table{
			border: 1px;
		}
	</style>
</head>

<body>
	<a href="../">return</a>


	<form method="POST" action="./insert.php">
		<p>book name:</p>
		<input type="text" name="book_name" value="">
		<br>

		<p>kansu:</p>
		<input type="number" name="kansu" value="">
		<br>

		<p>When releasei ?:</p>
		<p>year</p>
		<input type="number" name="rd_year" value="">
		<br>
		<p>month</p>
		<input type="number" name="rd_month" value="">
		<br>
		<p>day</p>
		<input type="number" name="rd_day" value="">
		<br>
		<input type="submit" name="sub" value="send">
	</form>
	<br>
	
	<table border=1>
		<tr><th>id</th><th>book_name</th><th>kansu</th><th>release</th><th>input</th></tr>
		<?php
			$i=0;
			while($i!=$n){
				echo "<tr><td>".$book_d[$i][0]."</td><td>".$book_d[$i][1]."</td><td>".$book_d[$i][2]."</td><td>".$book_d[$i][3]."</td><td>".$book_d[$i][4]."</td></tr>";
				$i++;
			}
		?>
	</table>

</body>

</html>
