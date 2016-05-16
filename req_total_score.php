<?php

if ($date_start && $date_end) {
     $sql_date = " and datetime >= '".$date_start."' and datetime <= '".$date_end."'";
}

//プレイヤーのスコア取得
$sql = "select sum(score) as sum_score from score".
	" where game='".$game."'".
	" ".$sql_date."".
	" and player = '".$player."'";
$res = mysql_query($sql);
$row = mysql_fetch_assoc($res);
$total_score = $row['sum_score'];

echo $total_score;

?>
