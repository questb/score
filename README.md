# score
スコアランキング



<h1>スコアランキング Webサービス / APIリファレンス</h1>
<hr> 
スコアを登録する場合<br> 
<a href=http://meso.fam.cx/score/?game=moguratataki&player=taro&score=256>http://meso.fam.cx/score/?game=moguratataki&player=taro&score=256</a><br> 
<a href=http://meso.fam.cx/score/?game=moguratataki&player=jiro&score=512>http://meso.fam.cx/score/?game=moguratataki&player=jiro&score=512</a><br> 
<a href=http://meso.fam.cx/score/?game=moguratataki&player=takahashi&score=1024>http://meso.fam.cx/score/?game=moguratataki&player=takahashi&score=1024</a><br> 
<br>
パラメータ<br>
game：ゲーム名　例）moguratataki<br>
player：プレイヤー名　例）taro<br>
score：スコア　例）256<br>
<br>
<hr>
全体ランキングを表示する場合<br> 
<a href=http://meso.fam.cx/score/?game=moguratataki&mode=ranking_all>http://meso.fam.cx/score/?game=moguratataki&mode=ranking_all</a><br> 
月間ランキングを表示する場合<br> 
<a href=http://meso.fam.cx/score/?game=moguratataki&mode=ranking_all&month=201103>http://meso.fam.cx/score/?game=moguratataki&mode=ranking_all&month=201103</a><br> 
<br> 
パラメータ<br>
game：ゲーム名　例）moguratatataki<br>
mode：処理名　例）ranking_all<br>
month：ランキング集計の年月　例）201103...2011年3月1日00:00:00から2011年4月1日00:00:00まで集計する<br>
page：表示するページ（初期値は1）　例）1...1ページ目を表示する<br>
num：1ページ表示件数（初期値は100）　例）100...100件毎に表示する<br>
json：結果をJSON形式で出力　例）1<br>
<br>
<hr>
指定したプレイヤーの現在の順位を表示する場合<br> 
<a href=http://meso.fam.cx/score/?game=moguratataki&player=taro&mode=ranking_player>http://meso.fam.cx/score/?game=moguratataki&player=taro&mode=ranking_player</a><br> 
<br> 
パラメータ<br>
game：ゲーム名　例）moguratatataki<br>
player：プレイヤー名　例）taro<br>
mode：処理名　例）ranking_player<br>
month：ランキング集計の年月　例）201103...2011年3月1日00:00:00から2011年4月1日00:00:00まで集計する<br>
json：結果をJSON形式で出力　例）1<br>
<br>
<hr>
最近100件の中での順位を表示する場合<br> 
<a href=http://meso.fam.cx/score/?game=moguratataki&mode=ranking_last>http://meso.fam.cx/score/?game=moguratataki&mode=ranking_last</a><br> 
<br> 
パラメータ<br>
game：ゲーム名　例）moguratatataki<br>
mode：処理名　例）ranking_last<br>
last：ラストXXX件（初期値は100）　例）100...ラスト100件<br>
page：表示するページ（初期値は1）　例）1...1ページ目を表示する<br>
num：1ページ表示件数（初期値は100）　例）100...100件毎に表示する<br>
json：結果をJSON形式で出力　例）1<br>
<br>
<hr>
スコアの履歴を時系列順に表示する場合<br>
<a href=http://meso.fam.cx/score/?game=moguratataki&mode=rireki>http://meso.fam.cx/score/?game=moguratataki&mode=rireki</a><br> 
<br> 
パラメータ<br> 
game：ゲーム名　例）moguratataki<br> 
mode：処理名　例）rireki<br> 
json：結果をJSON形式で出力　例）1<br> 
<br>
<hr> 
パラメータ一覧<br> 
game：ゲーム名　例）moguratataki<br> 
player：プレイヤー名　例）taro<br> 
score：スコア　例）256<br> 
mode：処理名　例）スコアを登録する場合entry　スコアの履歴を表示する場合rireki　ランキングを表示する場合ranking_all ranking_player ranking_last<br> 
month：ランキング集計の年月　例）201103...2011年3月1日00:00:00から2011年4月1日00:00:00まで集計する<br>
page：表示するページ（初期値は1）　例）1...1ページ目を表示する<br>
num：1ページ表示件数（初期値は100）　例）100...100件毎に表示する<br>
json：結果をJSON形式で出力　例）1<br> 
<br>
