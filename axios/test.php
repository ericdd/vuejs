<?php

extract($_REQUEST);

//print_r($_GET);
//print_r($_POST);


if($_SERVER['REQUEST_METHOD']=='POST') {

	$arr[] = [ 'name'=>'eric',  'age'=>35, 'city'=>"深圳"];
	$arr[] = [ 'name'=>'ashley',  'age'=>24, 'city'=>"上海"];
	$arr[] = [ 'name'=>$a,  'age'=>$b, 'city'=>"Paris"];
	echo json_encode($arr);

} else {

	$arr[] = [ 'emma', 11, "桂林"];
	$arr[] = [ 'mia', 33,  "北京"];
	$arr[] = [ $a,  "$b", "New York"];
	echo json_encode($arr);

}

