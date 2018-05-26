<?php
$a=$argv;
$average=0;
$sum=(explode(' ',$a[1]));
if(is_numeric($sum[0])=true && is_numeric($sum[2])=true){
	switch($sum[1]){
		case "+":
		   echo $average=$sum[0]+$sum[2];
		     break;
		case "-":
		   echo $average=$sum[0]-$sum[2];
		     break;
		case "*":
		   echo $average=$sum[0]*$sum[2];
		     break;
		case "/":
		   echo $average=$sum[0]/$sum[2];
		     break;
		default:
		   echo "錯誤";
		     break;
	}