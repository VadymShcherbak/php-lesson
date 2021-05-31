<?php
/**
 * PHP lesson
 *
 * @package Blog
 */

session_start();

require 'helper.php';

$pdo = new PDO( 'mysql:host=192.168.1.133;dbname=blog;', 'vadym', 'vadym' );

/**
 * Add img.
 *
 * @return string
 */
function va_get_img() {
	if ( ! isset( $_POST['add_post'] ) ) {
		return '';
	}

	$dest_path = '';

	if ( isset( $_FILES['uploaded_file'] ) && UPLOAD_ERR_OK === $_FILES['uploaded_file']['error'] ) {
		$file_tmp_path           = $_FILES['uploaded_file']['tmp_name'];
		$file_name               = $_FILES['uploaded_file']['name'];
		$array                   = explode( '.', $file_name );
		$file_extension          = strtolower( end( $array ) );
		$allowed_file_extensions = array( 'jpg', 'gif', 'png' );

		if ( in_array( $file_extension, $allowed_file_extensions, true ) ) {
			$dest_path = 'uploads/' . $file_name;
			move_uploaded_file( $file_tmp_path, $dest_path );
		} else {
			va_add_notice( 'error', 'Не верный формат картинки' );
		}
	}

	return $dest_path;
}


/**
 * Add post.
 */
function va_add_post() {
	if ( ! isset( $_POST['add_post'] ) ) {
		return;
	}

	global $pdo;

	$img = va_get_img();

	if ( empty( $_POST['title'] ) ) {
		va_add_notice( 'error', 'Напишите название поста! <br>' );
	}
	if ( empty( $_POST['category'] ) ) {
		va_add_notice( 'error', 'Напишите катигорию! <br>' );
	}
	if ( empty( $_POST['short_text'] ) ) {
		va_add_notice( 'error', 'Напишите краткое описание поста! <br>' );
	}
	if ( empty( $_POST['text'] ) ) {
		va_add_notice( 'error', 'Напишите описание поста! <br>' );
	}
	if ( empty( $img ) ) {
		va_add_notice( 'error', 'Загрузите картинку! <br>' );
	}

	if ( $_SESSION['notice']['error'] ) {
		return;
	}

	$add_post = $pdo->prepare( 'INSERT INTO `posts` SET title = :title, category_id = :category, img_url = :img_url, short_text = :short_text, text = :text' );

	$add_post->bindParam( ':title', esc_html( $_POST['title'] ) );
	$add_post->bindParam( ':category', esc_html( $_POST['category'] ) );
	$add_post->bindParam( ':short_text', esc_html( $_POST['short_text'] ) );
	$add_post->bindParam( ':text', esc_html( $_POST['text'] ) );
	$add_post->bindParam( ':img_url', $img );

	if ( $add_post->execute() ) {
		va_add_notice( 'success', 'Пост успешно добавлен' );
		va_header( 'index.php' );
	} else {
		va_add_notice( 'error', ' Пост не добавлен!!!' );
	}
}

va_add_post();

/**
 * Get post.
 *
 * @param  mixed $category Category.
 * @return array
 */
function va_get_post( $category = '' ) {
	global $pdo;

	if ( $category && 'All' !== $category ) {
		$res = $pdo->prepare( 'SELECT posts.*, category_t.name_category FROM `posts` LEFT JOIN category_t ON category_t.id = posts.category_id WHERE posts.category_id = :category ORDER BY id DESC' );
		$res->bindParam( ':category', $category );
	} else {
		$res = $pdo->prepare( 'SELECT posts.*, category_t.name_category FROM `posts` LEFT JOIN category_t ON category_t.id = posts.category_id ORDER BY id DESC' );
	}

	$res->execute();
	$post_cat = $res->fetchAll( PDO::FETCH_ASSOC );

	if ( empty( $post_cat ) ) {
		va_add_notice( 'error', 'Нет постов с такой категорией' );
		va_header( 'index.php' );
	}

	return $post_cat;
}

/**
 * Delete post on admin page.
 */
function va_del_post() {
	if ( ! isset( $_GET['delete'] ) ) {
		return;
	}

	global $pdo;

	$res = $pdo->prepare( 'DELETE FROM `posts` WHERE id = :del' );
	$res->bindParam( ':del', esc_html( $_GET['delete'] ) );

	if ( $res->execute() ) {
		va_add_notice( 'success', 'Пост удалён' );
	} else {
		va_add_notice( 'error', 'Пост не удалён' );
	}

	va_header( 'admin.php' );
}

/**
 * Edit post on admin page.
 *
 * @return array
 */
function va_edit_post() {
	if ( ! isset( $_GET['edit'] ) ) {
		return array();
	}

	global $pdo;

	$res = $pdo->prepare( 'SELECT * FROM `posts` WHERE id = :id' );

	$res->bindParam( ':id', esc_html( $_GET['edit'] ) );
	$res->execute();

	return $res->fetchAll( PDO::FETCH_ASSOC );
}

/**
 * Save edit post on admin page.
 */
function va_save_edit_post() {
	if ( ! isset( $_POST['save_edit_post'] ) ) {
		return;
	}

	global $pdo;

	$res = $pdo->prepare( 'UPDATE `posts` SET title = :edit_title, category_id = :edit_category, short_text = :edit_short, text = :edit_text WHERE id = :id' );

	$res->bindParam( ':id', esc_html( $_POST['edit_id'] ) );
	$res->bindParam( ':edit_title', esc_html( $_POST['edit_title'] ) );
	$res->bindParam( ':edit_category', esc_html( $_POST['edit_category'] ) );
	$res->bindParam( ':edit_short', esc_html( $_POST['edit_short_text'] ) );
	$res->bindParam( ':edit_text', esc_html( $_POST['edit_text'] ) );

	if ( $res->execute() ) {
		va_add_notice( 'success', 'Пост успешно изменён' );
	} else {
		va_add_notice( 'error', 'Пост не изменён' );
	}

	va_header( 'admin.php' );
}

/**
 * Get post by id.
 *
 *  @return array
 */
function va_get_post_by_id() {
	if ( ! isset( $_GET['id'] ) ) {
		return array();
	}

	global $pdo;

	$res = $pdo->prepare( 'SELECT posts.*, category_t.name_category FROM `posts` LEFT JOIN category_t ON category_t.id = posts.category_id WHERE posts.id = :id' );

	$res->bindParam( ':id', esc_html( $_GET['id'] ) );
	$res->execute();

	return $res->fetchAll( PDO::FETCH_ASSOC );
}

/**
 * Add post comments.
 */
function va_add_comments() {
	if ( ! isset( $_POST['add_comment'] ) ) {
		return;
	}

	global $pdo;

	if ( empty( $_POST['comm_text'] ) ) {
		va_add_notice( 'error', 'Введите коментарий! ' );
		va_header( 'post-page.php?id=' . $_POST['post-id'] . '#comments' );
	}
	if ( empty( $_POST['u_name'] ) ) {
		va_add_notice( 'error', 'Введите имя!' );
		va_header( 'post-page.php?id=' . $_POST['post-id'] . '#comments' );
	}

	if ( $_SESSION['notice']['error'] ) {
		return;
	}

	$add_com = $pdo->prepare( 'INSERT INTO `comments` SET comment = :comment, u_name =:u_name, post_id = :post_id' );

	$add_com->bindParam( ':comment', esc_html( $_POST['comm_text'] ) );
	$add_com->bindParam( ':u_name', esc_html( $_POST['u_name'] ) );
	$add_com->bindParam( ':post_id', esc_html( $_POST['post-id'] ) );

	if ( $add_com->execute() ) {
		va_add_notice( 'success', 'Коментарий успешно добавлен' );
		va_header( 'post-page.php?id=' . $_POST['post-id'] . '#comments' );
	} else {
		va_add_notice( 'error', 'Коментарий не добавлен' );
	}
}

/**
 * Get comments.
 *
 * @param  mixed $id Id from posts to comments.
 * @return array
 */
function va_get_comments( $id ) {
	global $pdo;

	$res = $pdo->prepare( 'SELECT * FROM `comments` WHERE post_id = :post_id ORDER BY id DESC' );

	$res->bindParam( ':post_id', $id );
	$res->execute();

	return $res->fetchAll( PDO::FETCH_ASSOC );
}


/**
 * Count comments
 *
 * @param  mixed $id Get id from url.
 * @return array
 */
function va_count_comments( $id ) {
	global $pdo;

	$res = $pdo->prepare( 'SELECT COUNT(*) FROM `comments` WHERE post_id = :post_id' );

	$res->bindParam( ':post_id', $id );
	$res->execute();

	return $res->fetchColumn();
}

/**
 * Add category.
 */
function va_add_category() {
	if ( ! isset( $_POST['add_category'] ) ) {
		return;
	}

	global $pdo;

	if ( empty( $_POST['w_category'] ) ) {
		va_add_notice( 'error', 'Напишите категорию' );
	}

	if ( $_SESSION['notice']['error'] ) {
		return;
	}

	$res = $pdo->prepare( 'INSERT INTO  `category_t` SET name_category = :cat_name' );

	$res->bindParam( ':cat_name', esc_html( $_POST['w_category'] ) );

	if ( $res->execute() ) {
		va_add_notice( 'success', 'Категория успешно добавлена' );
		va_header( 'create-category.php' );
	} else {
		va_add_notice( 'error', 'Категория не добавлена' );
	}
}

/**
 * Get category.
 *
 * @return array
 */
function va_get_category() {
	global $pdo;

	$res = $pdo->prepare( 'SELECT * FROM `category_t`' );
	$res->execute();

	return $res->fetchAll( PDO::FETCH_ASSOC );
}

/**
 * Count category.
 *
 * @param  mixed $id Get id categpry.
 * @return array
 */
function va_count_category( $id ) {
	global $pdo;

	$res = $pdo->prepare( 'SELECT COUNT(*) FROM `posts` WHERE category_id = :category_id' );

	$res->bindParam( ':category_id', $id );
	$res->execute();

	return $res->fetchColumn();
}

/**
 * Delete category.
 */
function va_delete_category() {
	if ( ! isset( $_GET['delete'] ) ) {
		return;
	}

	global $pdo;

	$res = $pdo->prepare( 'DELETE FROM `category_t` WHERE id = :del' );
	$res->bindParam( ':del', esc_html( $_GET['delete'] ) );

	if ( $res->execute() ) {
		va_add_notice( 'success', 'Категория удалена' );
	} else {
		va_add_notice( 'error', 'Категория не удалена' );
	}

	va_header( 'create-category.php' );
}

/**
 * Edit category.
 *
 * @return array
 */
function va_edit_category() {
	global $pdo;

	$res = $pdo->prepare( 'SELECT * FROM `category_t`' );

	$res->execute();

	return $res->fetchAll( PDO::FETCH_ASSOC );
}

/**
 * View edit category.
 *
 * @return array
 */
function va_view_edit_category() {
	if ( ! isset( $_GET['edit'] ) ) {
		return array();
	}

	global $pdo;

	$res = $pdo->prepare( 'SELECT * FROM `category_t` WHERE id = :id' );

	$res->bindParam( ':id', esc_html( $_GET['edit'] ) );
	$res->execute();

	return $res->fetch( PDO::FETCH_ASSOC );
}

/**
 * Save edit category.
 */
function va_save_edit_category() {
	if ( ! isset( $_POST['save_edit_category'] ) ) {
		return;
	}
	global $pdo;

	$res = $pdo->prepare( 'UPDATE `category_t` SET name_category = :main_category WHERE id = :id' );

	$res->bindParam( ':id', esc_html( $_POST['edit_category_id'] ) );
	$res->bindParam( ':main_category', esc_html( $_POST['edit_main_category'] ) );

	if ( empty( $_POST['edit_main_category'] ) ) {
		va_add_notice( 'error', 'Введите названия категории' );
		va_header( 'create-category.php' );
		return;
	}

	if ( $res->execute() ) {
		va_add_notice( 'success', 'Категория изменена' );
	} else {
		va_add_notice( 'error', 'Категория не изменена' );
	}

	va_header( 'create-category.php' );
}

/**
 * Verify user.
 */
function va_verify_user() {
	if ( ! isset( $_POST['sign_in'] ) ) {
		return;
	}

	$login    = esc_html( $_POST['login'] );
	$password = esc_html( $_POST['password'] );

	if ( empty( $login ) ) {
		va_add_notice( 'error', 'Введите Логин! ' );
	}
	if ( empty( $password ) ) {
		va_add_notice( 'error', 'Введите Пароль! ' );
	}

	if ( $_SESSION['notice']['error'] ) {
		return;
	}

	$user_d = va_get_users( $login );

	if ( $login === $user_d['name'] && password_verify( $password, $user_d['password'] ) ) {
		$_SESSION['login'] = $login;
		va_header( 'admin.php' );
	} else {
		va_add_notice( 'error', 'Не верний логин или пароль' );
	}

}

/**
 * Get users.
 *
 * @param  mixed $login Login.
 * @return array
 */
function va_get_users( $login ) {
	global $pdo;

	$res = $pdo->prepare( 'SELECT * FROM `users` WHERE name = :login' );

	$res->bindParam( ':login', $login );
	$res->execute();

	return $res->fetch( PDO::FETCH_ASSOC );
}

/**
 * Logout.
 */
function va_logout() {
	if ( ! isset( $_GET['action'] ) ) {
		return;
	}

	unset( $_SESSION['login'] );
	va_header( 'index.php' );
}

