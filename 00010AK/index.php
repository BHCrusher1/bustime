<!DOCTYPE html>
<?php
$site_name = 'バス時刻表'; //サイト名
$page_title = 'バス時刻表 帝都駅西口→大岡→新京駅 休日ダイヤ'; //ページ名
$url = 'https://bhcrusher1.net/bustime/00010AK/'; //正規化するURL
$description = 'バス時刻表です。帝都駅西口→大岡→新京駅 休日ダイヤ'; //検索結果などに表示される説明
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
	main td{width:4.5em;}
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
		<h2>帝都駅西口→大岡→新京駅</h2>
		<p>休日ダイヤ (2202年4月1日改正)</p>
	</header>
	<main>
		<div class="transfer_box">
			<label for="transfer">バス乗り換え</label>
			<input type="checkbox" id="transfer"/>
			<div class="transfer_show">
				<p>市民病院前乗換 フー自動車 新京循環</p>
				<p>新京駅乗換 バー交通 天台駅</p>
				<p>新京駅乗換 バー交通 免許センター</p>
				<p>新京駅乗換 バー交通 新京NT</p>
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
				<th>帝都駅</th>
				<th>大橋</th>
				<th>大岡</th>
				<th>新内</th>
				<th>正平</th>
				<th>新京駅</th>
			</tr>
			<tr>
				<td>発</td>
				<td>発</td>
				<td>発</td>
				<td>発</td>
				<td>発</td>
				<td>着</td>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>600</td>
				<td>609</td>
				<td>616</td>
				<td>620</td>
				<td>625</td>
				<td>638</td>
			</tr>
			<tr>
				<td>620</td>
				<td>629</td>
				<td>636</td>
				<td>640</td>
				<td>645</td>
				<td>658</td>
			</tr>
			<tr>
				<td>640</td>
				<td>649</td>
				<td>656</td>
				<td>700</td>
				<td>705</td>
				<td>718</td>
			</tr>
			<tr>
				<td>655</td>
				<td>704</td>
				<td>711</td>
				<td>715</td>
				<td>720</td>
				<td>733</td>
			</tr>
			<tr>
				<td>710</td>
				<td>720</td>
				<td>727</td>
				<td>731</td>
				<td>736</td>
				<td>751</td>
			</tr>
			<tr>
				<td>725</td>
				<td>735</td>
				<td>742</td>
				<td>746</td>
				<td>751</td>
				<td>806</td>
			</tr>
			<tr>
				<td>740</td>
				<td>750</td>
				<td>757</td>
				<td>801</td>
				<td>806</td>
				<td>821</td>
			</tr>
			<tr>
				<td>755</td>
				<td>805</td>
				<td>812</td>
				<td>816</td>
				<td>821</td>
				<td>836</td>
			</tr>
			<tr>
				<td>810</td>
				<td>820</td>
				<td>827</td>
				<td>831</td>
				<td>836</td>
				<td>851</td>
			</tr>
			<tr>
				<td>830</td>
				<td>840</td>
				<td>847</td>
				<td>851</td>
				<td>856</td>
				<td>911</td>
			</tr>
			<tr>
				<td>850</td>
				<td>900</td>
				<td>907</td>
				<td>911</td>
				<td>916</td>
				<td>931</td>
			</tr>
			<tr>
				<td>910</td>
				<td>920</td>
				<td>927</td>
				<td>931</td>
				<td>936</td>
				<td>951</td>
			</tr>
			<tr>
				<td>930</td>
				<td>940</td>
				<td>947</td>
				<td>951</td>
				<td>956</td>
				<td>1011</td>
			</tr>
			<tr>
				<td>950</td>
				<td>1000</td>
				<td>1007</td>
				<td>1011</td>
				<td>1016</td>
				<td>1031</td>
			</tr>
			<tr>
				<td>1010</td>
				<td>1020</td>
				<td>1027</td>
				<td>1031</td>
				<td>1036</td>
				<td>1051</td>
			</tr>
			<tr>
				<td>1030</td>
				<td>1040</td>
				<td>1047</td>
				<td>1051</td>
				<td>1056</td>
				<td>1111</td>
			</tr>
			<tr>
				<td>1050</td>
				<td>1100</td>
				<td>1107</td>
				<td>1111</td>
				<td>1116</td>
				<td>1131</td>
			</tr>
			<tr>
				<td>1110</td>
				<td>1120</td>
				<td>1127</td>
				<td>1131</td>
				<td>1136</td>
				<td>1151</td>
			</tr>
			<tr>
				<td>1130</td>
				<td>1140</td>
				<td>1147</td>
				<td>1151</td>
				<td>1156</td>
				<td>1211</td>
			</tr>
			<tr>
				<td>1150</td>
				<td>1200</td>
				<td>1207</td>
				<td>1211</td>
				<td>1216</td>
				<td>1231</td>
			</tr>
			<tr>
				<td>1210</td>
				<td>1220</td>
				<td>1227</td>
				<td>1231</td>
				<td>1236</td>
				<td>1251</td>
			</tr>
			<tr>
				<td>1230</td>
				<td>1240</td>
				<td>1247</td>
				<td>1251</td>
				<td>1256</td>
				<td>1311</td>
			</tr>
			<tr>
				<td>1250</td>
				<td>1300</td>
				<td>1307</td>
				<td>1311</td>
				<td>1316</td>
				<td>1331</td>
			</tr>
			<tr>
				<td>1310</td>
				<td>1320</td>
				<td>1327</td>
				<td>1331</td>
				<td>1336</td>
				<td>1351</td>
			</tr>
			<tr>
				<td>1330</td>
				<td>1340</td>
				<td>1347</td>
				<td>1351</td>
				<td>1356</td>
				<td>1411</td>
			</tr>
			<tr>
				<td>1350</td>
				<td>1400</td>
				<td>1407</td>
				<td>1411</td>
				<td>1416</td>
				<td>1431</td>
			</tr>
			<tr>
				<td>1410</td>
				<td>1420</td>
				<td>1427</td>
				<td>1431</td>
				<td>1436</td>
				<td>1451</td>
			</tr>
			<tr>
				<td>1430</td>
				<td>1440</td>
				<td>1447</td>
				<td>1451</td>
				<td>1456</td>
				<td>1511</td>
			</tr>
			<tr>
				<td>1450</td>
				<td>1500</td>
				<td>1507</td>
				<td>1511</td>
				<td>1516</td>
				<td>1531</td>
			</tr>
			<tr>
				<td>1510</td>
				<td>1520</td>
				<td>1527</td>
				<td>1531</td>
				<td>1536</td>
				<td>1551</td>
			</tr>
			<tr>
				<td>1530</td>
				<td>1540</td>
				<td>1547</td>
				<td>1551</td>
				<td>1556</td>
				<td>1611</td>
			</tr>
			<tr>
				<td>1550</td>
				<td>1600</td>
				<td>1607</td>
				<td>1611</td>
				<td>1616</td>
				<td>1631</td>
			</tr>
			<tr>
				<td>1610</td>
				<td>1620</td>
				<td>1627</td>
				<td>1631</td>
				<td>1636</td>
				<td>1651</td>
			</tr>
			<tr>
				<td>1630</td>
				<td>1640</td>
				<td>1647</td>
				<td>1651</td>
				<td>1656</td>
				<td>1711</td>
			</tr>
			<tr>
				<td>1650</td>
				<td>1700</td>
				<td>1707</td>
				<td>1711</td>
				<td>1716</td>
				<td>1731</td>
			</tr>
			<tr>
				<td>1710</td>
				<td>1720</td>
				<td>1727</td>
				<td>1731</td>
				<td>1736</td>
				<td>1751</td>
			</tr>
			<tr>
				<td>1725</td>
				<td>1725</td>
				<td>1742</td>
				<td>1746</td>
				<td>1751</td>
				<td>1806</td>
			</tr>
			<tr>
				<td>1740</td>
				<td>1750</td>
				<td>1757</td>
				<td>1801</td>
				<td>1806</td>
				<td>1821</td>
			</tr>
			<tr>
				<td>1755</td>
				<td>1805</td>
				<td>1812</td>
				<td>1816</td>
				<td>1821</td>
				<td>1836</td>
			</tr>
			<tr>
				<td>1810</td>
				<td>1820</td>
				<td>1827</td>
				<td>1831</td>
				<td>1836</td>
				<td>1851</td>
			</tr>
			<tr>
				<td>1825</td>
				<td>1835</td>
				<td>1842</td>
				<td>1846</td>
				<td>1851</td>
				<td>1906</td>
			</tr>
			<tr>
				<td>1840</td>
				<td>1850</td>
				<td>1857</td>
				<td>1901</td>
				<td>1906</td>
				<td>1921</td>
			</tr>
			<tr>
				<td>1855</td>
				<td>1905</td>
				<td>1912</td>
				<td>1916</td>
				<td>1921</td>
				<td>1936</td>
			</tr>
			<tr>
				<td>1910</td>
				<td>1920</td>
				<td>1927</td>
				<td>1931</td>
				<td>1936</td>
				<td>1951</td>
			</tr>
			<tr>
				<td>1925</td>
				<td>1935</td>
				<td>1942</td>
				<td>1946</td>
				<td>1951</td>
				<td>2006</td>
			</tr>
			<tr>
				<td>1940</td>
				<td>1949</td>
				<td>1956</td>
				<td>2000</td>
				<td>2005</td>
				<td>2018</td>
			</tr>
			<tr>
				<td>2000</td>
				<td>2009</td>
				<td>2016</td>
				<td>2020</td>
				<td>2025</td>
				<td>2038</td>
			</tr>
			<tr>
				<td>2020</td>
				<td>2029</td>
				<td>2036</td>
				<td>2040</td>
				<td>2045</td>
				<td>2058</td>
			</tr>
			<tr>
				<td>2040</td>
				<td>2049</td>
				<td>2056</td>
				<td>2100</td>
				<td>2105</td>
				<td>2118</td>
			</tr>
			<tr>
				<td>2100</td>
				<td>2109</td>
				<td>2116</td>
				<td>2120</td>
				<td>2125</td>
				<td>2138</td>
			</tr>
			<tr>
				<td>2120</td>
				<td>2129</td>
				<td>2136</td>
				<td>2140</td>
				<td>2145</td>
				<td>2158</td>
			</tr>
			<tr>
				<td>2145</td>
				<td>2154</td>
				<td>2201</td>
				<td>2205</td>
				<td>2210</td>
				<td>2223</td>
			</tr>
			</tbody>
		</table>
	</main>
	<footer>
		<ul>
			<li><a href="/bustime/00010BK/">逆方向</a></li>
			<li class="top"><a href="/bustime/">トップ</a></li>
			<li><a href="/bustime/00010AH/">平日</a></li>
		</ul>
	</footer>
</body>
</html>