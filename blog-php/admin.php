<?php
/**
 * PHP lesson
 *
 * @package Blog
 */

require 'functions.php';

if ( ! $_SESSION['login'] ) {
	va_header( 'sign-in.php' );
}

$get_post      = va_get_post( esc_html( $_GET['category'] ) );
$show_category = va_get_category();
$edit_post     = va_edit_post();

va_save_edit_post();
va_del_post();
va_logout();

require 'header.php';
?>
<section class="admin-page bg-img">
	<div class="container">
		<?php va_print_notice( 'error' ); ?>
		<?php va_print_notice( 'success' ); ?>
		<div class="admin-head">
			<h1 class="mr-3">Admin page</h1>
			<a href="index.php" class="btn btn-primary mr-3">Home</a>
			<a href="page-create.php" class="btn btn-primary mr-3">New post</a>
			<a href="create-category.php" class="btn btn-primary mr-3">Create new category</a>
			<a href="?action=logout" class="btn btn-warning">Logout</a>
		</div>
		<div class="wrapper-admin">
			<div class="row">
				<?php foreach ( $get_post as $value ) : ?>
					<div class="col-lg-12 mb-3">
						<div class="post adm-post">
							<div class="row">
								<div class="col-lg-4">
									<div class="post-img adm-img">
										<img src="<?php echo $value['img_url']; ?>" alt="img">
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
										<a href="?edit=<?php echo $value['id']; ?>" class="btn btn-warning">Edit</a>
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
	<div class="wrapper-edit row <?php echo isset( $_GET['edit'] ) ? 'wrapper-on' : ''; ?>">
		<a href="admin.php" class="close-edit"></a>
		<div class="col-lg-7 main-col">
			<form action="" method="post" enctype = "multipart/form-data" class="form-style admin-form mb-3">
				<div class="input-group row">
					<input type="hidden" name="edit_id" value="<?php echo $edit_post[0]['id']; ?>">
					<div class="col-lg-12 mb-3">
						<input type="text" class="form-control" name="edit_title" value="<?php echo $edit_post[0]['title']; ?>"aria-label="Edit title">
					</div>
					<div class="col-lg-12 mb-3 d-flex">
							<select name="edit_category" class="form-control">
								<?php foreach ( $show_category as $value ) : ?>
									<option value="<?php echo $value['id']; ?>"<?php echo $value['id'] === $edit_post[0]['category_id'] ? 'selected' : ''; ?>><?php echo $value['name_category']; ?></option>
								<?php endforeach; ?>
							</select>
					</div>
					<div class="col-lg-12 mb-3">
						<input type="text" class="form-control" name="edit_short_text" value="<?php echo $edit_post[0]['short_text']; ?>" aria-label=" Edit short description">
					</div>
					<div class="col-lg-12 mb-3">
						<textarea name="edit_text" class="form-control" placeholder="write a description ..." aria-label="write a description"><?php echo $edit_post[0]['text']; ?></textarea>
					</div>
					<div class="col-lg-12 mb-3">
						<input type="file" name="uploaded_file" accept="image/jpeg,image/png" aria-label="add image">
					</div>
					<div class="input-group col-lg-4">
						<button type="submit" class="btn btn-success" name="save_edit_post">Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<?php require 'footer.php'; ?>
