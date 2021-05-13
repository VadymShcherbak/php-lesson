<?php
session_start();
?>

<?php
/**
 * PHP lesson
 *
 * @package lessons-16
 */

require 'helper.php';
?>

<h1>Задачи на сессии PHP</h1>

<h3>1. По заходу на страницу запишите в сессию текст 'test'. Затем обновите страницу и выведите содержимое сессии на экран.</h3>

<?php
/**
 * Va_todo_1
 */
function va_todo_1() {
	if ( empty( $_SESSION['test'] ) ) {
		$_SESSION['test'] = 'test';
	} else {
		echo $_SESSION['test'];
		unset( $_SESSION['test'] );
	}
}

va_todo_1();
?>

<h3>2. Пусть у вас есть две страницы сайта. Запишите на первой странице что-нибудь в сессию, а затем выведите это при заходе на другую страницу.</h3>

<form action="" method="GET">
	<input type="text" name="text_2">
	<input type="submit" name="set_text_2">
</form>
<a href="page2.php"> Page 2</a>

<?php
/**
 * Va_todo_2
 *
 * @return void
 */
function va_todo_2() {
	if ( ! isset( $_GET['set_text_2'] ) ) {
		return;
	}

	if ( ! empty( $_GET['text_2'] ) ) {
		$_SESSION['set_text_2'] = esc_html( $_GET['text_2'] );
	}
}
va_todo_2();
?>

<h3>3. Сделайте счетчик обновления страницы пользователем. Данные храните в сессии. Скрипт должен выводить на экран количество обновлений. При первом заходе на страницу он должен вывести сообщение о том, что вы еще не обновляли страницу.</h3>

<?php
/**
 * Va_todo_3
 *
 * @return void
 */
function va_todo_3() {
	if ( ! isset( $_SESSION['counter'] ) ) {
		$_SESSION['counter'] = 1;
	} else {
		$_SESSION['counter'] = $_SESSION['counter'] + 1;
	}

	echo 'Вы обновили эту страницу ' . $_SESSION['counter'] . ' раз!';
}
va_todo_3();
?>

<h3>4. Сделайте две страницы: index.php и test.php. При заходе на index.php спросите с помощью формы страну пользователя, запишите ее в сессию (форма при этом должна отправится на эту же страницу). Пусть затем пользователь зайдет на страницу test.php - выведите там страну пользователя.</h3>

<form action="" method="GET">
	<input type="text" name="city_4">
	<input type="submit" name="set_city_4">
</form>
<a href="page2.php"> Page 2</a>

<?php
/**
 * Va_todo_4
 *
 * @return void
 */
function va_todo_4() {
	if ( ! isset( $_GET['set_city_4'] ) ) {
		return;
	}

	if ( ! empty( $_GET['city_4'] ) ) {
		$_SESSION['set_city_4'] = esc_html( $_GET['city_4'] );
	}
}
va_todo_4();
?>

<h3>5. Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.</h3>

<?php
/**
 * Va_todo_5
 */
function va_todo_5() {
	if ( empty( $_SESSION['time'] ) ) {
		$_SESSION['time'] = time();
	}

	echo time() - $_SESSION['time'];
}
va_todo_5();
?>

<h3>6. Спросите у пользователя email с помощью формы. Затем сделайте так, чтобы в другой форме (поля: имя, фамилия, пароль, email) при ее открытии поле email было автоматически заполнено</h3>

<?php
/**
 * Va_todo_6
 */
function va_todo_6() {
	if ( empty( $_SESSION['email_t'] ) ) {
		?>

		<form action="" method="GET">
			<input type="email" name="email_6">
			<input type="submit" name="btn_6">
		</form>

		<?php
		if ( ! empty( $_GET['email_6'] ) ) {
			$_SESSION['email_t'] = esc_html( $_GET['email_6'] );
		}
	}
}
va_todo_6();
?>

<form action="" method="GET">
	<input type="text" placeholder="Name"><br><br>
	<input type="text" placeholder="Surname"><br><br>
	<input type="password" placeholder="Password"><br><br>
	<input type="email" placeholder="Email" value="<?php echo $_SESSION['email_t']; ?>"><br><br>
</form>

