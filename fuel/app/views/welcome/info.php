<!DOCTYPE html>
<html>
<head>
	<title>hey shorty</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<ul>
		<?php foreach ($urls as $url) : ?>
		<li><a href="<?php echo $url->url ?>"><?php echo $url->title ? $url->title : $url->url ?></a></li>
		<?php endforeach ?>
	</ul>
	<div id="bookmarklet">
		<a href="javascript:<?php echo $bookmarklet ?>">shorty</a>
	</div>
</body>
</html>
