<?php
/**
 * PHP lesson
 *
 * @package Blog
 */

require 'functions.php';
require 'header.php';

$show_category = va_get_category();
?>

<section class="main bg-img">
	<div class="container">
	<?php va_print_notice( 'error' ); ?>
		<div class="wrapper row justify-content-center">
			<div class="col-lg-10">
				<form action="" method="post" enctype = "multipart/form-data" class="form-style mb-3">
					<div class="input-group row">
						<div class="col-lg-12 mb-3">
							<input type="text" class="form-control" name="title" value="<?php echo $_POST['title']; ?>" placeholder="Enter title" aria-label="Enter title">
						</div>
						<div class="col-lg-12 mb-3 d-flex">
								<select name="category" class="form-control">
									<?php foreach ( $show_category as $value ) : ?>
										<option value="<?php echo $value['id']; ?>"><?php echo $value['name_category']; ?></option>
									<?php endforeach; ?>
								</select>
								<a href="create-category.php" class="btn btn-success mb-2 ml-3">Create new category</a>
						</div>
						<div class="col-lg-12 mb-3">
							<input type="text" class="form-control" name="short_text" value="<?php echo $_POST['short_text']; ?>" placeholder="short description" aria-label="description">
						</div>
						<div class="col-lg-12 mb-3">
							<textarea name="text" class="form-control" placeholder="write a description ..." aria-label="write a description"><?php echo $_POST['text']; ?></textarea>
						</div>
						<div class="col-lg-12 mb-3">
							<input type="file" name="uploaded_file" class="text-color" accept="image/jpeg,image/png" aria-label="add image">
						</div>
						<div class="input-group col-lg-4">
							<button type="submit" class="btn btn-primary" name="add_post">Add Post</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<?php require 'footer.php'; ?>
