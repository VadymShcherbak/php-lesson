<h1>Задачи на приемы работы с логическими значениями</h1>

<h3>1.Сделайте функцию, которая параметрами принимает 2 числа. Если эти числа равны - пусть функция вернет true, а если не равны - false.</h3>

<?php
/**
 * PHP lesson
 *
 * @package lessons-14
 */

/**
 * Va_todo_1
 *
 * @param  mixed $a num.
 * @param  mixed $b num.
 * @return statemen
 */
function va_todo_1( $a, $b ) {
	return $a === $b;
}

echo va_todo_1( 3, 3 );
?>

<h3>2. Сделайте функцию, которая параметрами принимает 2 числа. Если их сумма больше 10 - пусть функция вернет true, а если нет - false.</h3>

<?php
/**
 * Va_todo_2
 *
 * @param  mixed $a num.
 * @param  mixed $b num.
 * @return statemen
 */
function va_todo_2( $a, $b ) {
	return ( $a + $b ) > 10;
}

echo va_todo_2( 3, 8 );
?>

<h3>3. Сделайте функцию, которая параметром принимает число и проверяет - отрицательное оно или нет. Если отрицательное - пусть функция вернет true, а если нет - false.</h3>

<?php
/**
 * Va_todo_3
 *
 * @param  mixed $a num.
 * @return statemen
 */
function va_todo_3( $a ) {
	return $a < 0;
}

echo va_todo_3( -2 );
?>
