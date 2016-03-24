<!doctype html>
<?php
	require dirname(__FILE__).'/../TwistOAuth.phar'   ;
	require dirname(__FILE__).'/../main/user.php'     ;
	require dirname(__FILE__).'/../main/try_catch.php';
	require dirname(__FILE__).'/../myfunc/func.php'   ;
	require dirname(__FILE__).'/../myfunc/connect.php';
	
	$query="SELECT * FROM twitter.birthday;";
	
	$n=0;
	if($result=mysqli_query($link,$query)){
		while($bir_d[$n]=mysqli_fetch_row($result)) $n++;
	}else{
		echo "result == NULL";
	}

	mysqli_close($link);
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Birthday</title>
	<style>
		table{
			border: 1px;
		}
	</style>
</head>
<body>
	<form method="POST" action="./insert.php">
		<p>name:</p>
		<input type="text" name="b_name" value="">
		<br>

		<p>When birthday ?:</p>
		<p>month</p>
		<input type="number" name="bd_month" value="">
		<br>
		<p>day</p>
		<input type="number" name="bd_day" value="">
		<br>
		<input type="submit" name="sub" value="send">
	</form>
	<br>
	
	<table border=1>
		<tr><th>id</th><th>name</th><th>birthday</th></tr>
		<?php
			$i=0;
			while($i!=$n){
			//	echo "<tr><td>".$book_d[$i][0]."</td><td>".$book_d[$i][1]."</td><td>".$book_d[$i][2]."</td><td>".$book_d[$i][3]."</td><td>".$book_d[$i][4]."</td></tr>";
				echo "<tr>";
				echo "<td>".$bir_d[$i][0]."</td>";
				echo "<td>".$bir_d[$i][1]."</td>";
				echo "<td>".$bir_d[$i][2]."</td>";
				echo "</tr>";
				$i++;
			}
		?>
	</table>
	<a href="../">return</a>
</body>
<html>
