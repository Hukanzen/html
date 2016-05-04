<?php
	require dirname(__FILE__).'/../TwistOAuth.phar';
	require dirname(__FILE__).'/../user.php';
	require dirname(__FILE__).'/./func.php';

	$to=user_key();
	#$who="@IKKAKU_OFF";
	$who="@AkihisaYoshii4";

	#=== since ? ===#
	#$f_name=dirname(__FILE__).'/./last_id.log';
	#$last_id=fopen($f_name);
	$last_id=0; #kari
	
	$aO_before_day_tweet=get_before_day($to,$last_id,$who);

	$O_best_tweet=get_best_tweet($to,$aO_before_day_tweet);
?>
