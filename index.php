<!DOCTYPE html>
<?php
$site_name = 'バス時刻表'; //サイト名
$page_title = 'バス時刻表 - TOP'; //ページ名
$url = 'https://bhcrusher1.net/bustime/'; //正規化するURL
$description = 'バス時刻表です。'; //検索結果などに表示される説明
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
	body{background-color:#f5f5f5;}
	h2{padding:0.25em 0;margin:0;background-color:#BBDEFB;border-radius:0.5em 0.5em 0 0;}
	p{margin:0.5em 0;}
	div#header{height:10vh;}
	main{max-width:1024px;padding:8vh 0 0 0;margin:auto;}
	header{height: 8vh;line-height:4vh;}
	.list{background:#FFF;border-radius:0.5em;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.12),0 1px 5px 0 rgba(0,0,0,.2);}
	.list a{display:block;text-decoration:none;color:#000;padding:0.5em 0;}
	.list li{border-bottom:1px #BBDEFB solid;}
	.list li:hover{background:#f5f5f5;}
	.list li.holi:hover{background:#f5e1e4;}
	.yet{text-decoration:line-through;padding:0.5em 0;}
	.holi{background-color:#FFEBEE;}
	.smallp{font-size:75%;}
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
	</header>
	<main>
		<p>バス時刻表公開終了に伴い、架空の地名に書き換えてソースを公開します。</p>
		<p>2017年の春に作ったものなので、今となってはおかしいと思う作りがありますが、直さずそのままです。</p>
		<br>
		<p>当サイトはバス会社とは無関係の個人が運営しています。</p>
		<p>このサイトについてバス会社に問い合わせないでください。</p>
		<p>時刻表の利用で発生した損害等も一切責任を負いません。</p>
		<nav class="list">
			<h2>ホゲ交通<br>帝都駅西口-帝都大学-新帝都駅</h2>
			<ul>
				<li><a href="/bustime/00000AH/">帝都駅西口→新帝都駅 方面 （平日・開校日）</a></li>
				<li class="holi"><a href="/bustime/00000AK/">帝都駅西口→新帝都駅 方面 （休日・休校日）</a></li>
				<li><a href="/bustime/00000BH/">新帝都駅→帝都駅西口 方面 （平日・開校日）</a></li>
				<li class="holi"><a href="/bustime/00000BK/">新帝都駅→帝都駅西口 方面 （休日・休校日）</a></li>
			</ul>
			<p>帝都駅西口-帝都大学間は帝都大学の開校日か休校日か、帝都大学-新帝都駅間は平日か休日かでダイヤが変わります</p>
		</nav>
		<nav class="list">
			<h2>フガバス<br>帝都駅西口-大岡-新京駅</h2>
			<ul>
				<li><a href="/bustime/00010AH/">帝都駅西口→新京駅 方面 （平日）</a></li>
				<li class="holi"><a href="/bustime/00010AK/">帝都駅西口→新京駅 方面 （休日）</a></li>
				<li ><a href="/bustime/00010BH/">新京駅→帝都駅西口 方面 （平日）</a></li>
				<li class="holi"><a href="/bustime/00010BK/">新京駅→帝都駅西口 方面 （休日）</a></li>
			</ul>
			<p>説明文がある場合は説明文を入力</p>
		</nav>
		<nav class="list">
			<h2>ピヨ自動車<br>帝都駅西口-（旧道経由）-ニュータウン</h2>
			<ul>
				<li class="yet">帝都駅西口→ニュータウン 方面 （平日）</li>
				<li class="holi yet">帝都駅西口→ニュータウン 方面 （休日）</li>
				<li class="yet">ニュータウン→帝都駅西口 方面 （平日）</li>
				<li class="holi yet">ニュータウン→帝都駅西口 方面 （休日）</li>
			</ul>
			<p>未実装路線を表す取り消し線はclass="yet"</p>
			<p>休日を表す赤背景はclass="holi"</p>
		</nav>
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
	</main>
</body>
</html>