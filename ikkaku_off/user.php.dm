<?php

#require dirname(__FILE__).'/./TwistOAuth.phar';

function user_key(){
	$cK ='xxx';	#Consumer Key
	$cS ='xxx';	#Consumer Sercret
	$aT ='xxx';	#Access Token
	$aTS='xxx';	#Access Token Sercret

	$to=new TwistOAuth($cK,$cS,$aT,$aTS);

	return $to;
}
