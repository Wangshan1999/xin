<?php 
function zui_Da($n,$m)
{
	$arr =range(1, $n);
	$i =0;
	while (count($arr)>1) {
		if (($i+1)%$m==0) {
			unset($arr[$i]);
		}else
		{
			array_push($arr, $arr[$i]);
			unset($arr[$i]);
		}
		$i++;
	}
	var_dump($arr[$i]);
}
zui_Da(6,2);

 ?>