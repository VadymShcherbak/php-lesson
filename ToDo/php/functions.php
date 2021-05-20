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

	global $pdo;

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

	$add_task = $pdo->prepare( 'INSERT INTO `task` SET name = :name, date = :date' );

	$add_task->bindParam( ':name', esc_html( $_POST['n_task'] ) );
	$add_task->bindParam( ':date', esc_html( $_POST['t_date'] ) );

	if ( $add_task->execute() ) {
		va_add_notice( 'success', 'Задание успешно добавлено' );
	} else {
		va_add_notice( 'error', 'Задание не добавлено' );
	}

	va_header( 'index.php' );
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

	global $pdo;

	$del = esc_html( $_GET['delete'] );

	if ( va_check_task( $del ) === 0 ) {
		va_add_notice( 'error', 'Такого задания не существует' );
		va_header( 'index.php' );
	}

	$res = $pdo->prepare( 'DELETE FROM `task` WHERE id = :del' );
	$res->bindParam( ':del', $del );

	if ( $res->execute() ) {
		va_add_notice( 'success', 'Задание удалено' );
	} else {
		va_add_notice( 'error', 'Задание не удалено' );
	}

	va_header( 'index.php' );
}

/**
 * Сheck task.
 *
 * @param  mixed $id id.
 * @return int
 */
function va_check_task( $id ) {
	global $pdo;

	$res = $pdo->prepare( 'SELECT * FROM `task` WHERE id = :id' );

	$res->bindParam( ':id', $id );
	$res->execute();

	return $res->rowCount();
}


/**
 * Edit task.
 */
function va_edit_task() {
	if ( ! isset( $_GET['edit'] ) ) {
		return;
	}

	global $pdo;

	$id = esc_html( $_GET['edit'] );

	if ( va_check_task( $id ) === 0 ) {
		va_add_notice( 'error', 'Такого задания не существует' );
		va_header( 'index.php' );
	}

	$res = $pdo->prepare( 'SELECT * FROM `task` WHERE id = :id' );

	$res->bindParam( ':id', $id );
	$res->execute();
	return $res->fetchAll( PDO::FETCH_ASSOC );
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

	$res = $pdo->prepare( 'UPDATE `task` SET name = :task, date = :date WHERE id = :id' );

	$res->bindParam( ':id', esc_html( $_POST['edit_id'] ) );
	$res->bindParam( ':task', esc_html( $_POST['edit_text'] ) );
	$res->bindParam( ':date', esc_html( $_POST['edit_date'] ) );

	if ( $res->execute() ) {
		va_add_notice( 'success', 'Задание успешно изменено' );
	} else {
		va_add_notice( 'error', 'Задание не изменено' );
	}

	va_header( 'index.php' );
}

/**
 * Done Task.
 */
function va_done_task() {
	if ( ! isset( $_GET['checked'] ) ) {
		return;
	}

	global $pdo;

	if ( ! empty( $_GET['checked'] ) || '0' === $_GET['checked'] ) {
		$id      = esc_html( $_GET['id'] );
		$checked = esc_html( $_GET['checked'] );

		$checked = $checked ? 0 : 1;

		if ( va_check_task( $id ) === 0 ) {
			va_add_notice( 'error', 'Такого задания не существует!' );
			header( 'Location: index.php' );
			die();
		}

		$res = $pdo->prepare( 'UPDATE `task` SET done = :checked WHERE id = :id' );

		$res->bindParam( ':checked', $checked );
		$res->bindParam( ':id', $id );

		$res->execute();

		va_header( 'index.php' );
	}
}

