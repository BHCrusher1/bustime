<!DOCTYPE html>
<?php
$site_name = 'バス時刻表'; //サイト名
$page_title = 'バス時刻表 新帝都駅→帝都大学→帝都駅西口 休校日・休日ダイヤ'; //ページ名
$url = 'https://bhcrusher1.net/bustime/00000BH/'; //正規化するURL
$description = 'バス時刻表です。新帝都駅→帝都大学→帝都駅西口 休校日・休日ダイヤ'; //検索結果などに表示される説明
$fb_app_id = ''; //Facebook App ID
?>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $page_title;?></title>
	<meta name="description" content="<?php echo $description;?>">
	<link rel="canonical" href="<?php echo $url;?>" />
	<meta property="og:title" content="<?php echo $page_title;?>" />
	<meta property="og:type" content="website" /> <!-- 別のものが適していると思ったら変える -->
	<meta property="og:url" content="<?php echo $url;?>" />
	<meta property="og:image" content="https://bhcrusher1.net/bustime/banner.jpg" /> <!-- 共有時に表示するバナー画像（絶対パス） -->
	<meta property="og:site_name" content="<?php echo $site_name;?>" />
	<meta property="fb:app_id" content="<?php echo $fb_app_id;?>" />
	<meta property="og:description" content="<?php echo $description;?>" />
	<meta name="twitter:card" content="summary_large_image">
	<link rel="apple-touch-icon" sizes="180x180" href="/bustime/icon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/bustime/icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/bustime/icon/favicon-16x16.png">
	<link rel="manifest" href="/bustime/icon/site.webmanifest">
	<link rel="mask-icon" href="/bustime/icon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="/bustime/icon/favicon.ico">
	<meta name="apple-mobile-web-app-title" content="<?php echo $site_name;?>">
	<meta name="application-name" content="<?php echo $site_name;?>">
	<meta name="msapplication-TileColor" content="#ffc40d">
	<meta name="msapplication-TileImage" content="/bustime/icon/mstile-144x144.png">
	<meta name="msapplication-config" content="/bustime/icon/browserconfig.xml">
	<meta name="theme-color" content="#2196F3">
	<link rel="preload" href="/bustime/style.css" as="style">
	<link rel="stylesheet" href="/bustime/style.css" />
	<style>
	main td{width:5.5em;}
	</style>
	<script>
		if ('serviceWorker' in navigator) {
			console.log("Will the service worker register?");
			navigator.serviceWorker.register('/bustime/service-worker.js')
				.then(function(reg){
					console.log("Yes, it did.");
				}).catch(function(err) {
					console.log("No it didn't. This happened: ", err)
				});
		}
	</script>
</head>
<body>
	<header>
		<h1>バス時刻表</h1>
		<h2>新帝都駅→帝都大学→帝都駅西口</h2>
		<p>休校日・休日ダイヤ (2199年4月1日改正)</p>
	</header>
	<main>
		<div class="transfer_box">
			<label for="transfer">バス乗り換え</label>
			<input type="checkbox" id="transfer"/>
			<div class="transfer_show">
				<p><a href="/bustime/00010AK/">大橋乗換 フガバス 新京駅・大岡</a></p>
				<p>大橋乗換 ホゲ交通 森林駅・県立病院</p>
			</div>
		</div>
		<nav>
			<ul class="snsbutton">
				<li class="share-twitter">
					<a href="https://twitter.com/intent/tweet?text=<?php echo urlencode($page_title);?>&url=<?php echo urlencode($url);?>" target="_blank" rel="noopener">Twitter</a>
				</li>
				<li class="share-facebook">
					<a href="https://www.facebook.com/share.php?u=<?php echo urlencode($url);?>&t=<?php echo urlencode($page_title);?>" target="_blank" rel="noopener">Facebook</a>
				</li>
				<li class="share-line">
					<a href="https://social-plugins.line.me/lineit/share?url=<?php echo urlencode($url);?>" target="_blank" rel="noopener">LINE</a>
				</li>
			</ul>
		</nav>
		<table>
			<thead> <!-- phpでもなんでもいいので、theadに停車場名と着発の区別。tbodyに時刻表本体を入れる -->
				<tr>
					<th>　　</th>
					<th>新帝都駅</th>
					<th>帝都大学</th>
					<th>帝都大学</th>
					<th>帝都駅西口</th>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>発</td>
					<td>着</td>
					<td>発</td>
					<td>着</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>650</td>
					<td>708</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>710</td>
					<td>728</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>718</td>
					<td>735</td>
					<td>735</td>
					<td>750</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>750</td>
					<td>810</td>
					<td>810</td>
					<td>825</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>805</td>
					<td>825</td>
					<td>825</td>
					<td>840</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>820</td>
					<td>840</td>
					<td>840</td>
					<td>855</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>835</td>
					<td>855</td>
					<td>855</td>
					<td>910</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>900</td>
					<td>920</td>
					<td>920</td>
					<td>935</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>940</td>
					<td>958</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>925</td>
					<td>942</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1000</td>
					<td>1018</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1000</td>
					<td>1017</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1020</td>
					<td>1038</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1020</td>
					<td>1040</td>
					<td>1040</td>
					<td>1055</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1030</td>
					<td>1047</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1100</td>
					<td>1118</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1100</td>
					<td>1120</td>
					<td>1120</td>
					<td>1135</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1140</td>
					<td>1158</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1130</td>
					<td>1147</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1200</td>
					<td>1218</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1200</td>
					<td>1220</td>
					<td>1220</td>
					<td>1235</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1240</td>
					<td>1258</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1230</td>
					<td>1247</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1300</td>
					<td>1318</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1300</td>
					<td>1320</td>
					<td>1320</td>
					<td>1335</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1330</td>
					<td>1347</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1400</td>
					<td>1418</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1400</td>
					<td>1420</td>
					<td>1420</td>
					<td>1435</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1420</td>
					<td>1440</td>
					<td>1440</td>
					<td>1455</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1500</td>
					<td>1518</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1445</td>
					<td>1502</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1500</td>
					<td>1520</td>
					<td>1520</td>
					<td>1535</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1540</td>
					<td>1558</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1530</td>
					<td>1547</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1600</td>
					<td>1618</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1600</td>
					<td>1620</td>
					<td>1620</td>
					<td>1635</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1640</td>
					<td>1658</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1630</td>
					<td>1647</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1705</td>
					<td>1723</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1700</td>
					<td>1720</td>
					<td>1720</td>
					<td>1735</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1740</td>
					<td>1758</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1730</td>
					<td>1747</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1800</td>
					<td>1818</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1805</td>
					<td>1825</td>
					<td>1825</td>
					<td>1840</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1820</td>
					<td>1840</td>
					<td>1840</td>
					<td>1855</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1840</td>
					<td>1900</td>
					<td>1900</td>
					<td>1915</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1900</td>
					<td>1920</td>
					<td>1920</td>
					<td>1935</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1920</td>
					<td>1940</td>
					<td>1940</td>
					<td>1955</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>2000</td>
					<td>2018</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>2000</td>
					<td>2020</td>
					<td>2020</td>
					<td>2035</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>2020</td>
					<td>2040</td>
					<td>2040</td>
					<td>2055</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>2045</td>
					<td>2105</td>
					<td>2105</td>
					<td>2120</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>2100</td>
					<td>2120</td>
					<td>2120</td>
					<td>2135</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>2120</td>
					<td>2140</td>
					<td>2140</td>
					<td>2155</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>2200</td>
					<td>2215</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>2200</td>
					<td>2220</td>
					<td>2220</td>
					<td>2235</td>
				</tr>
			</tbody>
		</table>
	</main>
	<footer>
		<ul>
			<li><a href="/bustime/00000AK/">逆方向</a></li>
			<li class="top"><a href="/bustime/">トップ</a></li>
			<li><a href="/bustime/00000BH/">開校日・平日</a></li>
		</ul>
	</footer>
</body>
</html>