<!DOCTYPE html>
<html lang="en" class="error">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title><?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">

	<script src="<?php bloginfo('template_url'); ?>/vendor/jquery-1.11.1.min.js"></script>
</head>
<body>
	<figure class="monstruo">
		<img src="<?php bloginfo('template_url'); ?>/images/error.svg" alt="" class="js-img-to-svg">
	</figure>
	<div class="message">
		<div class="content">
			<h1>ERROR 404</h1>
			<p>LA PÁGINA QUE INTENTAS ACCEDER NO EXISTE</p>
		</div>
	</div>
	
	<script src="<?php bloginfo('template_url'); ?>/js/error.js"></script>
</body>
</html>