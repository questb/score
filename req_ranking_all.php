<?php

if ($date_start && $date_end) {
	$sql_date = " and datetime >= '".$date_start."' and datetime <= '".$date_end."'";
}

$sql = "select score, player, datetime from score".
	" where game='".$game."'".
	" ".$sql_date."".
	" order by score desc, datetime asc".
	" limit ".$limit_start.",".$limit_count."";
$res = mysql_query($sql);
$i=$limit_start+1;

if ($json_flg) {
	while ($row = mysql_fetch_assoc($res)) {
		$all[] = $row;
	}
	header("Content-Type: text/javascript; charset=utf-8");
	echo json_encode($all);
} else {
	require("header.php");
	echo "<h1>".$game." ".$month."</h1>\n";
	echo "<table border=1><tr><td>順位</td><td>スコア</td><td>プレイヤー</td><td>日付</td></tr>\n";
	while ($row = mysql_fetch_assoc($res)) {
		echo "<tr><td>".$i++."</td><td>".$row['score']."</td><td>".$row['player']."</td><td>".$row['datetime']."</td></tr>\n";
	}
	echo "</table><br>\n";
	require("footer.php");
}

?>
