<?php

//function try_catch($cK,$cS,$aT,$aTS,$tweet_data){
function try_catch($to,$tweet_data){
	try{
		$status=$to->post('statuses/update', array('status' => ($tweet_data)));
	}catch(TwistException $error){
		echo "{$error->getCode()} {$error->getMessage()}";
	}
}

function get_before_day($to,$last_id,$who){

	$option=array(
		'screen_name'     => $who,
#		'since_id'        => $last_id,
		'count'           => '100',  #=== test
		'trim_user'       => 'false',
		'exclude_replies' => 'true',
		'include_rts'     => 'false',
	);

	return $aO_tweet=$to->get('statuses/user_timeline',$option);

	#foreach ($aO_tweet as $value){
	#	echo $value->text."\n";	
	#}
}

function get_best_tweet($to,$aO_be_tweet){ #=== Object Best Tweet ===#
	$O_maxfav_tweet=$aO_be_tweet[0];
	$option=array();
	
	echo $O_maxfav_tweet->id;

	$O_tweet_c=get_favorited_count($to,$O_maxfav_tweet->id);
	
	#echo $O_tweet_c->favoriters;

}

function get_favorited_count($to,$tweet_id)
{
	$my_url='https://api.twitter.com/i/statuses/'.$tweet_id.'/activity/summary.json';
	echo $my_url;
	#$req=$to->OAuthRequest($my_url,"GET",array());
	
	return json_decode($req);
}
?>
