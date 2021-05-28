<?php
/**
 * PHP lesson
 *
 * @package Blog
 */

require 'functions.php';

$get_post = va_get_post( esc_html( $_GET['category'] ) );
va_del_post();

require 'header.php';
?>
<section class="admin-page">
	<div class="container">
		<?php va_print_notice( 'error' ); ?>
		<?php va_print_notice( 'success' ); ?>
		<div class="admin-head">
			<h1 class="mr-3">Admin page</h1>
			<a href="index.php" class="btn btn-primary mr-3">Home</a>
			<a href="page-create.php" class="btn btn-primary mr-3">New post</a>
		</div>
		<div class="wrapper-admin">
			<div class="row">
				<?php foreach ( $get_post as $value ) : ?>
					<div class="col-lg-12 mb-3">
						<div class="post adm-post">
							<div class="row">
								<div class="col-lg-4">
									<div class="post-img adm-img">
										<img src="<?php echo $value['img_url']; ?>" alt="">
										<div class="post-category mb-0">
											<?php echo $value['name_category']; ?>
										</div>
									</div>
								</div>
								<div class="col-lg-5 d-flex align-items-center">
									<div class="post-inner">
										<h4>
												<?php echo $value['title']; ?>
										</h4>
										<p class="mb-3">
											<?php echo $value['short_text']; ?>
										</p>
										<div class="date-comm">
											<div class="date-cr">
												<p>
													<?php echo date_format( date_create( $value['date'] ), 'd.m.Y' ); ?>
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 d-flex align-items-center">
									<div class="btn-group">
										<a href="?delete=<?php echo $value['id']; ?>" class="btn btn-danger">Remove</a>
										<a href="" class="btn btn-warning">Edit</a>
										<a href="post-page.php?id=<?php echo $value['id']; ?>" class="btn btn-success">View</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

<?php require 'footer.php'; ?>

