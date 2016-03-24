<?php
	session_start();

	require dirname(__FILE__).'/tweet/TwistOAuth.phar'   ;
	require dirname(__FILE__).'/tweet/main/user.php'     ;

	/*=== it setted $_SESSION in login.php ===*/
	$r_token=array(
		'oauth_token'       =$_SESSION['oauth_token'],
		'oauth_token_secret'=$_SESSION['oauth_token_secret']
	);

	/*=== verify return token from twitter.com and session from login.php ===*/
	/* "isset" is verifcation that "is this NULL? " */
	/* if not NULL is to return true */
	if(isset($_REQUEST['oauth_token']) && $r_token['oauth_token'] !== $_REQUEST['oauth_token']){
		die('ERROR');
	}
	
	/*=== make TwistOAuth ===*/
	$connection_user=new TwistOAuth($cK,$cS,$r_token['oauth_token'],$r_token['oauth_token_secret']);

	/*=== ? ===*/
	/* $_SESSION['access_token'] = $connection->oauth("oauth/access_token", array("oauth_verifier" => $_REQUEST['oauth_verifier'])); */
	$_SESSION['access_token']=$connnection->post('oauth/access_token',array('oauth_verifier'=>$_REQUEST['oauth_verifier']));

	//セッションIDをリジェネレート
	session_regenerate_id();

	//マイページへリダイレクト
	header( 'location: ./mypage.php' );
?>
