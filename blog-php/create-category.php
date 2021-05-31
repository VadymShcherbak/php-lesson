<?php
/**
 * PHP lesson
 *
 * @package Blog
 */

require 'functions.php';

va_add_category();
va_delete_category();
va_edit_category();
va_save_edit_category();
$change_category    = va_get_category();
$view_edit_category = va_view_edit_category();

// ar( $change_category );

require 'header.php';
?>

<section class="main bg-img">
	<div class="container">
		<?php va_print_notice( 'error' ); ?>
		<?php va_print_notice( 'success' ); ?>
		<div class="wrapper row">
			<div class="col-lg-12">
				<h1 class="create-head">Create new category</h1>
				<form action="" method="post" class="form-style mb-3">
					<div class="input-group row">
						<div class="col-lg-12 mb-3">
							<input type="text" class="form-control" name="w_category" value="<?php echo $_POST['name_category']; ?>" placeholder="write a category" aria-label="writte a cetegory">
						</div>
						<div class="input-group col-lg-4">
							<button type="submit" class="btn btn-primary" name="add_category">Add category</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="created-categories">
			<div class="row">
				<?php foreach ( $change_category as $value ) : ?>
					<div class="col-lg-6">
						<div class="category-wrapper mb-3">
							<div class="category-text">
								<h4>
									<?php echo $value['name_category']; ?>
								</h4>
							</div>
							<div class="category-btn">
								<a href="?delete=<?php echo $value['id']; ?>" class="btn btn-danger">
									<i class="fas fa-trash-alt"></i>
								</a>
								<a href="?edit=<?php echo $value['id']; ?>" class="btn btn-warning">
									<i class="far fa-edit"></i>
								</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				<div class="wrapper-edit <?php echo isset( $_GET['edit'] ) ? 'wrapper-on' : ''; ?>">
					<a href="create-category.php" class="close-edit"></a>
					<?php va_print_notice( 'error' ); ?>
					<form action="" method="post" class="form-style main-col">
						<div class="input-group">
							<input type="hidden" name="edit_category_id" value="<?php echo $view_edit_category['id']; ?>">
							<input type="text" name="edit_main_category" class="form-control" aria-label="Edit cetegory" value="<?php echo $view_edit_category['name_category']; ?>">
							<div class="input-group-append">
								<button type="submit" class="btn btn-success" name="save_edit_category">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php require 'footer.php'; ?>
