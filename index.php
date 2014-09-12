<!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes">

	<title><?php echo get_the_title(); ?></title>
	
	<!-- [BEGIN] Zeppelin -->
	<link rel="stylesheet" href="http://zeppelin.registerguard.com/prod/0.1.0/20140911/1/styles/zeppelin.min.css">
	<script src="http://zeppelin.registerguard.com/prod/0.1.0/20140911/1/scripts/zeppelin.min.js"></script>
	<!-- [END] Zeppelin -->	
	
	<!-- <link rel="stylesheet" href="style.css"> -->
	
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
</head>
<body>

	<!-- [BEGIN] head -->
	<header id="zeppelin" role="banner">
		<h6><a href="http://registerguard.com">The Register-Guard</a></h6>
	</header>
	<!-- [END] head -->
	
	<!-- [BEGIN] The loop -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<h1><?php the_title(); ?></h1>
	
		<?php the_content(); ?>
	
	<?php endwhile; endif; ?>
	<!-- [END] The loop -->
	
</body>
