<?php
	
	require dirname(__FILE__).'/../TwistOAuth.phar'   ;
	require dirname(__FILE__).'/../main/user.php'     ;
	require dirname(__FILE__).'/../main/try_catch.php';
	require dirname(__FILE__).'/../myfunc/func.php'   ;

	$tweet_data=create_tweet(0);	

	try_catch($cK,$cS,$aT,$aTS,$tweet_data);
?>
