<?php
	
	require dirname(__FILE__).'/../TwistOAuth.phar'   ;
	require dirname(__FILE__).'/../main/user.php'     ;
	require dirname(__FILE__).'/../main/try_catch.php';
	require dirname(__FILE__).'/../myfunc/func.php'   ;
	require dirname(__FILE__).'/../pakutsi/pakitsui.php'   ;
//../pakutsi/pakitsui.php

//	$sleep_min=28;
//	while(1){
//		$now=array(
//			"hour" => date("H"),
//			"min" => date("i")
//			);
//	
//		if($now["min"] =="00"){
//
//			$tweet_data=create_tweet(0);	
//
//			try_catch($cK,$cS,$aT,$aTS,$tweet_data);
//			sleep($sleep_min*60);
//		}
//
//		if(($now["hour"]/2 != 0) && ($now["min"]=="30")){
//
//			$tweet_data=create_tweet(2);
//
//			try_catch($cK,$cS,$aT,$aTS,$tweet_data);
//			sleep($sleep_min*60);
//		}
//
//		if(($now["hour"]/2 == 1) && ($now["min"]=="30")){
			$search="@gigigii1";
			$count=15;
			pakufav($search,$count,$cK,$cS,$aT,$aTS);
//			sleep(10*60);
//		}
//
//		sleep(20);
//	}
?>
