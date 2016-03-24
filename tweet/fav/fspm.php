<?php

	require dirname(__FILE__).'/../TwistOAuth.phar'   ;
	require dirname(__FILE__).'/../main/user.php'     ;
	require dirname(__FILE__).'/../main/try_catch.php';
	require dirname(__FILE__).'/../myfunc/func.php'   ;

	$num_fav=$_POST["NUM"];
	$whose	=$_POST["whose"];

	if($num_fav>200) $num_fav=200;

	$connection	= new TwistOAuth($cK,$cS,$aT,$aTS);

	$usr_tl=array(
		"screen_name"=>$whose,
		"count"=>$num_fav,
		"exclude_replies"=>"true",
		"include_rts"=>"false"
	);
	$tweets=$connection->get("statuses/user_timeline",$usr_tl);

	$cnt=0;
	if($tweets){
		foreach($tweets as $value){
			if(!$value->in_reply_to_user_id){
				/*=== tweet reply ===*/
				$tweet_id=$value->id_str;
				if($value->favorited){
					/*=== always favorited ===*/
					$status=$connection->post('favorites/destroy',array('id' => $tweet_id));
				}
				/*=== yet favorited ===*/
				$status=$connection->post('favorites/create', array('id' => $tweet_id));
				echo $value->text."<br>";
				$cnt++;
			}
		}	
	}

	echo "<br>tweet cnt".$cnt."<br>";
?>

<form action="./index.php" method="post">
	<input type="submit" value="return">
</form>
