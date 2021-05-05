<?php
require 'helper.php';
?>

<h1>Практика на комбинации функций</h1>

<h3>1.Дан массив с числами. Найдите среднее арифметическое его элементов (сумма элементов делить на количество) не используя цикл. </h3>

<?php
/**
 * Va_todo_1
 *
 * @return void
 */
function va_todo_1() {
	$arr = array( 1, 2, 3, 4, 5 );

	echo array_sum( $arr ) / count( $arr );
}

va_todo_1();
?>

<h3>2.Найдите сумму чисел от 1 до 100 не используя цикл.</h3>

<?php
/**
 * Va_todo_2
 *
 * @return void
 */
function va_todo_2() {
	$arr = range( 1, 100 );

	echo array_sum( $arr );
}

va_todo_2();
?>

<h3>3. Выведите столбец чисел от 1 до 100 не используя цикл.</h3>

<?php
/**
 * Va_todo_3
 *
 * @return void
 */
function va_todo_3() {
	$arr = range( 1, 100 );

	echo implode( '<br>', $arr );
}

va_todo_3();
?>

<h3>4. Заполните массив 10-ю иксами не используя цикл.</h3>

<?php
/**
 * Va_todo_4
 *
 * @return void
 */
function va_todo_4() {

	ar( array_fill( 0, 10, 'x' ) );
}

va_todo_4();
?>

<h3>5.Заполните массив 10-ю случайными числами от 1 до 10 так, чтобы они не повторялись. Цикл использовать нельзя.</h3>

<?php
/**
 * Va_todo_5
 *
 * @return void
 */
function va_todo_5() {
	$arr = range( 1, 10 );

	shuffle( $arr );

	ar( $arr );
}

va_todo_5();
?>

<h3>6.Найдите факториал заданного числа не используя цикл. Факториал - это произведение чисел от 1 до заданного числа включительно.</h3>

<?php
/**
 * Va_todo_6
 *
 * @return void
 */
function va_todo_6() {
	$num = 7;
	$arr = range( 1, $num );

	array_product( $arr );

	ar( array_product( $arr ) );
}

va_todo_6();
?>

<h3>7. Дано число. Найдите сумму цифр этого числа не используя цикл.</h3>

<?php
/**
 * Va_todo_7
 *
 * @return void
 */
function va_todo_7() {
	$num = 123;
	$arr = str_split( $num, 1 );

	echo array_sum( $arr );
}

va_todo_7();
?>

<h3>8. Дана строка. Сделайте заглавным последний символ этой строки не используя цикл.</h3>

<?php
/**
 * Va_todo_8
 *
 * @return void
 */
function va_todo_8() {
	$str = 'abcde';
	$str = strrev( $str );
	$str = ucfirst( $str );
	$str = strrev( $str );

	echo $str;
}

va_todo_8();
?>

<h3>9.Дан массив с числами. Получите из него массив с квадратными корнями этих чисел не используя цикл.</h3>

<?php
/**
 * Va_todo_9
 *
 * @return void
 */
function va_todo_9() {
	$arr = array( 1, 5, 9, 8, 12 );
	$res = array_map( 'sqrt', $arr );

	ar( $res );
}

va_todo_9();
?>

<h3>10. Заполните массив числами от 1 до 26 так, чтобы ключами этих чисел были буквы английского алфавита: ['a'=>1, 'b'=>2...]. Сделайте это не используя цикл. </h3>

<?php
/**
 * Va_todo_10
 *
 * @return void
 */
function va_todo_10() {
	$keys  = range( 'a', 'z' );
	$value = range( 1, 26 );
	$arr   = array_combine( $keys, $value );

	ar( $arr );
}

va_todo_10();
?>

<h3>11.Дана строка с числами '1234567890'. Найдите сумму пар чисел: 12+34+56+78+90. Решите задачу, не используя цикл.</h3>

<?php
/**
 * Va_todo_11
 *
 * @return void
 */
function va_todo_11() {
	$str = '1234567890';
	$arr = str_split( $str, 2 );
	$res = array_sum( $arr );

	echo $res;
}

va_todo_11();
?>
