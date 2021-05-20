<?php
/**
 * PHP lesson
 *
 * @package Blog
 */

require 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Marmelad&family=Manrope:wght@600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<title>Blog</title>
</head>
<body>
	<section class="main">
		<div class="container">
			<div class="wrapper row">
				<div class="col-lg-4">
					<div class="post">
						<div class="post-img">
							<img src="" alt="">
						</div>
						<div class="post-inner">
							<h4>Title</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
							<a href="" class="btn btn-primary">Show post</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<a href="page-create.php" class="btn btn-primary">Create Post</a>
</body>
</html>