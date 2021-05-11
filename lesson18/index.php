<?php
/**
 * PHP lesson
 *
 * @package lessons-16
 */

require 'helper.php';
?>

<h1>Практика на работу с пользовательскими функциями PHP</h1>

<h3>1. Сделайте функцию, которая принимает строку на русском языке, а возвращает ее транслит.</h3>

<?php
/**
 * Translit
 *
 * @param  mixed $str = string.
 * @return string
 */
function translit( $str ) {
	$rus = array( 'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я' );
	$lat = array( 'A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya' );

	return str_replace( $rus, $lat, $str );
}

echo translit( 'Привет Ерни!' );
?>

<h3>2. Сделайте функцию, которая возвращает множественное или единственное число существительного. Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок. Функция первым параметром принимает число, а следующие 3 параметра — форма для единственного числа, для чисел два, три, четыре и для чисел, больших четырех, например, func(3, 'яблоко', 'яблока', 'яблок').</h3>

<?php
/**
 * Va_todo_num
 *
 * @param  mixed $num = number.
 * @param  mixed $str1 = string.
 * @param  mixed $str2 = string.
 * @param  mixed $str3 =string.
 */
function va_todo_num( $num, $str1, $str2, $str3 ) {
	if ( 1 === $num ) {
		echo $num . ' ' . $str1;
	} elseif ( 2 <= $num && 4 >= $num ) {
		echo $num . ' ' . $str2;
	} else {
		echo $num . ' ' . $str3;
	}
}

va_todo_num( 2, 'яблоко', 'яблока', 'яблок' );
?>

<h3>3. Найдите все счастливые билеты. Счастливый билет - это билет, в котором сумма первых трех цифр его номера равна сумме вторых трех цифр его номера.</h3>

<?php
/**
 * Va_happy_tickets
 *
 * @return array
 */
function va_happy_tickets( $num ) {
	if ( strlen( $num ) < 6 ) {
		return;
	}

	$res = array();

	for ( $i = 100000; $i <= $num; $i++ ) {
		$left_part  = substr( (string) $i, 0, 3 );
		$right_part = substr( (string) $i, 3, 3 );

		array_sum( str_split( $left_part, 1 ) ) === array_sum( str_split( $right_part, 1 ) ) ? $res[] = $i : '';
	}

	return $res;
}

ar( va_happy_tickets( 102000 ) );
?>

<h3>4. Дружественные числа - два различных числа, для которых сумма всех собственных делителей первого числа равна второму числу и наоборот, сумма всех собственных делителей второго числа равна первому числу.
Например, 220 и 284. Делители для 220 это 1, 2, 4, 5, 10, 11, 20, 22, 44, 55 и 110, сумма делителей равна 284. Делители для 284 это 1, 2, 4, 71 и 142, их сумма равна 220.
Задача: найдите все пары дружественных чисел в промежутке от 1 до 10000. Для этого сделайте вспомогательную функцию, которая находит все делители числа и возвращает их в виде массива. Также сделайте функцию, которая параметром принимает массив, а возвращает его сумму.</h3>

<?php
/**
 * Va_todo_4
 */
function va_todo_4() {
	for ( $i = 0; $i < 10000; $i++ ) {
		$arr1 = va_get_divisors( $i );
		$arr2 = array();

		if ( 1 <= count( $arr1 ) ) {
			$arr1_sum = va_get_array_sum( $arr1 );
		}

		if ( 1 < $arr1_sum ) {
			$arr2     = va_get_divisors( $arr1_sum );
			$arr2_sum = va_get_array_sum( $arr2 );

			if ( $i === $arr2_sum && $i !== $arr1_sum ) {
				echo $i . ' i ' . $arr1_sum . ' Дружественные числа <br>';
			}
		}
	}
}



/**
 * Va_get_divisors
 *
 * @param  mixed $num = number.
 * @return array
 */
function va_get_divisors( $num ) {
	$arr = array();

	for ( $j = 1; $j < $num; $j++ ) {
		if ( 0 === $num % $j ) {
			$arr[] = $j;
		}
	}

	return $arr;
}

/**
 * Va_get_array_sum
 *
 * @param  mixed $arr = array.
 * @return array
 */
function va_get_array_sum( $arr ) {
	return array_sum( $arr );
}

va_todo_4();
?>
