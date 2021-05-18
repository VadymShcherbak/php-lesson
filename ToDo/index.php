<?php
/**
 * PHP lesson
 *
 * @package ToDo
 */

require 'php/functions.php';

va_add_task();
va_save_edit();
va_del_task();

$get_arr_task = va_get_task();
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
		<?php echo va_check_add_task(); ?>
			<div class="wrapper row justify-content-center">
				<div class="col-lg-8">
					<form action="" method="post" class="mb-3">
						<div class="input-group">
							<input type="text" class="form-control col-9" name="n_task" placeholder="Enter your task" aria-label="Enter your task">
							<input type="date" class="form-control col-3" name="t_date">
							<div class="input-group-append">
								<button type="submit" class="btn btn-primary" name="add_task">Add Task</button>
							</div>
						</div>
					</form>
					<?php
					foreach ( $get_arr_task as $value ) :
						?>
						<div class="task-wrapper mb-3">
							<div class="task-add">
								<h4><?php echo $value['name']; ?></h4>
								<h6><?php echo date_format( date_create( $value['date'] ), 'd.m.Y' ); ?></h6>
							</div>
							<div class="btn-group" role="group" aria-label="Basic mixed styles example">
								<a href="?delete=<?php echo $value['id']; ?>" class="btn btn-danger"><i class="text-white far fa-trash-alt"></i></a>
								<a href="?edit=<?php echo $value['id']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
								<a href="?id=<?php echo $value['id']; ?>" class="btn btn-success"><i class="text-white fas fa-check"></i></a>
							</div>
						</div>
						<?php
						endforeach;
					?>
					<div class="edit-wrapper <?php echo isset( $_GET['edit'] ) ? 'wrapper-on' : ''; ?>">
						<div class="edit-inner">
							<form action="" method="post">
								<div class="input-group">
									<input type="hidden" name="edit_id" value="<?php echo va_edit_task( 'e_id' ); ?>">
									<input type="text" class="form-control col-9" name="edit_text" placeholder="Edit task" aria-label="Edit task" value="<?php echo va_edit_task( 'e_text' ); ?>">
									<input type="date" class="form-control col-3" name="edit_date" value="<?php echo va_edit_task( 'e_date' ); ?>">
									<div class="input-group-append">
										<button type="submit" class="btn btn-primary" name="save_edit">Save</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
