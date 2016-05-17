#!/usr/bin/perl
#             total       used       free     shared    buffers     cached
#Mem:          242M       239M       3.2M       216K       156K       5.1M
#-/+ buffers/cache:       234M       8.4M
#Swap:         1.0G       147M       876M


$free=`free -h`;
$free=~s!\s+! !g;
$free=~s!\t! !g;

@a_free=split(/ /,$free);

#foreach (@a_free){
#	print $_."\n";
#}

$total=$a_free[8];
$use=$a_free[9];
$total=~s!M!!;
$use=~s!M!!;
#print $total."\n";
#print $use."\n";
$prsnt=$use/$total*100;
$prsnt=sprintf("%.1lf",$prsnt);
print $prsnt;

#print $free;
