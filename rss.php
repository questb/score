<ul>
<?php
$rss = simplexml_load_file("http://picasaweb.google.com/data/feed/base/user/quest.b/albumid/5199876795056153121?alt=rss&kind=photo&hl=ja");
//print_r($rss->channel->item);exit;
foreach ($rss->channel->item as $item) {
	//$url = (string)$item->enclosure->attributes()->url;
	preg_match('/src=\"(.*?)\"/', $item->description, $matches);
	echo $matches[1]."\n";
	//echo "<li><img src=\"$url\"></li>\n";
}
?>
</ul>
