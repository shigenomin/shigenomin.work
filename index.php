<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
                <meta name="robots" content="noindex,nofollow,noarchive" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>シゲのみん</title>
		<link rel="icon" href="http://shigenomin.work/image/favicon.png" type="image/png" >
		<link rel="stylesheet" type="text/css" href="http://shigenomin.work/css/style.css">

    <meta property="og:title" content="シゲのみん">
    <meta property="og:type" content="article">
    <meta property="og:description" content="サイトの作成をしています">
    <meta property="og:url" content="https://shigenomin.work">
    <meta property="og:site_name" content="シゲのみんのサイト">
    <meta property="og:image" content="">

	</head>
	<body class="body" style="text-align: center">
		<?php include('./header.php'); ?>
		<div style="margin-bottom: 10px;">
			<?php 
				if(isset($_POST['shigenomin'])):
					include('./shigenomin/main.php');
				else:
					include('./main.php');
				endif;
			?>
		</div>
		<div>
			<a class="twitter-timeline" data-lang="ja" data-width="300" data-height="600" data-theme="dark" href="https://twitter.com/shigenomin?ref_src=twsrc%5Etfw">Tweets by shigenomin</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
		<?php include('./footer.php'); ?>
	</body>
</html>
