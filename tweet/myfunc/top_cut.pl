#!/usr/bin/perl

$fname="top_result.log";
open(IN,$fname);

my $line;
my $i=0;

while(<IN>){
	if($_=~"load"|| $_=~"Mem"){
		$line=$line.$_;
	}

	if($i==4){
		last;
	}
	$i++;
}

#print $line;
$line=~s/\s./\s/;
$line=~s/\t./\s/;
print $line;
