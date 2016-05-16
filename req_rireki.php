<?php

if ($player) {
	$sql_name = " and player='".$player."'";
}
if ($date_start && $date_end) {
     $sql_date = " and datetime >= '".$date_start."' and datetime <= '".$date_end."'";
}
$sql = "select * from score".
	" where game='".$game."'".
	"".$sql_name."".
	"".$sql_date."".
	" order by datetime desc".
	" limit ".$limit_start.",".$limit_count."";
$res = mysql_query($sql);
if ($json_flg) {
	while ($row = mysql_fetch_assoc($res)) {
		$all[] = $row;
	}
	header("Content-Type: text/javascript; charset=utf-8");
	echo json_encode($all);
} else {
	while ($row = mysql_fetch_assoc($res)) {
		echo $row['datetime']."\t".$row['player']."\t".$row['score']."<br>\n";
	}
}


?>
