<!doctype html>
<?php
	require dirname(__FILE__).'/../main/user.php';
	require dirname(__FILE__).'/../TwistOAuth.phar';

	$statuses = array();
	$params = array('q' => 'foobarbaz');
	$statuses = $connect->get('search/tweets', $params);

	$conncet->streaming('user',function($

?>
