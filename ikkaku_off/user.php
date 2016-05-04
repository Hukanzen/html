<?php

#require dirname(__FILE__).'/./TwistOAuth.phar';

function user_key(){
	$cK ='yU2IcSMv9rsZMDrKbgrYZvHMr';
	$cS ='rTeXyjcueCRWkZA1yBTvMcfuKRYdOUz7Mna7avX4qA7CFxTfKg';
	$aT ='715419339252322304-OWupF5B0aZlTrEQ4dfMzJ6o6R0jkXgu';
	$aTS='ukbGkwLoAk6785cOUGE9EPqSTULjB3RJpAaLrNP5Ta8s8';

	$to=new TwistOAuth($cK,$cS,$aT,$aTS);

	return $to;
}


