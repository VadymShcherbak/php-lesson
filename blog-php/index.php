<?php
/**
 * PHP lesson
 *
 * @package Blog
 */

require 'functions.php';

$get_post = va_get_post();
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
	<section class="main blog-bg">
		<div class="container">
		<div class="main-title">
			<h1>BLOG</h1>
			<a href="page-create.php" class="btn btn-success">New Post</a>
		</div>
			<div class="wrapper row row-spacing-col">
			<?php foreach ( $get_post as $value ) : ?>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="post">
						<div class="post-img">
							<a href="post-page.php?id=<?php echo $value['id']; ?>">
								<img src="<?php echo $value['img_url']; ?>" alt="">
							</a>
							<div class="post-category">
								<p><?php echo $value['category'] ?></p>
						</div>
						</div>
						<div class="post-inner">
							<h4>
								<a href="post-page.php?id=<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a>
							</h4>
							<p><?php echo $value['short_text']; ?></p>
							<div class="date-comm">
								<div class="date-cr">
									<p><?php echo date_format( date_create( $value['date'] ), 'd.m.Y' ); ?></p>
								</div>
								<div class="icon-com">
								<i class="fad fa-comments"></i>
								</div>
							</div>
							<a href="post-page.php?id=<?php echo $value['id']; ?>" class="btn btn-info">Show Post</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	</section>
</body>
</html>
