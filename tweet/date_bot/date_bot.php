<?php
	
	require dirname(__FILE__).'/../TwistOAuth.phar'   ;
	require dirname(__FILE__).'/../main/user.php'     ;
	require dirname(__FILE__).'/../main/try_catch.php';
	require dirname(__FILE__).'/../myfunc/func.php'   ;
	require dirname(__FILE__).'/../pakutsi/pakitsui.php'   ;

	$sleep_min=28;
	$tweet_flag=0;
	while(1){
		$now=array(
			"hour" => date("H"),
			"min" => date("i")
			);
	
		if($now["min"] =="00"){

			$tweet_data=create_tweet(0);	

			try_catch($cK,$cS,$aT,$aTS,$tweet_data);
			sleep($sleep_min*60);
		}else if($now["min"]=="30" /*&& !$tweet_flag*/){

			$tweet_data=create_tweet(2);

			try_catch($cK,$cS,$aT,$aTS,$tweet_data);
			sleep($sleep_min*60);
		//	$tweet_flag=1;
		
		//}else if($now["min"]=="30" && $tweet_flag){
		//	$search="@gigigii1";
		//	$count=10;
		//	pakufav($search,$count,$cK,$cS,$aT,$aTS);
		//	$tweet_flag=0;
		}

		sleep(20);
	}
?>
