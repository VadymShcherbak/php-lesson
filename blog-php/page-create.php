<?php
/**
 * PHP lesson
 *
 * @package Blog
 */

require 'functions.php';
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
	<title>Create blog post</title>
</head>
<body>
	<section class="main bg-img">
		<div class="container">
		<?php va_print_notice( 'error' ); ?>
			<div class="wrapper row justify-content-center">
				<div class="col-lg-10">
					<form action="" method="post" enctype = "multipart/form-data" class="form-style mb-3">
						<div class="input-group row">
							<div class="col-lg-12 mb-3">
								<input type="text" class="form-control col-lg-12" name="title" placeholder="Enter title" aria-label="Enter title">
							</div>
							<div class="col-lg-12 mb-3">
								<input type="text" class="form-control col-lg-12" name="short_text" placeholder="short description" aria-label="description">
							</div>
							<div class="col-lg-12 mb-3">
								<textarea name="text" class="form-control col-lg-12" placeholder="write a description ..."></textarea>
							</div>
							<div class="col-lg-12 mb-3">
								<input type="file" name="uploaded_file" class="text-color" accept="image/jpeg,image/png">
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
</body>
</html>
