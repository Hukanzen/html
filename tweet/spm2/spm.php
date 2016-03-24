<?php

	require dirname(__FILE__).'/../TwistOAuth.phar'   ;
	require dirname(__FILE__).'/../main/user.php'     ;
	require dirname(__FILE__).'/../main/try_catch.php';
	require dirname(__FILE__).'/../myfunc/func.php'   ;
	
	$max_tweet=($_POST["maxN"]);
	$post_data=($_POST["text"]);

	//$max_tweet=100;
	//$post_data="@i15323 hoge";

	for($i=0;$i<$max_tweet;$i++){
		$j=$i+1;
		$tweet_data=$post_data." ".$j."/".$max_tweet;	
		echo $tweet_data."\n";	
	 	try_catch($cK,$cS,$aT,$aTS,$tweet_data);
	}

	$return_file='./index.php';
	header('Location: '.$return_file);
?>
