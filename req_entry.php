<?php

if (!$player) {
	$player = 'NONAME';
}
$sql = "insert into score(game,player,score,datetime) value (".
    "'".$game."',".
    "'".$player."',".
    $score.",".
    "now())";
mysql_query($sql);

if ($game == "gomennasai") {
	$sql = "select sum(score) sum_score from score where game = '".$game."' and player = '".$player."'";
	$res = mysql_query($sql);
	$row = mysql_fetch_assoc($res);
	$sum_score = $row['sum_score'];
	echo "<span style=\"font-size:9px;\"><img src=\"/gomennasai/e466.gif\" width=15 height=15 border=0 align=\"absmiddle\" alt=\"ごめんなさい!\">ごめんなさい！</span>";
} else {
	echo $score;
}

?>
