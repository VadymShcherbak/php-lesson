<?php
/**
 * PHP lesson
 *
 * @package Blog
 */

require 'functions.php';

va_add_comments();

$get_id_post     = va_get_post_by_id();
$va_get_comments = va_get_comments( $_GET['id'] );

require 'header.php';

?>
<section class="main post-bg">
	<div class="container">
		<div class="blog-head big-p-head">
			<h1>POST</h1>
			<a href="index.php" class="btn btn-success">Blog</a>
		</div>
		<div class="wrapper row row-spacing-col">
			<?php foreach ( $get_id_post as $value ) : ?>
				<div class="col-lg-12">
					<div class="post">
						<div class="post-img">
							<img src="<?php echo $value['img_url']; ?>" alt="post-image">
						</div>
						<div class="post-category big-post-cat">
							<p>
								<?php echo $value['name_category']; ?>
							</p>
						</div>
						<div class="post-inner">
							<h4>
								<?php echo $value['title']; ?>
							</h4>
							<p>
								<?php echo $value['text']; ?>
							</p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="show-comm row" id="comments">
			<?php foreach ( $va_get_comments as $value ) : ?>
				<div class="col-lg-12">
					<div class="comments" id="com-link">
						<h4>
							<?php echo $value['u_name']; ?>
						</h4>
						<p>
							<?php echo date_format( date_create( $value['date'] ), 'd.m.Y' ); ?>
						</p>
						<p>
							<?php echo $value['comment']; ?>
						</p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="wrapper-form row">
			<div class="col-lg-12">
				<?php va_print_notice( 'error' ); ?>
				<?php va_print_notice( 'success' ); ?>
					<form action="" method="post">
						<div class="input-group row">
							<div class="col-lg-12 mb-3">
								<label for="comm-text">Comment</label>
								<textarea name="comm_text" id="comm-text" class="form-control" rows="7"></textarea>
							</div>
							<div class="col-lg-4 mb-3">
								<label for="user-name">Name</label>
								<input type="text" class="form-control col-lg-12" name="u_name" aria-label="User name" id="user-name">
								<input type="hidden" name="post-id" value="<?php echo esc_html( $_GET['id'] ); ?>">
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
<?php require 'footer.php' ?>

