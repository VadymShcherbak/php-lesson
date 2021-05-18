<?php
/**
 * PHP lesson
 *
 * @package ToDo
 */

require 'helper.php';

$pdo = new PDO( 'mysql:host=192.168.1.133;dbname=todo;', 'vadym', 'vadym' );

/**
 * Check add task.
 */
function va_check_add_task() {
	if ( ! isset( $_POST['add_task'] ) ) {
		return;
	}
	?>
	<?php if ( empty( $_POST['n_task'] ) && empty( $_POST['t_date'] ) ) : ?>

	<div class="alert alert-danger mt-3" role="alert">
		Введите задание и дату!
	</div>

	<?php elseif ( empty( $_POST['n_task'] ) ) : ?>

		<div class="alert alert-danger mt-3" role="alert">
			Введите задание!
		</div>

	<?php elseif ( empty( $_POST['t_date'] ) ) : ?>

		<div class="alert alert-danger mt-3" role="alert">
			Введите дату!
		</div>

	<?php elseif ( time() >= strtotime( $_POST['t_date'] ) ) : ?>

		<div class="alert alert-danger mt-3" role="alert">
			Дедлайн должен быть в будущем!
		</div>

	<?php endif ?>
	<?php
}

/**
 * Add task.
 */
function va_add_task() {
	if ( ! isset( $_POST['add_task'] ) || empty( $_POST['n_task'] ) || empty( $_POST['t_date'] ) || time() >= strtotime( $_POST['t_date'] ) ) {
		return;
	}

	global $pdo;

	$done = 0;

	$add_task = $pdo->prepare( 'INSERT INTO `task` SET name = :name, date = :date, done = :done' );

	$add_task->bindParam( ':name', esc_html( $_POST['n_task'] ) );
	$add_task->bindParam( ':date', esc_html( $_POST['t_date'] ) );
	$add_task->bindParam( ':done', $done );

	$add_task->execute();

	header( 'Location: index.php' );
	die();
}

/**
 * Get_task.
 */
function va_get_task() {
	global $pdo;

	$res = $pdo->prepare( 'SELECT * FROM `task`' );
	$res->execute();
	$t_arr = $res->fetchAll( PDO::FETCH_ASSOC );

	foreach ( $t_arr as $value ) :
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
}

/**
 * Delete task.
 */
function va_del_task() {
	if ( ! isset( $_GET['delete'] ) ) {
		return;
	}

	global $pdo;

	$del = esc_html( $_GET['delete'] );
	$res = $pdo->prepare( 'DELETE FROM `task` WHERE id = :del' );
	$res->bindParam( ':del', $del );

	$res->execute();

	header( 'Location: index.php' );
	die();
}

/**
 * Edit task.
 */
function va_edit_task() {
	if ( ! isset( $_GET['edit'] ) ) {
		return;
	}

	global $pdo;

	$id      = esc_html( $_GET['edit'] );
	$t_value = '';

	$res = $pdo->prepare( 'SELECT * FROM `task` WHERE id = :id' );
	$res->bindParam( ':id', $id );
	$res->execute();
}

