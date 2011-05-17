<!DOCTYPE html>
<html>
<head>
	<title>shrtn: Open Source URL Shortening Made Simple</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
	<link href="/assets/css/site/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<link href="/assets/css/site/stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />
	<!--[if IE]>
	<link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<![endif]-->

	<style type="text/css" media="screen">
		body {
			margin: 0;
			padding: 0;
			background: #C8EBFE;
			font: normal 10px/150% "Lucida Grande", "Lucida Sans Unicode",Verdana,"Jamrul",sans-serif;
		}
		#container {
			background: #fff;
			margin: 0 auto;
			width: 960px;
			border-radius: 3px;
		}
		#main {
			margin: 10px;
			padding: 10px;
		}
		#bookmarklet { 
			float: right;
			text-align: right;
		}
		#bookmarklet a {
			border-radius: 3px;
			background: #FCA44B;
			padding: 15px 25px;
			color: #fff;
			font-size: 18px;
		}
		header h1 {
			color: #FCA44B;
			padding-bottom: 0px;
			margin-bottom: 0px;
			font-size: 36px;
		}
		header h2 {
			color: #E0D1CC;
			padding-top: 0px;
			margin-top: 5px;
		}
	</style>
</head>
<body>
	<div id="container">
		<div id="main">
			<header>
				<h1>shrtn</h1>
				<h2>Open Source URL Shortening Made Simple</h2>
			</header>
			<span id="bookmarklet">
				<a href="javascript:<?php echo $bookmarklet ?>">shrtn</a>
				<br /> <br />
				Drag the link above to your bookmark bar.
			</span>
			<h3>recent shrtns</h3>
			<ul>
				<?php foreach ($urls as $url) : ?>
				<li><a href="<?php echo $url->url ?>"><?php echo $url->title ? $url->title : $url->url ?></a></li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
</body>
</html>
