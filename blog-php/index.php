<?php
/**
 * PHP lesson
 *
 * @package Blog
 */

session_start();

require 'functions.php';

$get_post      = va_get_post( $_POST['category'] );
$show_category = va_get_category();

require 'header.php';
?>
<section class="main blog-bg">
	<div class="container">
		<?php va_print_notice( 'success' ); ?>
		<?php va_print_notice( 'error' ); ?>
		<div class="blog-head">
			<h1 class="mr-3">BLOG</h1>
			<form action="" method="post" class="d-flex mr-3">
				<button type="submit" name="by_category" class="btn btn-info mr-1">By category</button>
				<select name="category" class="form-control">
				<option value="All">All</option>
					<?php foreach ( $show_category as $value ) : ?>
						<option value="<?php echo $value['id']; ?>" <?php echo ( $value['id'] === $_POST['category'] ) ? 'selected' : ''; ?>><?php echo $value['name_category']; ?></option>
					<?php endforeach; ?>
				</select>
			</form>
			<a href="page-create.php" class="btn btn-success">New Post</a>
		</div>
		<div class="wrapper row row-spacing-col">
		<?php foreach ( $get_post as $value ) : ?>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="post">
					<div class="post-img small-post-img">
						<a href="post-page.php?id=<?php echo $value['id']; ?>">
							<img src="<?php echo $value['img_url']; ?>" alt="">
						</a>
					</div>
					<div class="post-category">
						<p>
							<?php echo $value['name_category']; ?>
						</p>
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
								<a href="post-page.php?id=<?php echo $value['id'] . '#com-link'; ?>"><i class="fad fa-comments"></i></a>
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

<?php require 'footer.php'; ?>
