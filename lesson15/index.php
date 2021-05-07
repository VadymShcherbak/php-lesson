<h1>Задачи на приемы работы с циклами на PHP</h1>

<h3>1. С помощью цикла for сформируйте строку '123456789' и запишите ее в переменную $str.</h3>

<?php
/**
 * PHP lesson
 *
 * @package lessons-15
 */

/**
 * Va_todo_1
 */
function va_todo_1() {
	$str = '';

	for ( $i = 1; $i <= 9; $i++ ) {
		$str .= $i;
	}

	echo $str;
}

va_todo_1();
?>

<h3>2. С помощью цикла for сформируйте строку '987654321' и запишите ее в переменную $str.</h3>

<?php
/**
 * Va_todo_2
 */
function va_todo_2() {
	$str = '';

	for ( $i = 1; $i <= 9; $i++ ) {
		$str .= $i;
	}

	echo strrev( $str );
}

va_todo_2();
?>

<h3>3. С помощью цикла for сформируйте строку '-1-2-3-4-5-6-7-8-9-' и запишите ее в переменную $str.</h3>

<?php
/**
 * Va_todo_3
 */
function va_todo_3() {
	$str = '-';

	for ( $i = 1; $i < 10; $i++ ) {
		$str .= $i . '-';
	}

	echo $str;
}

va_todo_3();
?>

<h3>4. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5:</h3>

<?php
/**
 * Va_todo_4
 */
function va_todo_4() {
	$str = '';

	for ( $i = 0; $i < 20; $i++ ) {
		$str .= 'x';
		echo $str . '<br>';
	}
}

va_todo_4();
?>

<h3>5.С помощью двух вложенных циклов нарисуйте следующую пирамидку:</h3>

<?php
/**
 * Va_todo_5
 */
function va_todo_5() {
	for ( $i = 1; $i <= 9; $i++ ) {

		for ( $j = 1; $j <= $i; $j++ ) {

			echo $i;
		}
		echo '<br>';
	}
}

va_todo_5();
?>

<h3>6. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for:</h3>

<?php
/**
 * Va_todo_6
 */
function va_todo_6() {
	$str = '';

	for ( $i = 0; $i < 5; $i++ ) {
		$str .= 'xx';
		echo $str . '<br>';
	}
}

va_todo_6();
?>
