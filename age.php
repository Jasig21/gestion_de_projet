<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	</head>


	<?php
		//Exercice 6
	function age($date1, $date2= null) {


		if ($date2==null) {
			$date2=time();
		
		} else {
			$date2=strtotime($date2);
		};

		$date1=strtotime($date1);
		$diff= abs($date2 - $date1);

		
		return intval($diff/3600/24/365);

	};

	$num=age("10-02-1998", "26-05-1999");
	echo $num;


	
	?>







</html>