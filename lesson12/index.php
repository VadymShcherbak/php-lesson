<h1>Задачи на пользовательские функции</h1>

<h3> Сделайте функцию, которая возвращает квадрат числа. Число передается параметром.</h3>


<?php
/**
 * PHP lesson
 *
 * @package lessons-12
 */

/**
 * Va_todo_1
 *
 * @param  mixed $param num.
 * @return statement
 */
function va_todo_1( $param ) {
	return pow( $param, 2 );
}

echo va_todo_1( 6 );
?>

<h3>2. Сделайте функцию, которая возвращает сумму двух чисел. Числа передаются параметрами функции.</h3>

<?php
/**
 * Va_todo_2
 *
 * @param  mixed $num1 num1.
 * @param  mixed $num2 num2.
 * @return statement
 */
function va_todo_2( $num1, $num2 ) {
	return $num1 + $num2;
}

echo va_todo_2( 10, 5 );
?>

<h3>Сделайте функцию, которая отнимает от первого числа второе и делит на третье.</h3>

<?php
/**
 * Va_todo_3
 *
 * @param  mixed $num1 num1.
 * @param  mixed $num2 num2.
 * @param  mixed $num3 num3.
 * @return statement
 */
function va_todo_3( $num1, $num2, $num3 ) {
	return ( $num1 - $num2 ) / $num3;
}

echo va_todo_3( 10, 4, 2 );
?>

<h3>4. Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.</h3>

<?php
/**
 * Va_todo_4
 *
 * @param  mixed $num num1.
 * @return statement
 */
function va_todo_4( $num ) {
	if ( 1 <= $num && $num <= 7 ) {
		$week = array( 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье' );
		return $week[ $num - 1 ];
	}
}

echo va_todo_4( 5 );
?>
