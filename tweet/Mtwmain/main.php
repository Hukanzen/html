<?php
	require dirname(__FILE__).'/../TwistOAuth.phar'   ;
	require dirname(__FILE__).'/../main/user.php'     ;
	require dirname(__FILE__).'/../main/try_catch.php';
	require dirname(__FILE__).'/../myfunc/func.php'   ;

	$tweet_data=($_POST["text"])."、とミサカ".rand(10032,20000)."号は呟きます。";

	try_catch($cK,$cS,$aT,$aTS,$tweet_data);

	$return_file='./index.php';
	header('Location: '.$return_file);

?>
