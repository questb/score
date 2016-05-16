<?php

if ($date_start && $date_end) {
     $sql_date = " and datetime >= '".$date_start."' and datetime <= '".$date_end."'";
}

//スコア全体個数を取得
$sql = "select count(score) as total_cnt from score".
	" where game='".$game."'".
	" ".$sql_date."";
$res = mysql_query($sql);
$row = mysql_fetch_assoc($res); 
$total_cnt = $row["total_cnt"];

//プレイヤーの最高スコアを取得
$sql = "select max(score) as max_score from score".
	" where game='".$game."'".
	" ".$sql_date."".
	" and player = '".$player."'";
$res = mysql_query($sql);
$row = mysql_fetch_assoc($res); 
$max_score = $row["max_score"];

//プレイヤーの最高スコアよりも上のスコア個数を取得
$sql = "select count(*) as ranking_cnt from score".
	" where game='".$game."'".
	" ".$sql_date."".
	" and score > ".$max_score."";
$res = mysql_query($sql);
$row = mysql_fetch_assoc($res); 
$ranking_cnt = $row["ranking_cnt"] + 1;

//プレイヤーのスコア取得
$sql = "select score, player, datetime from score".
	" where game='".$game."'".
	" ".$sql_date."".
	" and player = '".$player."'".
	" and score = ".$max_score."";
$res = mysql_query($sql);
$row = mysql_fetch_assoc($res);

//レート付け
$ritu = round(($ranking_cnt/$total_cnt)*100, 1);
if ($ritu < 1) {
	$rate = "SSS";
} elseif ($ritu < 3) {
	$rate = "SS";
} elseif ($ritu < 10) {
	$rate = "S";
} elseif ($ritu < 20) {
	$rate = "A+";
} elseif ($ritu < 30) {
	$rate = "A";
} elseif ($ritu < 40) {
	$rate = "B";
} elseif ($ritu < 50) {
	$rate = "C";
} elseif ($ritu < 60) {
	$rate = "D";
} elseif ($ritu < 70) {
	$rate = "E";
} elseif ($ritu < 80) {
	$rate = "F";
} elseif ($ritu < 90) {
	$rate = "G";
} elseif ($ritu < 97) {
	$rate = "XX";
} elseif ($ritu < 99) {
	$rate = "XXX";
}

if ($json_flg) {
	while ($row = mysql_fetch_assoc($res)) {
		$all[] = $row;
	}
	header("Content-Type: text/javascript; charset=utf-8");
	echo json_encode($all);
} else {
	require("header.php");
	echo "<h1>".$player."</h1>\n";
	echo "<table border=1><tr><td>順位</td><td>ハイスコア</td><td>レート</td><td>日付</td></tr>\n";
	echo "<tr><td align=right><font size=6>".$ranking_cnt."</font></td><td align=right><font size=6>".$row['score']."</font></td><td><font size=6>".$rate."</font>(".round(($ranking_cnt/$total_cnt)*100, 1)."%)</td><td>".$row['datetime']."</td></tr>\n";
	echo "</table><br>\n";

	//$ramen = file('ramen.txt');
	//echo "<img src=\"".$ramen[rand(0,count($ramen))]."\"><br>";

	require("footer.php");
}

?>
