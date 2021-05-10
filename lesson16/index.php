<?php
/**
 * PHP lesson
 *
 * @package lessons-16
 */

require 'helper.php';

?>

<h1>Задачи на приемы работы с массивами на PHP</h1>

<h3>1. Заполните массив следующим образом: в первый элемент запишите 'x', во второй 'xx', в третий 'xxx' и так далее.</h3>

<?php
/**
 * Va_todo_1
 */
function va_todo_1() {
	$arr = array();

	for ( $i = 1; $i <= 5; $i++ ) {
		$arr = str_repeat( 'x', $i );

		ar( $arr );
	}
}

va_todo_1();
?>

<h3>2. С помощью двух вложенных циклов заполните массив следующим образом: в первый элемент запишите '1', во второй '22', в третий '333' и так далее.</h3>

<?php
/**
 * Va_todo_2
 */
function va_todo_2() {
	$arr = array();

	for ( $i = 1; $i <= 5; $i++ ) {

		for ( $j = 1; $j <= $i; $j++ ) {
			$arr[ $i ] .= $i;
		}
	}

	ar( $arr );
}
va_todo_2();
?>

<h3>3. Сделайте функцию arrayFill, которая будет заполнять массив заданными значениями. Первым параметром функция принимает значение, которым заполнять массив, а вторым - сколько элементов должно быть в массиве. Пример: arrayFill('x', 5) сделает массив ['x', 'x', 'x', 'x', 'x'].</h3>

<?php
/**
 * Arr_fill
 *
 * @param  mixed $elem =el.
 * @param  mixed $arr_count = count.
 */
function arr_fill( $elem, $arr_count ) {
	ar( array_fill( 0, $arr_count, $elem ) );
}
arr_fill( 'x', 5 );
?>

<h3>4. Дан массив с числами. Узнайте сколько элементов с начала массива надо сложить, чтобы в сумме получилось больше 10-ти. Считайте, что в массиве есть нужное количество элементов.</h3>

<?php
/**
 * Va_todo_4
 */
function va_todo_4() {
	$arr    = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 );
	$result = 0;

	for ( $i = 0; $i < count( $arr ); $i++ ) {
		if ( $result > 10 ) {
			echo $i;
			break;
		} else {
			$result += $arr[ $i ];
		}
	}
}
va_todo_4();
?>

<h3>5.Дан двухмерный массив с числами, например [[1, 2, 3], [4, 5], [6]]. Найдите сумму элементов этого массива. Массив, конечно же, может быть произвольным.</h3>

<?php
/**
 * Va_todo_5
 */
function va_todo_5() {
	$arr = array( array( 1, 2, 3 ), array( 4, 5 ), array( 6 ) );
	$res = 0;

	foreach ( $arr as $elem ) {
		$res += array_sum( $elem );
	}

	echo $res;
}
va_todo_5();
?>

<h3>6. Дан трехмерный массив с числами, например [[[1, 2], [3, 4]], [[5, 6], [7, 8]]]. Найдите сумму элементов этого массива. Массив, конечно же, может быть произвольным.</h3>

<?php
/**
 * Va_todo_6
 */
function va_todo_6() {
	$arr = array( array( array( 1, 2 ), array( 3, 4 ) ), array( array( 5, 6 ), array( 7, 8 ) ) );
	$res = 0;

	foreach ( $arr as $elem ) {

		foreach ( $elem as $sub_elem ) {
			$res += array_sum( $sub_elem );
		}
	}

	echo $res;
}
va_todo_6();
?>

<h3>7. С помощью двух циклов создайте массив [[1, 2, 3], [4, 5, 6], [7, 8, 9]].</h3>

<?php
/**
 * Va_todo_7
 */
function va_todo_7() {
	$arr = range( 1, 9 );

	ar( array_chunk( $arr, 3 ) );
}

va_todo_7();
?>
