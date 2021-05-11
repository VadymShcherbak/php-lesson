<?php
/**
 * PHP lesson
 *
 * @package lessons-16
 */

require 'helper.php';
?>

<h1>Задачи на продвинутую работу с формами в PHP</h1>

<h3>1. Спросите у пользователя имя с помощью формы. Сделайте чекбокс: если он отмечен, то поприветствуйте пользователя, если не отмечен - попрощайтесь с пользователем.</h3>

<form action="" method="GET">
	<input type="text" name="name_1"><br><br>
	<input type="checkbox" name="hello_1" value="0"><br><br>
	<input type="submit" name="submit_1">
</form>

<?php
/**
 * Va_todo_1
 *
 * @return void
 */
function va_todo_1() {
	if ( ! isset( $_GET['submit_1'] ) ) {
		return;
	}

	if ( ! empty( $_GET['name_1'] ) ) {
		$name = esc_html( $_GET['name_1'] );

		if ( isset( $_GET['hello_1'] ) ) {
			echo 'Hello ' . $name;
		} elseif ( ! isset( $_GET['hello_1'] ) ) {
			echo 'Goodbaye ' . $name;
		}
	} else {
		echo 'Enter your name';
	}
}

va_todo_1();
?>

<h3>2.Спросите у пользователя, какие из языков он знает: html, css, php, javascript. Выведите на экран те языки, которые знает пользователь.</h3>

<form action="" method="GET">
	<input type="checkbox" name="lang[]" value="html"> html <br>
	<input type="checkbox" name="lang[]" value="css"> css <br>
	<input type="checkbox" name="lang[]" value="php"> php <br>
	<input type="checkbox" name="lang[]" value="javascript"> javascript <br><br>
	<input type="submit" name="submit_2"><br>
</form>

<?php
/**
 * Va_todo_2
 *
 * @return void
 */
function va_todo_2() {
	if ( ! isset( $_GET['submit_2'] ) ) {
		return;
	}

	if ( isset( $_GET['lang'] ) ) {
		echo 'Вы знаете ' . esc_html( implode( ', ', $_GET['lang'] ) );
	}
}

va_todo_2();
?>

<h3>3. Спросите у пользователя знает ли он PHP с помощью двух radio-кнопок. Выведите результат на экран. Сделайте так, чтобы по умолчанию один из вариантов был уже отмечен. </h3>

<form action="" method="Get">
	<p>Вы знаете PHP?</p>
	<p>да<input type="radio" name="radio_3" value="1"></p>
	<p>нет<input type="radio" name="radio_3" value="0"></p>
	<input type="submit" name="submit_3">
</form>

<?php
/**
 * Va_todo_3
 *
 * @return void
 */
function va_todo_3() {
	if ( empty( $_GET['submit_3'] ) ) {
		return;
	}

	if ( isset( $_GET['radio_3'] ) ) {
		$ans = esc_html( $_GET['radio_3'] );

		if ( '1' === $ans ) {
			echo ' Вы знаете PHP!';
		} elseif ( '0' === $ans ) {
			echo ' Вы не знаете PHP';
		}
	}
}

va_todo_3();
?>

<h3>4. Спросите у пользователя его возраст с помощью нескольких radio-кнопок. Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30.</h3>

<form action="" method="Get">
	<p>Сколько вам лет ?</p>
	<input type="radio" name="radio_4" value="1">менее 20 лет<br>
	<input type="radio" name="radio_4" value="2">20-25 лет<br>
	<input type="radio" name="radio_4" value="3">26-30 лет<br>
	<input type="radio" name="radio_4" value="4">более 30<br>
	<input type="submit" name="submit_4">
</form>

<?php
/**
 * Va_todo_4
 *
 * @return void
 */
function va_todo_4() {
	if ( empty( $_GET['submit_4'] ) ) {
		return;
	}

	if ( isset( $_GET['radio_4'] ) ) {
		$year = esc_html( $_GET['radio_4'] );

		if ( '1' === $year ) {
			echo ' Вам менее 20 лет';
		} elseif ( '2' === $year ) {
			echo ' Вам 20-25 лет';
		} elseif ( '3' === $year ) {
			echo ' Вам 26-30 лет';
		} elseif ( '4' === $year ) {
			echo ' Вам более 30';
		}
	}
}

va_todo_4();
?>

<h3>5.Спросите у пользователя его возраст с помощью select. Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30.</h3>

<form action="" method="GET">
	<label for="user_age_2">Сколько вам лет ?</label><br>

	<select name="select_5">
		<option value="1">Вам менее 20лет</option>
		<option value="2">Вам 20-25лет</option>
		<option value="3">Вам 26-30лет</option>
		<option value="4">Вам более 30лет</option>
	</select>

	<input type="submit" name="submit_5" value="submit">
</form>

<?php
/**
 * Va_todo_5
 *
 * @return void
 */
function va_todo_5() {
	if ( empty( $_GET['submit_5'] ) ) {
		return;
	}

	if ( isset( $_GET['select_5'] ) ) {
		$year = esc_html( $_GET['select_5'] );

		if ( '1' === $year ) {
			echo ' Вам менее 20 лет';
		} elseif ( '2' === $year ) {
			echo ' Вам 20-25 лет';
		} elseif ( '3' === $year ) {
			echo ' Вам 26-30 лет';
		} elseif ( '4' === $year ) {
			echo ' Вам более 30';
		}
	}
}

va_todo_5();
?>

<h3>6. Спросите у пользователя с помощью мультиселекта, какие из языков он знает: html, css, php, javascript. Выведите на экран те языки, которые знает пользователь.</h3>

<form action="" method="GET">
	<select name="select_6[]" multiple>
		<option value="html">html</option>
		<option value="css">css</option>
		<option value="php">php</option>
		<option value="javascript">javascript</option>
	</select>
	<input type="submit" name="submit_6">
</form>

<?php
/**
 * Va_todo_6
 *
 * @return void
 */
function va_todo_6() {
	if ( empty( $_GET['submit_6'] ) ) {
		return;
	}

	if ( ! empty( $_GET['select_6'] ) ) {
		echo 'Вы знаете ' . esc_html( implode( ', ', $_GET['select_6'] ) );
	}
}

va_todo_6();
?>

<h3>7. Сделайте функцию, которая создает обычный текстовый инпут. Функция должна иметь следующие параметры: type, name, value.</h3>

<form action="" method="GET">
	<?php echo va_input_7( 'text', 'simple_input', 'Your Name' ); ?>
	<input type="submit" value="submit">
</form>

<?php
/**
 * Va_todo_7
 *
 * @param  mixed $type = input type.
 * @param  mixed $name = name.
 * @param  mixed $value = value.
 */
function va_input_7( $type, $name, $value ) {
	?>
	<input type="<?php echo $type; ?>" name="<?php echo $name; ?>" value="<?php echo $value; ?>"> 
	<?php
}
?>

<h3>8. Модифицируйте функцию из предыдущей задачи так, чтобы она сохраняла значение инпута после отправки.</h3>

<form action="" method="GET">
	<?php echo va_input_8( 'text', 'simple_input', 'Your Name' ); ?>
	<input type="submit" name="submit_8">
</form>

<?php
/**
 * Va_todo_8
 *
 * @param  mixed $type = input type.
 * @param  mixed $name = name.
 * @param  mixed $value = value.
 */
function va_input_8( $type, $name, $value ) {
	if ( isset( $_GET[ $name ] ) ) {
		$value = $_GET[ $name ];
	}
	?>
	<input type="<?php echo $type; ?>" name="<?php echo $name; ?>" value="<?php echo $value; ?>"> 
	<?php
}
?>

<h3>9. Сделайте функцию, которая создает чекбокс. Если чекбокс не отмечен - функция должна отправлять 0 (то есть нужно сделать hidden инпут), если отмечен - 1. </h3>

<form action="" method="GET">
	<?php echo va_todo_9( 'checkbox' ); ?>
	<input type="submit">
</form>

<?php
/**
 * Va_input_9
 *
 * @param  mixed $name - name.
 */
function va_todo_9( $name ) {
	?>
	<input type="hidden" name="<?php echo $name; ?>" value="0"> 
	<input type="checkbox" name="<?php echo $name; ?>" value="1"> 
	<?php
}
?>

<h3>10. Напишите функцию, которая создает чекбокс и сохраняет его значение после отправки.</h3>

<form action="" method="GET">
	<?php echo va_todo_10( 'checkbox_2' ); ?>
	<input type="submit">
</form>

<?php
/**
 * Va_input_10
 *
 * @param  mixed $name - name.
 */
function va_todo_10( $name ) {
	if ( isset( $_GET[ $name ] ) && 1 === $_GET[ $name ] ) {
		$value = 'checked';
	} else {
		$value = '';
	}
	?>
	<input type="hidden" name="<?php echo $name; ?>" value="0"> 
	<input type="checkbox" name="<?php echo $name; ?>" value="1"<?php echo $value; ?>> 
	<?php
}
?>
