<?php
/**
 * PHP lesson
 *
 * @package ToDo
 */

require 'helper.php';

$pdo = new PDO( 'mysql:host=192.168.1.133;dbname=todo;', 'vadym', 'vadym' );

/**
 * Add task.
 */
function va_add_task() {
	if ( ! isset( $_POST['add_task'] ) ) {
		return;
	}
	if ( empty( $_POST['n_task'] ) && empty( $_POST['t_date'] ) ) {
		va_add_notice( 'error', 'Введите задание и дату!' );
		return;

	} elseif ( empty( $_POST['n_task'] ) ) {
		va_add_notice( 'error', 'Введите задание!' );
		return;

	} elseif ( empty( $_POST['t_date'] ) ) {
		va_add_notice( 'error', 'Введите дату!' );
		return;

	} elseif ( time() >= strtotime( $_POST['t_date'] ) ) {
		va_add_notice( 'error', 'Дедлайн должен быть в будущем!' );
		return;
	}

	global $pdo;

	$done = 0;

	$add_task = $pdo->prepare( 'INSERT INTO `task` SET name = :name, date = :date, done = :done' );

	$add_task->bindParam( ':name', esc_html( $_POST['n_task'] ) );
	$add_task->bindParam( ':date', esc_html( $_POST['t_date'] ) );
	$add_task->bindParam( ':done', $done );

	if ( $add_task->execute() ) {
		va_add_notice( 'success', 'Задание успешно добавлено' );
	} else {
		va_add_notice( 'error', 'Задание не добавлено' );
	}

	header( 'Location: index.php' );
	die();
}

/**
 * Get task.
 */
function va_get_task() {
	global $pdo;

	$res = $pdo->prepare( 'SELECT * FROM `task` ORDER BY id DESC' );
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
	$del = esc_html( $_GET['delete'] );

	if ( va_check_task( $del ) === 0 ) {
		va_add_notice( 'error', 'Такого задания не существует' );
		header( 'Location: index.php' );
		die();
	}

	global $pdo;

	$res = $pdo->prepare( 'DELETE FROM `task` WHERE id = :del' );
	$res->bindParam( ':del', $del );

	$res->execute();

	if ( $res->execute() ) {
		va_add_notice( 'success', 'Задание удалено' );
	} else {
		va_add_notice( 'error', 'Задание не удалено' );
	}

	header( 'Location: index.php' );
	die();
}

/**
 * Сheck task.
 *
 * @param  mixed $id = id.
 * @return boolean
 */
function va_check_task( $id ) {
	global $pdo;

	$res = $pdo->prepare( 'SELECT * FROM `task` WHERE id = :id' );
	$res->bindParam( ':id', $id );

	$res->execute();

	return $res->rowCount();
}


/**
 * Edit task
 *
 * @param  mixed $param = type.
 * @return void
 */
function va_edit_task( $param ) {
	if ( ! isset( $_GET['edit'] ) ) {
		return;
	}

	global $pdo;

	$id      = esc_html( $_GET['edit'] );
	$t_value = '';

	if ( va_check_task( $id ) === 0 ) {
		va_add_notice( 'error', 'Такого задания не существует' );
		header( 'Location: index.php' );
		die();
	}

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

	if ( $res->execute() ) {
		va_add_notice( 'success', 'Задание успешно изменено' );
	} else {
		va_add_notice( 'error', 'Задание не изменено' );
	}

	header( 'Location: index.php' );
	die();
}

/**
 * Done task.
 */
function va_done_task() {
	if ( ! empty( $_GET['checked'] ) || '0' === $_GET['checked'] ) {
		$id      = esc_html( $_GET['id'] );
		$checked = esc_html( $_GET['checked'] );

		$checked = $checked ? 0 : 1;

		global $pdo;

		if ( va_check_task( $id ) === 0 ) {
			va_add_notice( 'error', 'Такого задания не существует' );
			header( 'Location: index.php' );
			die();
		}

		$res = $pdo->prepare( 'UPDATE `task` SET done = :checked WHERE id = :id' );

		$res->bindParam( ':checked', $checked );
		$res->bindParam( ':id', $id );

		$res->execute();

		header( 'Location: index.php' );
		die();
	}
}

