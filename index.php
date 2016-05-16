<?php

require("config.php");

// Parameter Get
$game = $_GET['game'];
$player = urldecode($_GET['player']);
$score = intval($_GET['score']);
$mode = $_GET['mode'];
$month = $_GET['month'];
$last = $_GET['last'];
$page = intval($_GET['page']);
$num = intval($_GET['num']);
$json_flg = $_GET['json'];
$time = date('Y-m-d H:i:s');

// Check!!
if (!($game)) {
	header("Location: reference.html");
}

// init
if (!$mode) {
	if ($score && $player) {
		$mode = 'entry';
	} else {
		$mode = 'ranking_all';
	}
}
if (strlen($month) == 6 && checkdate(substr($month,4,2),1,substr($month,0,4))) {
	$date_start = date('Y-m-d', strtotime($month.'01'));
	$date_end = date('Y-m-d', strtotime($date_start.' +1 month -1 sec'));
} else {
	//$date_start = date('Y-m-01');
	//$date_end = date('Y-m-d', strtotime($date_start.' +1 month -1 sec'));
	$date_start = "";
	$date_end = "";
}
if (is_numeric($last) && $last > 0) {
	$last = $last;
} else {
	$last = 100;
}
if (is_numeric($num) && $num > 0) {
	$limit_count = $num;
} else {
	$limit_count = 100;
}
if (is_numeric($page) && $page > 0) {
	$limit_start = ($page - 1) * $limit_count;
} else {
	$limit_start = 0;
}

// Database Connection
$link = mysql_connect(DB_HOST,DB_USER,DB_PASS);
mysql_select_db(DB_NAME);

// Database Insert or View 
if ($mode == 'rireki') {
	// 履歴
	require('req_rireki.php');
} else if ($mode == 'ranking_all') {
	// ランキング(all)
	require('req_ranking_all.php');
} else if ($mode == 'ranking_player') {
	// ランキング(個人)
	require('req_ranking_player.php');
} else if ($mode == 'ranking_last') {
	// ランキング(last)
	require('req_ranking_last.php');
} else if ($mode == 'entry'){
	// スコア登録
	require('req_entry.php');
} else if ($mode == 'total_score'){
	// トータルスコア
	require('req_total_score.php');
}

?>
