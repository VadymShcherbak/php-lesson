<?php
/**
 * PHP lesson
 *
 * @package lessons-16
 */

require 'helper.php';
?>

<h1>Продвинутая работа с пользовательскими функциями в PHP</h1>

<h3>1. Сделайте функцию cut, которая первым параметром будет принимать строку, а вторым параметром - сколько первых символов оставить в этой строке. Второй параметр должен быть необязательным и по умолчанию принимать значение 10.</h3>

<?php
/**
 * Va_cut
 *
 * @param  mixed $str = string.
 * @param  mixed $num = number.
 */
function va_cut( $str, $num = 10 ) {
	return substr( $str, 0, $num );
}

echo va_cut( 'lorem ipsum dolor sit' );
?>

<h3>2.Дан массив с числами. Выведите последовательно его элементы используя рекурсию и не используя цикл.</h3>

<?php
/**
 * Va_todo_2
 *
 * @param  mixed $arr = array.
 */
function va_todo_2( $arr ) {
	$res = array_splice( $arr, 0, 1 );

	echo $res[0] . '<br>';

	if ( ! empty( $arr ) ) {
		va_todo_2( $arr );
	}

}

va_todo_2( array( 1, 2, 3, 4, 5, 6, 7 ) );
?>

<h3>3. Дано число. Сложите его цифры. Если сумма получилась более 9-ти, опять сложите его цифры. И так, пока сумма не станет однозначным числом (9 и менее).</h3>

<?php
/**
 * Va_todo_3
 *
 * @param  mixed $num = number.
 * @return array
 */
function va_todo_3( $num ) {
	$res = array_sum( str_split( (string) $num ) );

	if ( $res > 9 ) {
		return va_todo_3( (int) $result );
	} else {
		return (int) $res;
	}
}

echo va_todo_3( 452 );
?>
