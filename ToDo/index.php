<?php
/**
 * PHP lesson
 *
 * @package ToDo
 */

require 'php/functions.php';

va_add_task();
va_del_task();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
	<title>Task</title>
</head>
<body>
	<div class="main-section">
		<div class="container">
			<div class="wrapper row justify-content-center">
				<div class="col-lg-8">
					<form action="" method="post" class="mb-3">
						<div class="input-group">
							<input type="text" class="form-control col-9" name="n_task" id="">
							<input type="date" class="form-control col-3" name="t_date" id="">
							<div class="input-group-append">
								<button type="submit" class="btn btn-primary" name="add_task">Add Task</button>
							</div>
						</div>
					</form>
					<?php va_get_task(); ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
