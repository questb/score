<?php

echo '<html><head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
echo '<meta name="viewport" content="width=480" />';
echo '<title>ランキング'.$month.'</title>';
echo '</head><body>';

echo "<a href=".URL."?game=".$game."&mode=ranking_all>All</a> / ";
echo "<a href=".URL."?game=".$game."&mode=ranking_all&month=".date(Ym).">Month</a> / ";
echo "<a href=".URL."?game=".$game."&mode=ranking_last>Last100</a><br>\n";

?>
