<?php
	require dirname(__FILE__).'/../TwistOAuth.phar'   ;
	require dirname(__FILE__).'/../main/user.php'     ;
	require dirname(__FILE__).'/../main/try_catch.php';
	
	$now=date("H");
	$tweet_data="@Mecha_ZORARU giveme $now";
	echo $tweet_data;
	try_catch($cK,$cS,$aT,$aTS,$tweet_data);
?>
