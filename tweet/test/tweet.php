<?php
	//$max_Tweet=200;

	require (dirname(__FILE__).'/../TwistOAuth.phar');
	require (dirname(__FILE__).'/../main/user.php'   );
	require (dirname(__FILE__).'/../main/try_catch.php');
	require (dirname(__FILE__).'/../myfunc/func.php' );

	$a=1;
	var_dump($a,!$a,~$a);

	$a=0;
	var_dump($a,!$a,~$a);

	//echo output_book_data();
	//$now=array(
	//	"year"  => date("Y"),
	//	"month" => date("m"),
	//	"day"   => date("d"),
	//	"hour"  => date("H"),
	//	"min"   => date("i"),
	//	"sec"   => date("s"),
	//	"youbi" => date("w")
	//);
	////$tweet_data=create_tweet($now,1);
	//$tweet_data="@ykhre ".create_tweet($now,1);
	//try_catch($cK,$cS,$aT,$aTS,$tweet_data);

//	$cK	=	'Tx427H6hqif3CXT13zBzJhyFU';
//	$cS	=	'iST1kW3XuWXrVeLJQSNuoYlscdW6zOvcC3qy4YlXy5lU9JH1Tv';
//	$aT	=	'466465919-wpwPbl6Yd4q44tXjqc5BwQLu0FRPCkeml8pCM9iT';
//	$aTS=	'LUWPfVC292mIXT0tYaTZl2cjooqqcvnRffnbABwWAnIAm';

//	$now=array(
//		"year"  => date("Y"),
//		"month" => date("m"),
//		"day"   => date("d"),
//		"hour"  => date("H"),
//		"min"   => date("i"),
//		"sec"   => date("s"),
//		"youbi" => date("w")
//	);
//	$holi_tweet_data=holiday($now["year"],$now["month"],$now["day"]);
//
//	$add_tweet_data=" #自作bot試験中";
//
//	$tweet_data='今は' ." ".
//			$now["year"]   ."/".
//			$now["month"]  ."/".
//			$now["day"]    .' '.
//			$now["hour"]   .':'.
//			$now["min"]    .':'.
//			$now["sec"]    .' '.
//			$now["youbi"]  .' '.
//			$holi_tweet_data.' '.'です.'.' '.
//			$add_tweet_data;
//						
//	try_catch($cK,$cS,$aT,$aTS,$tweet_data);
//	try{
//		$to=new TwistOAuth($cK,$cS,$aT,$aTS);
//		print 'now tweet : '.$tweet_data."\n";
//		$status=$to->post('statuses/update', array('status' => ($tweet_data)));
//
//		//var_dump($status);
//	}catch(TwistException $error){
//		echo "{$error->getCode()} {$error->getMessage()}";
//	}
?>
		
