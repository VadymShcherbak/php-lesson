<?php
/**
 * PHP lesson
 *
 * @package Blog
 */

require 'functions.php';

va_add_comments();
$get_id_post     = va_get_post_by_id();
$va_get_comments = va_get_comments();
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
	<title>Post</title>
</head>
<body>
	<section class="main post-bg">
		<div class="container">
		<div class="main-title">
			<h1>POST</h1>
			<a href="index.php" class="btn btn-success">Blog</a>
		</div>
			<div class="wrapper row row-spacing-col">
			<?php foreach ( $get_id_post as $value ) : ?>
				<div class="col-lg-12">
					<div class="post">
						<div class="post-img">
							<a href="">
								<img src="<?php echo $value['img_url']; ?>" alt="">
							</a>
						</div>
						<div class="post-inner">
							<h4>
								<a href=""><?php echo $value['title']; ?></a>
							</h4>
							<p><?php echo $value['text']; ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			</div>
			<div class="show-comm row">
				<?php foreach ( $va_get_comments as $value ) : ?>
					<div class="col-lg-12">
						<div class="comments">
							<h4><?php echo $value['u_name']; ?></h4>
							<p><?php echo $value['comment']; ?></p>
						</div>
				</div>
				<?php endforeach; ?>
			</div>
			<div class="wrapper-form row">
				<div class="col-lg-12">
				<form action="" method="post">
						<div class="input-group row">
							<div class="col-lg-12 mb-3">
								<label for="comm_text">Comment</label>
								<textarea name="comm_text"" id="" class="form-control" rows="7"></textarea>
							</div>
							<div class="col-lg-4 mb-3">
								<label for="user-name">Name</label>
								<input type="text" class="form-control col-lg-12" name="u_name" aria-label="User name" id="user-name">
							</div>
							<div class="col-lg-4 btn-pos">
								<button type="submit" name="add_comment" class="btn btn-success">Post comment</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
