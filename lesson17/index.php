<?php
/**
 * PHP lesson
 *
 * @package lessons-16
 */

require 'helper.php';
?>

<h1>Правильное использование пользовательских функций</h1>

<h3> Сделайте функцию isNumberInRange, которая параметром принимает число и проверяет, что оно больше нуля и меньше 10. Если это так - пусть функция возвращает true, если не так - false.</h3>

<?php
/**
 * IsNumberInRange
 *
 * @param  mixed $num = number.
 * @return boolean
 */
function is_number_in_range( $num ) {
	if ( $num >= 0 && $num < 10 ) {
		return true;
	} else {
		return false;
	}
}

echo is_number_in_range( 6 );
?>

<h3>2. Дан массив с числами. Запишите в новый массив только те числа, которые больше нуля и меньше 10-ти. Для этого используйте вспомогательную функцию isNumberInRange из предыдущей задачи.</h3>

<?php
/**
 * Va_todo_2
 */
function va_todo_2() {
	$arr  = array( -1, -2, 2, 3, 4, 5, 8, 10, 11, 15 );
	$arr2 = array();

	foreach ( $arr as $elem ) {
		if ( is_number_in_range( $elem ) ) {
			$arr2[] = $elem;
		}
	}

	ar( $arr2 );
}

va_todo_2();
?>

<h3>3.Сделайте функцию getDigitsSum (digit - это цифра), которая параметром принимает целое число и возвращает сумму его цифр.</h3>

<?php
/**
 * Get_digits_sum
 *
 * @param  mixed $num = number.
 * @return integer
 */
function get_digits_sum( $num ) {
	if ( ! is_numeric( $num ) ) {
		return;
	}

	$res = str_split( $num, 1 );
	return array_sum( $res );
}

echo get_digits_sum( 636 );
?>

<h3>4.Найдите все года от 1 до 2021, сумма цифр которых равна 13. Для этого используйте вспомогательную функцию getDigitsSum из предыдущей задачи.</h3>

<?php
/**
 * Va_todo_4
 */
function va_todo_4() {

	for ( $i = 1; $i <= 2021; $i++ ) {
		if ( 13 === get_digits_sum( $i ) ) {
			echo $i . '<br>';
		}
	}
}

va_todo_4();
?>

<h3>5. Сделайте функцию isEven() (even - это четный), которая параметром принимает целое число и проверяет: четное оно или нет. Если четное - пусть функция возвращает true, если нечетное - false.</h3>

<?php
/**
 * Is_even
 *
 * @param  mixed $num = number.
 * @return integer
 */
function is_even( $num ) {
	return 0 === $num % 2;
}

echo is_even( 8 );
?>

<h3>6. Дан массив с целыми числами. Создайте из него новый массив, где останутся лежать только четные из этих чисел. Для этого используйте вспомогательную функцию isEven из предыдущей задачи.</h3>

<?php
/**
 * Va_todo_6
 */
function va_todo_6() {
	$arr  = array( 2, 3, 4, 5, 8, 10, 11, 15 );
	$arr2 = array();

	foreach ( $arr as $elem ) {
		if ( is_even( $elem ) ) {
			$arr2[] = $elem;
		}
	}

	ar( $arr2 );
}

va_todo_6();
?>

<h3>7.Сделайте функцию getDivisors, которая параметром принимает число и возвращает массив его делителей (чисел, на которое делится данное число).</h3>

<?php
/**
 * Get_divisors
 *
 * @param  mixed $num = number.
 * @return array
 */
function get_divisors( $num ) {
	$arr = array();

	for ( $i = 1; $i < $num; $i++ ) {
		if ( 0 === $num % $i ) {
			$arr[] = $i;
		}
	}

	return $arr;
}

ar( get_divisors( 10 ) );
?>

<h3>8. Сделайте функцию getCommonDivisors, которая параметром принимает 2 числа, а возвращает массив их общих делителей. Для этого используйте вспомогательную функцию getDivisors из предыдущей задачи.</h3>

<?php
/**
 * Get_common_divisors
 *
 * @param  mixed $num = number.
 * @param  mixed $num2 = number.
 * @return array
 */
function get_common_divisors( $num, $num2 ) {
	$arr  = get_divisors( $num );
	$arr2 = get_divisors( $num2 );

	return array_intersect( $arr, $arr2 );
}

ar( get_common_divisors( 10, 12 ) );
?>
