<?php

	$link = mysqli_connect('localhost', 'twidb', 'twipass0','twitter');
	//$link=mysql_connect('localhost','twidb','twipass0');
	if (!$link) {
	    die('接続失敗です。'.mysql_error());
	}

	//$db_connect=mysql_select_db('twitter', $link);
	//if (!$db_selected){
	//	die('データベース選択失敗です。'.mysql_error());
	//}

?>
