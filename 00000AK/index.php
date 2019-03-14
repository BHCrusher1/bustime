<!DOCTYPE html>
<?php
$site_name = 'バス時刻表'; //サイト名
$page_title = 'バス時刻表 帝都駅西口→帝都大学→新帝都駅 休校日・休日ダイヤ'; //ページ名
$url = 'https://bhcrusher1.net/bustime/00000AK/'; //正規化するURL
$description = 'バス時刻表です。帝都駅西口→帝都大学→新帝都駅 休校日・休日ダイヤ'; //検索結果などに表示される説明
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
	main tbody{height:63vh;}
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
		<h2>帝都駅西口→帝都大学→新帝都駅</h2>
		<p>休校日・休日ダイヤ (2199年4月1日改正)</p>
	</header>
	<main>
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
					<th>帝都駅西口</th>
					<th>帝都大学</th>
					<th>帝都大学</th>
					<th>新帝都駅</th>
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
					<th>直通</th>
					<td>640</td>
					<td>655</td>
					<td>655</td>
					<td>715</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>710</td>
					<td>725</td>
					<td>725</td>
					<td>745</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>730</td>
					<td>745</td>
					<td>745</td>
					<td>805</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>755</td>
					<td>810</td>
					<td>810</td>
					<td>830</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>820</td>
					<td>835</td>
					<td>835</td>
					<td>855</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>830</td>
					<td>848</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>845</td>
					<td>900</td>
					<td>900</td>
					<td>920</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>900</td>
					<td>918</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>920</td>
					<td>935</td>
					<td>935</td>
					<td>955</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>940</td>
					<td>955</td>
					<td>955</td>
					<td>1015</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1008</td>
					<td>1025</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1000</td>
					<td>1018</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1020</td>
					<td>1035</td>
					<td>1035</td>
					<td>1055</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1040</td>
					<td>1058</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1108</td>
					<td>1125</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1100</td>
					<td>1118</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1120</td>
					<td>1135</td>
					<td>1135</td>
					<td>1155</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1140</td>
					<td>1158</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1208</td>
					<td>1225</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1200</td>
					<td>1218</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1220</td>
					<td>1235</td>
					<td>1235</td>
					<td>1255</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1240</td>
					<td>1258</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1308</td>
					<td>1325</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1300</td>
					<td>1318</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1320</td>
					<td>1335</td>
					<td>1335</td>
					<td>1355</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1358</td>
					<td>1415</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1340</td>
					<td>1358</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1423</td>
					<td>1440</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1420</td>
					<td>1435</td>
					<td>1435</td>
					<td>1455</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1440</td>
					<td>1458</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1508</td>
					<td>1525</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1500</td>
					<td>1518</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1520</td>
					<td>1535</td>
					<td>1535</td>
					<td>1555</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1540</td>
					<td>1558</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1608</td>
					<td>1625</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1600</td>
					<td>1618</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1620</td>
					<td>1635</td>
					<td>1635</td>
					<td>1655</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1640</td>
					<td>1658</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1708</td>
					<td>1725</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1700</td>
					<td>1718</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1725</td>
					<td>1740</td>
					<td>1740</td>
					<td>1800</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1740</td>
					<td>1755</td>
					<td>1755</td>
					<td>1815</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1800</td>
					<td>1815</td>
					<td>1815</td>
					<td>1835</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1820</td>
					<td>1835</td>
					<td>1835</td>
					<td>1855</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1858</td>
					<td>1915</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1845</td>
					<td>1903</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1900</td>
					<td>1918</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>‥</td>
					<td>‥</td>
					<td>1938</td>
					<td>1955</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>1920</td>
					<td>1938</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>1940</td>
					<td>1955</td>
					<td>1955</td>
					<td>2015</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>2000</td>
					<td>2015</td>
					<td>2015</td>
					<td>2035</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>2020</td>
					<td>2035</td>
					<td>2035</td>
					<td>2055</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>2040</td>
					<td>2055</td>
					<td>2055</td>
					<td>2115</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>2100</td>
					<td>2118</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>直通</th>
					<td>2125</td>
					<td>2140</td>
					<td>2140</td>
					<td>2158</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>2140</td>
					<td>2158</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>2200</td>
					<td>2215</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>2220</td>
					<td>2235</td>
					<td>‥</td>
					<td>‥</td>
				</tr>
			</tbody>
		</table>
	</main>
	<footer>
		<ul>
			<li><a href="/bustime/00000BK/">逆方向</a></li>
			<li class="top"><a href="/bustime/">トップ</a></li>
			<li><a href="/bustime/00000AH/">開校日・平日</a></li>
		</ul>
	</footer>
</body>
</html>