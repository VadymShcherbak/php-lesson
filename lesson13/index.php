<h1>Задачи на приемы работы с флагами на PHP</h1>

<h3>1. Дан массив с числами. Проверьте, что в этом массиве есть число 5. Если есть - выведите 'да', а если нет - выведите 'нет'.</h3>

<?php
/**
 * PHP lesson
 *
 * @package lessons-13
 */

/**
 * Va_todo_1
 *
 * @return void
 */
function va_todo_1() {
	$arr  = array( 1, 2, 3, 4, 5, 6 );
	$flag = false;

	foreach ( $arr as $elem ) {

		if ( 5 === $elem ) {
			$flag = true;
			break;
		}
	}

	if ( true === $flag ) {
		echo 'Да';
	} else {
		echo 'Нет';
	}
}

va_todo_1();
?>

<h3>2. Дано число, например 31. Проверьте, что это число не делится ни на одно другое число кроме себя самого и единицы. То есть в нашем случае нужно проверить, что число 31 не делится на все числа от 2 до 30. Если число не делится - выведите 'нет', а если делится - выведите 'да'.</h3>

<?php
/**
 * Va_todo_2
 *
 * @param  mixed $num num.
 */
function va_todo_2( $num ) {
	$flag = false;

	for ( $i = 2; $i < $num; $i++ ) {

		if ( 0 === $num % $i ) {
			$flag = true;
		}
	}

	if ( $flag ) {
		echo 'Да';
	} else {
		echo 'Нет';
	}
}

va_todo_2( 32 );
?>

<h3>3. Дан массив с числами. Проверьте, есть ли в нем два одинаковых числа подряд. Если есть - выведите 'да', а если нет - выведите 'нет'.</h3>

<?php
/**
 * Va_todo_3
 */
function va_todo_3() {
	$arr       = array( 1, 2, 3, 4, 4, 21, 32, 79 );
	$flag      = false;
	$count_arr = array_count_values( $arr );

	foreach ( $count_arr as $elem ) {
		if ( $elem > 1 ) {
			$flag = true;
			break;
		}
	}

	$res = $flag ? 'Да' : 'Нет';

	return $res;
}

echo va_todo_3();
?>
