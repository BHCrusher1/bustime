<!DOCTYPE html>
<?php
$site_name = 'バス時刻表'; //サイト名
$page_title = 'バス時刻表 新京駅→大岡→帝都駅西口 休日ダイヤ'; //ページ名
$url = 'https://bhcrusher1.net/bustime/00010BK/'; //正規化するURL
$description = 'バス時刻表です。新京駅→大岡→帝都駅西口 休日ダイヤ'; //検索結果などに表示される説明
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
		<h2>新京駅→大岡→帝都駅西口</h2>
		<p>休日ダイヤ (2202年4月1日改正)</p>
	</header>
	<main>
		<div class="transfer_box">
			<label for="transfer">バス乗り換え</label>
			<input type="checkbox" id="transfer"/>
			<div class="transfer_show">
				<p><a href="/bustime/00000AK/">大橋乗換 ホゲ交通 帝都大学・新帝都駅</a></p>
				<p>大橋乗換 ホゲ交通 森林駅・県立病院</p>
				<p>帝都寺前乗換 ホゲ交通 帝都車庫</p>
				<p>帝都寺前乗換 ピヨ自動車 ニュータウン</p>
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
			<th>新京駅</th>
				<th>正平</th>
				<th>新内</th>
				<th>大岡</th>
				<th>大橋</th>
				<th>帝都駅</th>
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
				<td>615</td>
				<td>622</td>
				<td>627</td>
				<td>631</td>
				<td>639</td>
				<td>653</td>
			</tr>
			<tr>
				<td>635</td>
				<td>642</td>
				<td>647</td>
				<td>651</td>
				<td>659</td>
				<td>713</td>
			</tr>
			<tr>
				<td>650</td>
				<td>657</td>
				<td>702</td>
				<td>706</td>
				<td>714</td>
				<td>728</td>
			</tr>
			<tr>
				<td>705</td>
				<td>713</td>
				<td>718</td>
				<td>722</td>
				<td>730</td>
				<td>746</td>
			</tr>
			<tr>
				<td>725</td>
				<td>733</td>
				<td>738</td>
				<td>742</td>
				<td>750</td>
				<td>806</td>
			</tr>
			<tr>
				<td>740</td>
				<td>748</td>
				<td>753</td>
				<td>757</td>
				<td>805</td>
				<td>821</td>
			</tr>
			<tr>
				<td>755</td>
				<td>803</td>
				<td>808</td>
				<td>812</td>
				<td>820</td>
				<td>836</td>
			</tr>
			<tr>
				<td>810</td>
				<td>818</td>
				<td>823</td>
				<td>827</td>
				<td>835</td>
				<td>851</td>
			</tr>
			<tr>
				<td>825</td>
				<td>833</td>
				<td>838</td>
				<td>842</td>
				<td>850</td>
				<td>906</td>
			</tr>
			<tr>
				<td>840</td>
				<td>848</td>
				<td>853</td>
				<td>857</td>
				<td>905</td>
				<td>921</td>
			</tr>
			<tr>
				<td>900</td>
				<td>908</td>
				<td>913</td>
				<td>917</td>
				<td>925</td>
				<td>941</td>
			</tr>
			<tr>
				<td>920</td>
				<td>928</td>
				<td>933</td>
				<td>937</td>
				<td>945</td>
				<td>1001</td>
			</tr>
			<tr>
				<td>940</td>
				<td>948</td>
				<td>953</td>
				<td>957</td>
				<td>1005</td>
				<td>1021</td>
			</tr>
			<tr>
				<td>1000</td>
				<td>1008</td>
				<td>1013</td>
				<td>1017</td>
				<td>1025</td>
				<td>1041</td>
			</tr>
			<tr>
				<td>1020</td>
				<td>1028</td>
				<td>1033</td>
				<td>1037</td>
				<td>1045</td>
				<td>1101</td>
			</tr>
			<tr>
				<td>1040</td>
				<td>1048</td>
				<td>1053</td>
				<td>1057</td>
				<td>1105</td>
				<td>1121</td>
			</tr>
			<tr>
				<td>1100</td>
				<td>1108</td>
				<td>1113</td>
				<td>1117</td>
				<td>1125</td>
				<td>1141</td>
			</tr>
			<tr>
				<td>1120</td>
				<td>1128</td>
				<td>1133</td>
				<td>1137</td>
				<td>1145</td>
				<td>1201</td>
			</tr>
			<tr>
				<td>1140</td>
				<td>1148</td>
				<td>1153</td>
				<td>1157</td>
				<td>1205</td>
				<td>1221</td>
			</tr>
			<tr>
				<td>1200</td>
				<td>1208</td>
				<td>1213</td>
				<td>1217</td>
				<td>1225</td>
				<td>1241</td>
			</tr>
			<tr>
				<td>1220</td>
				<td>1228</td>
				<td>1233</td>
				<td>1237</td>
				<td>1245</td>
				<td>1301</td>
			</tr>
			<tr>
				<td>1240</td>
				<td>1248</td>
				<td>1253</td>
				<td>1257</td>
				<td>1305</td>
				<td>1321</td>
			</tr>
			<tr>
				<td>1300</td>
				<td>1308</td>
				<td>1313</td>
				<td>1317</td>
				<td>1325</td>
				<td>1341</td>
			</tr>
			<tr>
				<td>1320</td>
				<td>1328</td>
				<td>1333</td>
				<td>1337</td>
				<td>1345</td>
				<td>1401</td>
			</tr>
			<tr>
				<td>1340</td>
				<td>1348</td>
				<td>1353</td>
				<td>1357</td>
				<td>1405</td>
				<td>1421</td>
			</tr>
			<tr>
				<td>1400</td>
				<td>1408</td>
				<td>1413</td>
				<td>1417</td>
				<td>1425</td>
				<td>1441</td>
			</tr>
			<tr>
				<td>1420</td>
				<td>1428</td>
				<td>1433</td>
				<td>1437</td>
				<td>1445</td>
				<td>1501</td>
			</tr>
			<tr>
				<td>1440</td>
				<td>1448</td>
				<td>1453</td>
				<td>1457</td>
				<td>1505</td>
				<td>1521</td>
			</tr>
			<tr>
				<td>1500</td>
				<td>1508</td>
				<td>1513</td>
				<td>1517</td>
				<td>1525</td>
				<td>1541</td>
			</tr>
			<tr>
				<td>1520</td>
				<td>1528</td>
				<td>1533</td>
				<td>1537</td>
				<td>1545</td>
				<td>1601</td>
			</tr>
			<tr>
				<td>1540</td>
				<td>1548</td>
				<td>1553</td>
				<td>1557</td>
				<td>1605</td>
				<td>1621</td>
			</tr>
			<tr>
				<td>1600</td>
				<td>1608</td>
				<td>1613</td>
				<td>1617</td>
				<td>1625</td>
				<td>1641</td>
			</tr>
			<tr>
				<td>1620</td>
				<td>1628</td>
				<td>1633</td>
				<td>1637</td>
				<td>1645</td>
				<td>1701</td>
			</tr>
			<tr>
				<td>1640</td>
				<td>1648</td>
				<td>1653</td>
				<td>1657</td>
				<td>1705</td>
				<td>1721</td>
			</tr>
			<tr>
				<td>1700</td>
				<td>1708</td>
				<td>1713</td>
				<td>1717</td>
				<td>1725</td>
				<td>1741</td>
			</tr>
			<tr>
				<td>1720</td>
				<td>1728</td>
				<td>1733</td>
				<td>1737</td>
				<td>1745</td>
				<td>1801</td>
			</tr>
			<tr>
				<td>1740</td>
				<td>1748</td>
				<td>1753</td>
				<td>1757</td>
				<td>1805</td>
				<td>1821</td>
			</tr>
			<tr>
				<td>1755</td>
				<td>1803</td>
				<td>1808</td>
				<td>1812</td>
				<td>1820</td>
				<td>1836</td>
			</tr>
			<tr>
				<td>1810</td>
				<td>1818</td>
				<td>1823</td>
				<td>1827</td>
				<td>1835</td>
				<td>1851</td>
			</tr>
			<tr>
				<td>1825</td>
				<td>1833</td>
				<td>1838</td>
				<td>1842</td>
				<td>1850</td>
				<td>1906</td>
			</tr>
			<tr>
				<td>1840</td>
				<td>1848</td>
				<td>1853</td>
				<td>1857</td>
				<td>1905</td>
				<td>1921</td>
			</tr>
			<tr>
				<td>1855</td>
				<td>1903</td>
				<td>1908</td>
				<td>1912</td>
				<td>1920</td>
				<td>1936</td>
			</tr>
			<tr>
				<td>1910</td>
				<td>1918</td>
				<td>1923</td>
				<td>1927</td>
				<td>1935</td>
				<td>1951</td>
			</tr>
			<tr>
				<td>1925</td>
				<td>1933</td>
				<td>1938</td>
				<td>1942</td>
				<td>1950</td>
				<td>2006</td>
			</tr>
			<tr>
				<td>1940</td>
				<td>1947</td>
				<td>1952</td>
				<td>1956</td>
				<td>2004</td>
				<td>2018</td>
			</tr>
			<tr>
				<td>1955</td>
				<td>2002</td>
				<td>2007</td>
				<td>2011</td>
				<td>2019</td>
				<td>2033</td>
			</tr>
			<tr>
				<td>2010</td>
				<td>2017</td>
				<td>2022</td>
				<td>2026</td>
				<td>2034</td>
				<td>2048</td>
			</tr>
			<tr>
				<td>2025</td>
				<td>2032</td>
				<td>2037</td>
				<td>2041</td>
				<td>2049</td>
				<td>2103</td>
			</tr>
			<tr>
				<td>2040</td>
				<td>2047</td>
				<td>2052</td>
				<td>2056</td>
				<td>2104</td>
				<td>2118</td>
			</tr>
			<tr>
				<td>2100</td>
				<td>2107</td>
				<td>2112</td>
				<td>2116</td>
				<td>2124</td>
				<td>2138</td>
			</tr>
			<tr>
				<td>2120</td>
				<td>2127</td>
				<td>2132</td>
				<td>2136</td>
				<td>2144</td>
				<td>2158</td>
			</tr>
			<tr>
				<td>2140</td>
				<td>2147</td>
				<td>2152</td>
				<td>2156</td>
				<td>2204</td>
				<td>2218</td>
			</tr>
			<tr>
				<td>2200</td>
				<td>2207</td>
				<td>2212</td>
				<td>2216</td>
				<td>2224</td>
				<td>2238</td>
			</tr>
			<tr>
				<td>2230</td>
				<td>2237</td>
				<td>2242</td>
				<td>2246</td>
				<td>‥</td>
				<td>‥</td>
			</tr>
			</tbody>
		</table>
	</div>
	<footer>
		<ul>
			<li><a href="/bustime/00010AK/">逆方向</a></li>
			<li class="top"><a href="/bustime/">トップ</a></li>
			<li><a href="/bustime/00010BH/">平日</a></li>
		</ul>
	</footer>
</body>
</html>