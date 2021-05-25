<?php
/**
 * PHP lesson
 *
 * @package Blog
 */
session_start();

require 'functions.php';

$get_post = va_get_post();

require 'header.php';
?>
<section class="main blog-bg">
	<div class="container">
		<?php va_print_notice( 'success' ); ?>
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
							<p>
								<?php echo $value['category']; ?>
							</p>
						</div>
					</div>
					<div class="post-inner">
						<h4>
							<a href="post-page.php?id=<?php echo $value['id']; ?>">
								<?php echo $value['title']; ?>
							</a>
						</h4>
						<p>
							<?php echo $value['short_text']; ?>
						</p>
						<div class="date-comm">
							<div class="date-cr">
								<p>
									<?php echo date_format( date_create( $value['date'] ), 'd.m.Y' ); ?>
								</p>
							</div>
							<div class="icon-com">
								<i class="fad fa-comments"></i>
								<div class="count_com">
									<?php echo va_count_comments( $value['id'] ); ?>
								</div>
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

<?php require 'footer.php' ?>
