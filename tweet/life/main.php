<?php
	require dirname(__FILE__).'/../TwistOAuth.phar'   ;
	require dirname(__FILE__).'/../main/user.php'     ;
	require dirname(__FILE__).'/../main/try_catch.php';
	require dirname(__FILE__).'/../myfunc/func.php'   ;

//	$tweet_data=($_POST["text"]);

	$uptime_pl=dirname(__FILE__).'/uptime.pl';
	$uptime=`perl $uptime_pl`;
//	print $uptime;

	$free_pl=dirname(__FILE__).'/free.pl';
	$free=`perl $free_pl`;
//	print $free;

	$clamd_pl=dirname(__FILE__).'/clamd.pl';
	$clamd=`perl $clamd_pl`;
//	print $clamd;

	$tweet_data
		="Load average $uptime\n"
			."used memory $free %\n"
			."Max Mam Process $clamd\n"
			."#TwitterBot制作";

//	print $tweet_data;

	try_catch($cK,$cS,$aT,$aTS,$tweet_data);

//	$return_file='./index.php';
//	header('Location: '.$return_file);

?>
