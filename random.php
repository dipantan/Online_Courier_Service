
<?php
function getRandomString($length=16){
	$characters='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

	$string="";
    $date = "-". date("Y/m/d");
	for($i=0;$i<$length;$i++){
		$string.=$characters[mt_rand(0,strlen($characters)-1)];
		$c="$string.$date";
	}
	return $c;
}
//echo getRandomString();
?>


