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
