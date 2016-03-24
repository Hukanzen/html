<?php 
	require dirname(__FILE__).'/../TwistOAuth.phar'   ;
	require dirname(__FILE__).'/../main/user.php'     ;
	require dirname(__FILE__).'/../main/try_catch.php';
	require dirname(__FILE__).'/../myfunc/func.php'   ;
	
//	$search="@i15323";
//	$count=10;
//
//	pakufav($search,$count,$cK,$cS,$aT,$aTS);

//	function pakufav($whose,$count,$cK,$cS,$aT,$aTS){

		$count=$_POST["NUM"];
		$whose=$_POST["whose"];

		if($count>200) $count=200;

		$connection	= new TwistOAuth($cK,$cS,$aT,$aTS);

		/*=== get user tl ===*/
		$usr_tl=array(
			"screen_name"=>$whose,
			"count"=>$count,
			"exclude_replies"=>"true",
			"include_rts"=>"false"
		);
		//$tweets_params=array("q"=>$search,'count'=> $count);
		$tweets=$connection->get("statuses/user_timeline",$usr_tl);
		//$me_screen_name=$connection->get('account/verify_credentials')->screen_name;
		//echo $tweets;
		$cnt=0;
		if($tweets){
			//echo $tweets->statuses->text;
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
					
					/*=== pakutsui ===*/
					$tweet_data=$value->text;
					try_catch($cK,$cS,$aT,$aTS,$tweet_data);
					$cnt++;
					echo $value->text."<BR>".$cnt;
					sleep(3);
				}
			}	
		}
//	}
?>

<form action="./index.php">
	<input type="submit" value="return">
</form>
