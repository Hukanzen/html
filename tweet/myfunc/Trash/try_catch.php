<?php
	try{
		$to=new TwistOAuth($cK,$cS,$aT,$aTS);
		$status=$to->post('statuses/update', array('status' => ($tweet_data)));
		print 'now tweet : '.$tweet_data."\n";

		//var_dump($status);
	}catch(TwistException $error){
		echo "{$error->getCode()} {$error->getMessage()}";
	}
?>
