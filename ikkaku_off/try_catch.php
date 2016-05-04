<?php

//function try_catch($cK,$cS,$aT,$aTS,$tweet_data){
function try_catch($to,$tweet_data){
		try{
			//$to=new TwistOAuth($cK,$cS,$aT,$aTS);
				//$tweet_data='test';
				$status=$to->post('statuses/update', array('status' => ($tweet_data)));
			//var_dump($status);
		}catch(TwistException $error){
			echo "{$error->getCode()} {$error->getMessage()}";
		}
	}
?>
