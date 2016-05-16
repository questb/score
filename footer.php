<?php
echo "<a href=".URL."?game=".$game."&mode=ranking_all>全体ランキング</a><br>\n";
echo "<a href=".URL."?game=".$game."&mode=ranking_all&month=".date(Ym).">月間ランキング</a><br>\n";
echo "<a href=".URL."?game=".$game."&mode=ranking_last>ラスト100ランキング</a><br>\n";
//if ($player) {
//	echo "<a href=".URL."?game=".$game."&player=".$player."&mode=ranking_player>プレイヤーランキング</a><br>\n";
//}
echo "<hr>";
echo "by <a href=".URL.">スコアランキングAPI</a>";
?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22766108-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
