<?php
/**
 * PHP lesson
 *
 * @package Blog
 */

require 'helper.php';

$pdo = new PDO( 'mysql:host=192.168.1.133;dbname=blog;', 'vadym', 'vadym' );

/**
 * Add img.
 */
function va_add_img() {
	if ( ! isset( $_POST['add_post'] ) ) {
		return;
	}

	if ( isset( $_FILES['uploaded_file'] ) && UPLOAD_ERR_OK === $_FILES['uploaded_file']['error'] ) {
		$file_tmp_path           = $_FILES['uploaded_file']['tmp_name'];
		$file_name               = $_FILES['uploaded_file']['name'];
		$array                   = explode( '.', $file_name );
		$file_extension          = strtolower( end( $array ) );
		$allowed_file_extensions = array( 'jpg', 'gif', 'png' );

		if ( in_array( $file_extension, $allowed_file_extensions ) ) {
			$dest_path = 'uploads/' . $file_name;
			move_uploaded_file( $file_tmp_path, $dest_path );
		} else {
			va_add_notice( 'error', 'Не верный формат картинки' );
		}
	} else {
		va_add_notice( 'error', 'Картинка не загружена! ' );
	}
	return $dest_path;
}

va_add_img();

/**
 * Add post
 */
function va_add_post() {
	if ( ! isset( $_POST['add_post'] ) ) {
		return;
	}

	global $pdo;

	if ( empty( $_POST['title'] ) || empty( $_POST['short_text'] ) || empty( $_POST['text'] ) ) {
		va_add_notice( 'error', 'Заполните пустые поля' );
		return;
	}

	if ( empty( $_POST['title'] ) ) {
		va_add_notice( 'error', 'Напишите название поста' );
		return;
	}

	if ( empty( $_POST['short_text'] ) ) {
		va_add_notice( 'error', 'Напишите краткое описание поста' );
		return;
	}

	if ( empty( $_POST['text'] ) ) {
		va_add_notice( 'error', 'Напишите описание поста' );
		return;
	}

	$add_post = $pdo->prepare( 'INSERT INTO `posts` SET title = :title, img_url = :img_url, short_text = :short_text, text = :text' );

	$add_post->bindParam( ':title', esc_html( $_POST['title'] ) );
	$add_post->bindParam( ':short_text', esc_html( $_POST['short_text'] ) );
	$add_post->bindParam( ':text', esc_html( $_POST['text'] ) );
	$add_post->bindParam( ':img_url', va_add_img() );

	if ( $add_post->execute() ) {
		va_add_notice( 'success', 'Пост успешно добавлен' );
	} else {
		va_add_notice( 'error', 'Пост не добавлен' );
	}

	va_header( 'index.php' );
}

va_add_post();
