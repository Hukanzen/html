#!/usr/bin/perl

$top=`top -a -b -n 1`;
$top=~s!\s+! !g;
$top=~s!\t! !g;

#print $top;
@a_top=split(/ /,$top);

#$i=0;
#foreach (@a_top){
#	print $i."=".$_."\n";
#	$i++;
#}

#print @a_top[71]."\n";
#print @a_top[72]."\n";
#print @a_top[73]."\n";

$return;

for($i=71;$i<=73;$i++){
	$return=$return.(@a_top[$i]." ");
}

print $return;
