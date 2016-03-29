<?php
	$n = 6;
	$rootFive = sqrt(5);

	$first = pow((1+$rootFive),$n);
	$second = pow((1-$rootFive), $n);
	$top = $first - $second;
	$bottom = pow(2,$n) * $rootFive;

	$answer = $top/$bottom;

	echo $answer;

