<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/init.php'); ?>
<!DOCTYPE html>
<html lang="ja" id="pagetop">
<head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link href="/assets/css/style.css" rel="stylesheet">
<link href="/assets/css/aos.css" rel="stylesheet">
<?php /*
<link href="/assets/css/animate.css" rel="stylesheet">
*/ ?>


<!--ページ個別CSS-->
<link href="/assets/css/product/<?php echo $id; ?>.css" rel="stylesheet">


</head>
<body>

<?php /*=======================================
header PC
===============================================*/ ?>
<div class="l-headPC">
<div class="l-headPC__wrapper">
 
<header class="c-headPC">

	<h1>
		<a href="#"><img src="/assets/image/common/logo_01.svg"  alt="三菱農業機械"  width="345" height="23" style="" ></a>
	</h1>

	<ul class="c-headPC__menu">

	<li>
		<a href="#" class="hvr-underline-reveal">三菱農業機械について</a>
		<div class="c-headPC__wrap"><div class="c-headPC__inner"><div class="dropContent">
			<div class="c-headPC1">
				<ul>
					<li><a href="story/index.html"><img src="/assets/image/common/m_01-1.jpg" width="200" height="84" /><br>私たちの想い</a></li>
					<li><a href="story/history.html"><img src="/assets/image/common/m_01-2.jpg" width="200" height="84" /><br>歴史</a></li>
					<li><a href="story/manufactur.html"><img src="/assets/image/common/m_01-3.jpg" width="200" height="84" /><br>ものづくり</a></li>
					<li><a href="story/library.html"><img src="/assets/image/common/m_01-4.jpg" width="200" height="84" /><br>広告ライブラリー</a></li>
				</ul>
			</div>

		</div></div></div>
	</li>

	<li>
		<a href="#" class="hvr-underline-reveal is-active">製品紹介</a>
		<div class="c-headPC__wrap"><div class="c-headPC__inner"><div class="dropContent">

			<div class="c-headPC2">
				<ul>
					<li><a href="#"><div><img src="/assets/image/common/m_02-1.jpg" width="103" height="108" alt=""><span>ミニ耕うん機・管理機</span></div></a></li>
					<li><a href="#"><div><img src="/assets/image/common/m_02-2.jpg" width="112" height="108" alt=""><span>トラクタ</span></div></a></li>
					<li><a href="#"><div><img src="/assets/image/common/m_02-3.jpg" width="104" height="108" alt=""><span>コンバイン</span></div></a></li>
					<li><a href="#"><div><img src="/assets/image/common/m_02-4.jpg" width="131" height="108" alt=""><span>田植機</span></div></a></li>
					<li><a href="#"><div><img src="/assets/image/common/m_02-5.jpg" width="196" height="110" alt=""><span>農業施設</span></div></a></li>
				</ul>
			</div>

		</div></div></div>
	</li>


	<li><a href="#" class="hvr-underline-reveal">販売会社</a></li>


	<li>
		<a href="#" class="hvr-underline-reveal">会社案内</a>
		<div class="c-headPC__wrap"><div class="c-headPC__inner"><div class="dropContent">

				<div class="c-headPC3">
					<ul>
						<li><a href="#">会社案内</a></li>
						<li><a href="recruit/index.html">採用情報</a></li>
						<li><a href="#">会社組織</a></li>
						<li><a href="#">グループ会社</a></li>
						<li><a href="#">サービスネットワーク</a></li>
					</ul>
				</div>

		</div></div></div>
	</li>


	<li>
		<a href="contact/index.html" class="hvr-underline-reveal">お問い合わせ・サポート</a>
		<div class="c-headPC__wrap"><div class="c-headPC__inner"><div class="dropContent">

			<div class="c-headPC3">
				<ul>
					<li><a href="#">万全のサポート</a></li>
					<li><a href="#">農業を支えるチカラ</a></li>
					<li><a href="#">お問い合せ</a></li>
					<li><a href="#">よくあるご質問</a></li>
					<li><a href="#">カタログ請求</a></li>
					<li><a href="#">取扱い説明書</a></li>
				</ul>
			</div>

		</div></div></div>
	</li>

	<li>
		<a href="" class="hvr-underline-reveal"><img src="/assets/image/common/icon_06.png" /></a>
	</li>

</ul>

</header>
</div>
</div>


<?php /*=======================================
header SP
===============================================*/ ?>
<div class="l-headSP sp-only">

<div class="c-headSP">
	<div class="c-headSP__wrap">
		<div class="c-headSP__logo">
			<h1>
				<a href="#"><img src="/assets/image/common/logo_01.svg"  alt="三菱農業機械"  width="345" height="23"  ></a>
			</h1>
		</div>
		<div class="c-headSP__menu">
			<div class="menuicon">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>

	<div class="c-headSP-submenu">
		<div class="c-headSP-submenu__inner">
			<div class="c-headSP-submenu__block">
				<p>三菱農業機械について</p>
				<ul>
					<li><a href="">私たちの想い</a></li>
					<li><a href="">歴 史</a></li>
					<li><a href="">ものづくり</a></li>
					<li><a href="">広告ライブラリー</a></li>
				</ul>
			</div>
			<div class="c-headSP-submenu__block">
				<p>製品紹介</p>
				<ul>
					<li><a href="">ミニ耕うん機・管理機</a></li>
					<li><a href="">トラクタ</a></li>
					<li><a href="">コンバイン</a></li>
					<li><a href="">田植え機</a></li>
					<li><a href="">農業施設</a></li>
				</ul>
			</div>
			<div class="c-headSP-submenu__block">
				<p>販売会社</p>
				<ul>
					<li><a href="">全国の販売店</a></li>
				</ul>
			</div>
			<div class="c-headSP-submenu__block">
				<p>会社案内</p>
				<ul>
					<li><a href="">会社案内</a></li>
					<li><a href="">採用情報</a></li>
					<li><a href="">会社組織</a></li>
					<li><a href="">グループ会社</a></li>
					<li><a href="">サービスネットワーク</a></li>
				</ul>
			</div>
			<div class="c-headSP-submenu__block">
				<p>お問い合わせ・サポート</p>
				<ul>
					<li><a href="">万全のサポート</a></li>
					<li><a href="">歴農業を支えるチカラ</a></li>
					<li><a href="">お問い合わせ</a></li>
					<li><a href="">よくあるご質問</a></li>
					<li><a href="">カタログ請求</a></li>
					<li><a href="">取扱説明書</a></li>
				</ul>
			</div>
			<div class="c-headSP-submenu__block u-search">
				<a href="" target="_blank"><img src="/assets/image/common/footer_04.png" width="21" height="31" alt="検索"></a>
			</div>

		</div>
	</div>

</div>





</div>

<?php /*=======================================
タイトル＋ナビ
===============================================*/ ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/titleblock1.php'); ?>


<article class="l-contents p-<?php echo $id; ?><?php if($commonClass){echo " ".$commonClass;} ?>">