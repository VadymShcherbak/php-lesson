<?php
require 'helper.php';
?>

<h1>Задачи на формы в PHP</h1>

<h3>1. Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Выведите на экран фразу 'Привет, %Имя%'.</h3>

<form action="" method="GET">
	<input type="text" name="name_1">
	<input type="submit">
</form>

<?php
/**
 * Va_todo_1
 *
 * @return void
 */
function va_todo_1() {
	$name = '';

	if ( ! empty( $_GET['name_1'] ) ) {
		$name = esc_html( $_GET['name_1'] );

		echo 'Привет ' . $name;
	}
}

va_todo_1();
?>

<h3>2. Спросите у пользователя имя, возраст, а также попросите его ввести сообщение (его сделайте в textarea). Выведите эти данные на экран в формате, приведенном под данной задачей. Позаботьтесь о том, чтобы пользователь не мог вводить теги (просто удаляйте их) и таким образом сломать сайт.</h3>

<form action="" method="GET">
	<input type="text" name="name_2">
	<input type="text" name="age_2">
	<textarea name="text_2"></textarea>
	<input type="submit" name="submit">
</form>

<?php
/**
 * Va_todo_2
 *
 * @return void
 */
function va_todo_2() {

	if ( ! empty( $_GET['name_2'] ) && ! empty( $_GET['age_2'] ) && ! empty( $_GET['text_2'] ) ) {
		$name = esc_html( $_GET['name_2'] );
		$age  = esc_html( $_GET['age_2'] );
		$text = esc_html( $_GET['text_2'] );

		echo 'Привет ,' . $name . ', ' . $age . 'лет <br> Твое сообщение: ' . $text;
	}
}

va_todo_2();
?>

<h3>3.Спросите возраст пользователя. Если форма была отправлена и введен возраст, то выведите его на экран, а форму уберите. Если же форма не была отправлена (это будет при первом заходе на страницу) - просто покажите ее</h3>

<?php
/**
 * Va_todo_3
 *
 * @return void
 */
function va_todo_3() {

	if ( empty( $_GET['age_3'] ) ) {
		?>

		<form action="" method="GET">
			<input type="text" name="age_3">
			<input type="submit">
		</form>

		<?php
	}
	if ( ! empty( $_GET['age_3'] ) ) {
		$age = htmlspecialchars( trim( $_GET['age_3'] ) );

		echo 'Вааш возраст: ' . $age . ' года';
	}
}

va_todo_3();
?>

<h3>4. Спросите у пользователя логин и пароль (в браузере должен быть звездочками). Сравните их с логином $login и паролем $pass, хранящихся в файле. Если все верно - выведите 'Доступ разрешен!', в противном случае - 'Доступ запрещен!'. Сделайте так, чтобы скрипт обрезал концевые пробелы в строках, которые ввел пользователь. </h3>

<form action="" method="GET">
	<input type="text" name="login">
	<input type="password" name="pass">
	<input type="submit" name="submit">
</form>

<?php
/**
 * Va_todo_4
 *
 * @return void
 */
function va_todo_4() {

	if ( ! empty( $_GET['submit'] ) ) {
		$login     = 'user';
		$pass      = '123456';
		$formlogin = esc_html( $_GET['login'] );
		$formpass  = esc_html( $_GET['pass'] );

		if ( $login === $formlogin && $pass === $formpass ) {
			echo 'Доступ разрешен';
		} else {
			echo 'Доступ запрещён';
		}
	}
}

va_todo_4();
?>

<h3>5. Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Сделайте так, чтобы после отправки формы значения ее полей не пропадали.</h3>

<form action="" method="GET">
	<input type="text" name="name_5" value="<?php echo ! empty( $_GET['name_5'] ) ? $_GET['name_5'] : ''; ?>">
	<input type="submit" name="submit">
</form>

<?php
/**
 * Va_todo_5
 *
 * @return void
 */
function va_todo_5() {

	if ( ! empty( $_GET['name_5'] ) ) {
		$name = esc_html( trim( $_GET['name_5'] ) );

		echo $name;
	}
}

va_todo_5();
?>

<h3>6. Спросите у пользователя имя, а также попросите его ввести сообщение (textarea). Сделайте так, чтобы после отправки формы значения его полей не пропадали.</h3>

<form action="" method="GET">
	<input type="text" name="name_6" value="<?php echo ! empty( $_GET['name_6'] ) ? $_GET['name_6'] : ''; ?>">
	<textarea name="text_6" value="<?php echo ! empty( $_GET['text_6'] ) ? $_GET['text_6'] : ''; ?>"></textarea>
	<input type="submit" name="submit">
</form>

<?php
/**
 * Va_todo_6
 *
 * @return void
 */
function va_todo_6() {

	if ( ! empty( $_GET['name_6'] ) ) {
		$name = esc_html( trim( $_GET['name_6'] ) );
		$text = esc_html( trim( $_GET['text_6'] ) );

		echo $name . ':' . $text;
	}
}

va_todo_6();
?>
