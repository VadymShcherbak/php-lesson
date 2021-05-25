<?php
/**
 * PHP lesson
 *
 * @package Blog
 */

session_start();

require 'functions.php';

va_add_category();

require 'header.php';
?>

<section class="main bg-img">
	<div class="container">
	<?php va_print_notice( 'error' ); ?>
		<div class="wrapper row justify-content-center">
			<div class="col-lg-10">
				<form action="" method="post" class="form-style mb-3">
					<div class="input-group row">
						<div class="col-lg-12 mb-3">
							<input type="text" class="form-control" name="w_category" value="<?php echo $_POST['name_category'] ?>" placeholder="write a category" aria-label="writte a cetegory">
						</div>
						<div class="input-group col-lg-4">
							<button type="submit" class="btn btn-primary" name="add_category">Add category</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<?php require 'footer.php' ?>




