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
	return $res->fetchAll( PDO::FETCH_ASSOC );
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
function va_edit_task( $param ) {
	if ( ! isset( $_GET['edit'] ) ) {
		return;
	}

	global $pdo;

	$id      = esc_html( $_GET['edit'] );
	$t_value = '';

	$res = $pdo->prepare( 'SELECT * FROM `task` WHERE id = :id' );

	$res->bindParam( ':id', $id );
	$res->execute();
	$task_arr = $res->fetchAll( PDO::FETCH_ASSOC );

	foreach ( $task_arr as $value ) {
		$e_id   = $value['id'];
		$e_text = $value['name'];
		$e_date = $value['date'];
	}

	if ( 'e_id' === $param ) {
		return $e_id;
	} elseif ( 'e_text' === $param ) {
		return $e_text;
	} elseif ( 'e_date' === $param ) {
		return $e_date;
	}
}

/**
 * Save edit.
 *
 * @return void
 */
function va_save_edit() {
	if ( ! isset( $_POST['save_edit'] ) ) {
		return;
	}

	global $pdo;

	$e_id   = esc_html( $_POST['edit_id'] );
	$e_text = esc_html( $_POST['edit_text'] );
	$e_date = esc_html( $_POST['edit_date'] );

	$res = $pdo->prepare( 'UPDATE `task` SET name = :task, date = :date WHERE id = :id' );

	$res->bindParam( ':id', $e_id );
	$res->bindParam( ':task', $e_text );
	$res->bindParam( ':date', $e_date );

	$res->execute();

	header( 'Location: index.php' );
	die();
}

