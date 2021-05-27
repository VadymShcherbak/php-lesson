<?php
/**
 * PHP lesson
 *
 * @package Blog
 */

require 'functions.php';

va_verify_user();

require 'header.php';
?>

<section class="sign">
	<div class="container">
		<div class="sign-wrapper">
			<?php va_print_notice( 'error' ); ?>
			<?php va_print_notice( 'success' ); ?>
			<form action="" method="post">
				<div class="row input-group">
					<div class="col-lg-4">
						<label for="login">Login</label>
						<input type="text" name="login" class="form-control" aria-label="user name">
					</div>
					<div class="col-lg-4">
						<label for="user_password">Password</label>
						<input type="password" name="password" class="form-control" aria-label="user password">
					</div>
					<div class="col-lg-4 d-flex align-items-end">
						<button type="submit" name="sign_in" class="btn btn-success">Sign in</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<?php require 'footer.php'; ?>
