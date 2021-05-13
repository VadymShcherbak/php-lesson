<?php
/**
 * PHP lesson
 *
 * @package lessons-33
 */

ob_start();
require 'helper.php';
?>

<h1>Задачи на cookie (куки) в PHP</h1>

<h3>1.По заходу на страницу запишите в куку с именем test текст '123'. Затем обновите страницу и выведите содержимое этой куки на экран.</h3>

<?php
/**
 * Va_todo_1
 */
function va_todo_1() {
	if ( empty( $_COOKIE['test'] ) ) {
		setcookie( 'test', '123' );
	} else {
		echo $_COOKIE['test'];
	}
}

va_todo_1();
?>

<h3>2. Удалите куку с именем test.</h3>

<?php
/**
 * Va_todo_2
 */
function va_todo_2() {
	setcookie( 'test', '', time() );
}

va_todo_2();
?>

<h3>3. Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'.</h3>

<?php
/**
 * Va_todo_2
 */
function va_todo_3() {
	if ( ! isset( $_COOKIE['counter'] ) ) {
		$counter = 0;

		echo 'Вы посетили наш сайт ' . $counter . ' раз!';
	} else {
		$counter = ++$_COOKIE['counter'];

		echo 'Вы посетили наш сайт ' . $counter . ' раз!';
	}

	setcookie( 'counter', $counter );
}

va_todo_3();
?>

<h3>4.Спросите дату рождения пользователя. При следующем заходе на сайт напишите сколько дней осталось до его дня рождения. Если сегодня день рождения пользователя - поздравьте его!</h3>

<?php
/**
 * Va_todo_4
 *
 * @return str
 */
function va_todo_4() {
	if ( empty( $_COOKIE['b_day_user'] ) ) {
		?>
		<form action="" method="GET">
			<input type="date" name="b_day" id="">
			<input type="submit" name="birth_btn">
		</form>
		<?php

		if ( ! empty( $_GET['b_day'] ) ) {
			setcookie( 'b_day_user', esc_html( $_GET['b_day'] ) );
		}
	} else {
		$days = round( strtotime( $_COOKIE['b_day_user'] ) - strtotime( date( 'd-m-Y' ) ) );
		$days = intval( $days / ( 3600 * 24 ) );

		if ( 0 === $days ) {
			echo 'Happy Birdthday';
			return;
		}

		if ( 0 > $days ) {
			$days += 365;
		}
		echo $days;
	}
}

va_todo_4();
?>
