#!/usr/bin/perl
#
#09:07:37 up  2:59,  2 users,  load average: 0.00, 0.00, 0.20
#

$time=`uptime`;
$time=~s!\s+! !g;
$time=~s!\t! !g;

@a_time=split(/ /,$time);

#foreach (@a_time){
#	print $_."\n";
#}

print $a_time[8].$a_time[9].$a_time[10];
