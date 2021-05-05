<?php
function ar( $data ) {
	echo '<pre>';
	print_r( $data );
	echo '</pre>';
}
?>

<h1>Задачи на функции работы с массивами в PHP</h1>

<h3>1.Дан массив $arr. Подсчитайте количество элементов этого массива.</h3>

<?php
/**
 * Va_todo_1
 *
 * @return void
 */
function va_todo_1() {
	$arr = array( 'a', 'b', 'c', 'd', 'e' );

	echo count( $arr );
}

va_todo_1();
?>

<h3>2.Дан массив $arr. С помощью функции count выведите последний элемент данного массива.</h3>

<?php
/**
 * Va_todo_2
 *
 * @return void
 */
function va_todo_2() {
	$arr = array( 'a', 'b', 'c', 'd', 'e' );

	echo $arr[ count( $arr ) - 1 ];
}

va_todo_2();
?>

<h3>3. Дан массив с числами. Проверьте, что в нем есть элемент со значением 3.</h3>

<?php
/**
 * Va_todo_3
 *
 * @return void
 */
function va_todo_3() {
	$arr = array( '1', '2', '3', '4', '5' );
	$res = in_array( '3', $arr );

	ar( $res );
}

va_todo_3();
?>

<h3>4. Дан массив [1, 2, 3, 4, 5]. Найдите сумму элементов данного массива.</h3>

<?php
/**
 * Va_todo_4
 *
 * @return void
 */
function va_todo_4() {
	$arr = array( '1', '2', '3', '4', '5' );

	echo array_sum( $arr );
}

va_todo_4();
?>

<h3>5. Дан массив [1, 2, 3, 4, 5]. Найдите произведение (умножение) элементов данного массива.</h3>

<?php
/**
 * Va_todo_5
 *
 * @return void
 */
function va_todo_5() {
	$arr = array( '1', '2', '3', '4', '5' );

	echo array_product( $arr );
}

va_todo_5();
?>

<h3>6.Дан массив $arr. С помощью функций array_sum и count найдите среднее арифметическое элементов (сумма элементов делить на их количество) данного массива.</h3>

<?php
/**
 * Va_todo_6
 *
 * @return void
 */
function va_todo_6() {
	$arr = array( '1', '2', '3', '4', '5' );

	echo array_sum( $arr ) / count( $arr );
}

va_todo_6();
?>

<h3>7. Создайте массив, заполненный числами от 1 до 100.</h3>

<?php
/**
 * Va_todo_7
 *
 * @return void
 */
function va_todo_7() {

	ar( range( 1, 100 ) );
}

va_todo_7();
?>

<h3>8. Создайте массив, заполненный буквами от 'a' до 'z'.</h3>

<?php
/**
 * Va_todo_8
 *
 * @return void
 */
function va_todo_8() {

	ar( range( 'a', 'z' ) );
}

va_todo_8();
?>

<h3>9.Создайте строку '1-2-3-4-5-6-7-8-9' не используя цикл.</h3>

<?php
/**
 * Va_todo_9
 *
 * @return void
 */
function va_todo_9() {
	$arr = range( 1, 9 );

	echo implode( '-', $arr );
}

va_todo_9();
?>

<h3>10.Найдите сумму чисел от 1 до 100 не используя цикл.</h3>

<?php
/**
 * Va_todo_10
 *
 * @return void
 */
function va_todo_10() {

	echo array_sum( range( 1, 100 ) );
}

va_todo_10();
?>

<h3>11.Найдите произведение чисел от 1 до 10 не используя цикл.</h3>

<?php
/**
 * Va_todo_11
 *
 * @return void
 */
function va_todo_11() {

	echo array_product( range( 1, 100 ) );
}

va_todo_11();
?>

<h3>11. Даны два массива: первый с элементами 1, 2, 3, второй с элементами 'a', 'b', 'c'. Сделайте из них массив с элементами 1, 2, 3, 'a', 'b', 'c'.</h3>

<?php
/**
 * Va_todo_12
 *
 * @return void
 */
function va_todo_12() {
	$arr  = array( 1, 2, 3 );
	$arr2 = array( 'a', 'b', 'c' );

	ar( array_merge( $arr, $arr2 ) );
}

va_todo_12();
?>

<h3>13.Дан массив с элементами 1, 2, 3, 4, 5. С помощью функции array_slice создайте из него массив $result с элементами 2, 3, 4.</h3>

<?php
/**
 * Va_todo_13
 *
 * @return void
 */
function va_todo_13() {
	$arr    = array( 1, 2, 3, 4, 5 );
	$result = array_slice( $arr, 1, 3 );

	ar( $result );
}

va_todo_13();
?>

<h3>14.Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice преобразуйте массив в [1, 4, 5].</h3>

<?php
/**
 * Va_todo_14
 *
 * @return void
 */
function va_todo_14() {
	$arr = array( 1, 2, 3, 4, 5 );
	array_splice( $arr, 1, 2 );

	ar( $arr );
}

va_todo_14();
?>

<h3>15.Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice запишите в новый массив элементы [2, 3, 4].</h3>

<?php
/**
 * Va_todo_15
 *
 * @return void
 */
function va_todo_15() {
	$arr    = array( 1, 2, 3, 4, 5 );
	$result = array_splice( $arr, 1, 3 );

	ar( $result );
}

va_todo_15();
?>

<h3>16.Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice сделайте из него массив [1, 2, 3, 'a', 'b', 'c', 4, 5].</h3>

<?php
/**
 * Va_todo_16
 *
 * @return void
 */
function va_todo_16() {
	$arr = array( 1, 2, 3, 4, 5 );
	array_splice( $arr, 3, 0, array( 'a', 'b', 'c' ) );

	ar( $arr );
}

va_todo_16();
?>

<h3>17. Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice сделайте из него массив [1, 'a', 'b', 2, 3, 4, 'c', 5, 'e'].</h3>

<?php
/**
 * Va_todo_17
 *
 * @return void
 */
function va_todo_17() {
	$arr = array( 1, 2, 3, 4, 5 );

	array_splice( $arr, 1, 0, array( 'a', 'b' ) );
	array_splice( $arr, 6, 0, array( 'c' ) );
	array_splice( $arr, 8, 0, array( 'e' ) );

	ar( $arr );
}

va_todo_17();
?>

<h3>18. Дан массив 'a'=>1, 'b'=>2, 'c'=>3'. Запишите в массив $keys ключи из этого массива, а в $values – значения.</h3>

<?php
/**
 * Va_todo_18
 *
 * @return void
 */
function va_todo_18() {
	$arr    = array(
		'a' => 1,
		'b' => 2,
		'c' => 3,
	);
	$keys   = array_keys( $arr );
	$values = array_values( $arr );

	ar( $keys );
	ar( $values );
}

va_todo_18();
?>

<h3>19. Даны два массива: ['a', 'b', 'c'] и [1, 2, 3]. Создайте с их помощью массив 'a'=>1, 'b'=>2, 'c'=>3'.</h3>

<?php
/**
 * Va_todo_19
 *
 * @return void
 */
function va_todo_19() {
	$keys  = array( 'a', 'b', 'c' );
	$elems = array( 1, 2, 3 );
	$res   = array_combine( $keys, $elems );

	ar( $res );
}

va_todo_19();
?>

<h3>20.Дан массив 'a'=>1, 'b'=>2, 'c'=>3. Поменяйте в нем местами ключи и значения.</h3>

<?php
/**
 * Va_todo_20
 *
 * @return void
 */
function va_todo_20() {
	$arr = array(
		'a' => 1,
		'b' => 2,
		'c' => 3,
	);

	ar( array_flip( $arr ) );
}

va_todo_20();
?>

<h3>21.Дан массив с элементами 1, 2, 3, 4, 5. Сделайте из него массив с элементами 5, 4, 3, 2, 1.</h3>

<?php
/**
 * Va_todo_21
 *
 * @return void
 */
function va_todo_21() {
	$arr = array( 1, 2, 3, 4, 5 );

	ar( array_reverse( $arr ) );
}

va_todo_21();
?>

<h3>22. Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. Найдите позицию первого элемента '-'.</h3>

<?php
/**
 * Va_todo_22
 *
 * @return void
 */
function va_todo_22() {
	$arr = array( 'a', '-', 'b', '-', 'c', '-', 'd' );
	$res = array_search( '-', $arr );

	echo $res;
}

va_todo_22();
?>

<h3>23. Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. Найдите позицию первого элемента '-' и удалите его с помощью функции array_splice.</h3>

<?php
/**
 * Va_todo_23
 *
 * @return void
 */
function va_todo_23() {
	$arr = array( 'a', '-', 'b', '-', 'c', '-', 'd' );
	array_search( '-', $arr );
	array_splice( $arr, 1, 1 );

	ar( $arr );

}

va_todo_23();
?>

<h3>24. Дан массив ['a', 'b', 'c', 'd', 'e']. Поменяйте элемент с ключом 0 на '!', а элемент с ключом 3 - на '!!'.</h3>

<?php
/**
 * Va_todo_24
 *
 * @return void
 */
function va_todo_24() {
	$arr    = array( 'a', 'b', 'c', 'd', 'e' );
	$result = array_replace(
		$arr,
		array(
			0 => '!',
			3 => '!!',
		)
	);

	ar( $result );

}

va_todo_24();
?>

<h3>25. Дан массив '3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'. Попробуйте на нем различные типы сортировок.</h3>

<?php
/**
 * Va_todo_25
 *
 * @return void
 */
function va_todo_25() {
	$arr = array(
		'3' => 'a',
		'1' => 'c',
		'2' => 'e',
		'4' => 'b',
	);

	krsort( $arr );

	ar( $arr );

}

va_todo_25();
?>

<h3>26. Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3. Выведите на экран случайный ключ из данного массива.</h3>

<?php
/**
 * Va_todo_26
 *
 * @return void
 */
function va_todo_26() {
	$arr = array(
		'a' => 1,
		'b' => 2,
		'c' => 3,
	);

	echo array_rand( $arr );
}

va_todo_26();
?>

<h3>27. Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3. Выведите на экран случайный элемент данного массива.</h3>

<?php
/**
 * Va_todo_27
 *
 * @return void
 */
function va_todo_27() {
	$arr = array(
		'a' => 1,
		'b' => 2,
		'c' => 3,
	);
	$key = array_rand( $arr );

	echo $arr[ $key ];
}

va_todo_27();
?>

<h3>28. Дан массив $arr. Перемешайте его элементы в случайном порядке.</h3>

<?php
/**
 * Va_todo_28
 *
 * @return void
 */
function va_todo_28() {
	$arr = array( 1, 2, 3, 4, 5, 6, 7, 8 );
	shuffle( $arr );

	ar( $arr );
}

va_todo_28();
?>

<h3>29. Заполните массив числами от 1 до 25 с помощью range, а затем перемешайте его элементы в случайном порядке.</h3>

<?php
/**
 * Va_todo_29
 *
 * @return void
 */
function va_todo_29() {
	$arr = range( 1, 25 );
	shuffle( $arr );

	ar( $arr );
}

va_todo_29();
?>

<h3>30.Создайте массив, заполненный буквами от 'a' до 'z' так, чтобы буквы шли в случайном порядке и не повторялись.</h3>

<?php
/**
 * Va_todo_30
 *
 * @return void
 */
function va_todo_30() {
	$arr = range( 'a', 'z' );
	shuffle( $arr );

	ar( $arr );
}

va_todo_30();
?>

<h3>31. Сделайте строку длиной 6 символов, состоящую из маленьких английских букв, расположенных в случайном порядке. Буквы не должны повторяться.</h3>

<?php
/**
 * Va_todo_31
 *
 * @return void
 */
function va_todo_31() {
	$arr = range( 'a', 'z' );

	shuffle( $arr );

	echo substr( implode( '', $arr ), 0, 6 );
}

va_todo_31();
?>

<h3>32.  Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Удалите из него повторяющиеся элементы.</h3>

<?php
/**
 * Va_todo_32
 *
 * @return void
 */
function va_todo_32() {
	$arr = array( 'a', 'b', 'c', 'b', 'a' );

	ar( array_unique( $arr ) );
}

va_todo_32();
?>

<h3>33.Дан массив с элементами 1, 2, 3, 4, 5. Выведите на экран его первый и последний элемент, причем так, чтобы в исходном массиве они исчезли.</h3>

<?php
/**
 * Va_todo_33
 *
 * @return void
 */
function va_todo_33() {
	$arr = array( 1, 2, 3, 4, 5 );

	echo array_shift( $arr ) . ', ';
	echo array_pop( $arr );

	ar( $arr );
}

va_todo_33();
?>

<h3>34. Дан массив с элементами 1, 2, 3, 4, 5. Добавьте ему в начало элемент 0, а в конец - элемент 6.</h3>

<?php
/**
 * Va_todo_34
 *
 * @return void
 */
function va_todo_34() {
	$arr = array( 1, 2, 3, 4, 5 );

	array_unshift( $arr, 0 );
	array_push( $arr, 6 );

	ar( $arr );
}

va_todo_34();
?>

<h3>35.Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8. С помощью цикла и функций array_shift и array_pop выведите на экран его элементы в следующем порядке: 18273645.</h3>

<?php
/**
 * Va_todo_35
 *
 * @return void
 */
function va_todo_35() {
	$arr = array( 1, 2, 3, 4, 5, 6, 7, 8 );
	$str = '';

	while ( count( $arr ) > 0 ) {
		$str .= array_shift( $arr );
		$str .= array_pop( $arr );
	}

	echo $str;
}

va_todo_35();
?>

<h3>36. Дан массив с элементами 'a', 'b', 'c'. Сделайте из него массив с элементами 'a', 'b', 'c', '-', '-', '-'.</h3>

<?php
/**
 * Va_todo_36
 *
 * @return void
 */
function va_todo_36() {
	$arr = array( 'a', 'b', 'c' );

	ar( array_pad( $arr, 6, '-' ) );
}

va_todo_36();
?>

<h3>37. Заполните массив 10-ю буквами 'x'.</h3>

<?php
/**
 * Va_todo_37
 *
 * @return void
 */
function va_todo_37() {

	ar( array_fill( 0, 10, 'x' ) );
}

va_todo_37();
?>

<h3>38. Создайте массив, заполненный целыми числами от 1 до 20. С помощью функции array_chunk разбейте этот массив на 5 подмассивов ([1, 2, 3, 4]; [5, 6, 7, 8] и т.д.).</h3>

<?php
/**
 * Va_todo_38
 *
 * @return void
 */
function va_todo_38() {
	$arr = range( 1, 20 );

	ar( array_chunk( $arr, 4 ) );
}

va_todo_38();
?>

<h3>39. Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Подсчитайте сколько раз встречается каждая из букв.</h3>

<?php
/**
 * Va_todo_39
 *
 * @return void
 */
function va_todo_39() {
	$arr = array( 'a', 'b', 'c', 'b', 'a' );

	ar( array_count_values( $arr ) );
}

va_todo_39();
?>

<h3>40. Дан массив с элементами 1, 2, 3, 4, 5. Создайте новый массив, в котором будут лежать квадратные корни данных элементов.</h3>

<?php
/**
 * Va_todo_40
 *
 * @return void
 */
function va_todo_40() {
	$arr = array( 1, 2, 3, 4, 5 );

	ar( array_map( 'sqrt', $arr ) );
}

va_todo_40();
?>

<h3>41. Дан массив с элементами '<b>php</b>', '<i>html</i>'. Создайте новый массив, в котором из элементов будут удалены теги.</h3>

<?php
/**
 * Va_todo_41
 *
 * @return void
 */
function va_todo_41() {
	$arr = array( '<b>php</b>', '<i>html</i>' );

	ar( array_map( 'strip_tags', $arr ) );
}

va_todo_41();
?>

<h3>42. Дан массив с элементами ' a ', ' b ', ' с '. Создайте новый массив, в котором будут данные элементы без концевых пробелов.</h3>

<?php
/**
 * Va_todo_42
 *
 * @return void
 */
function va_todo_42() {
	$arr = array( ' a ', ' b ', ' с ' );

	ar( array_map( 'trim', $arr ) );
}

va_todo_42();
?>

<h3>43. Дан массив с элементами 1, 2, 3, 4, 5 и массив с элементами 3, 4, 5, 6, 7. Запишите в новый массив элементы, которые есть и в том, и в другом массиве.</h3>

<?php
/**
 * Va_todo_43
 *
 * @return void
 */
function va_todo_43() {
	$arr  = array( 1, 2, 3, 4, 5 );
	$arr2 = array( 3, 4, 5, 6, 7 );

	ar( array_intersect( $arr, $arr2 ) );
}

va_todo_43();
?>

<h3>44. Дан массив с элементами 1, 2, 3, 4, 5 и массив с элементами 3, 4, 5, 6, 7. Запишите в новый массив элементы, которые не присутствуют в обоих массивах одновременно.</h3>

<?php
/**
 * Va_todo_44
 *
 * @return void
 */
function va_todo_44() {
	$arr  = array( 1, 2, 3, 4, 5 );
	$arr2 = array( 3, 4, 5, 6, 7 );

	ar( array_diff( $arr, $arr2 ) );
}

va_todo_44();
?>

<h3>45. Дана строка '1234567890'. Найдите сумму цифр из этой строки не используя цикл.</h3>

<?php
/**
 * Va_todo_45
 *
 * @return void
 */
function va_todo_45() {
	$str = '1234567890';

	echo array_sum( str_split( $str ) );
}

va_todo_45();
?>

<h3>46. Создайте массив ['a'=>1, 'b'=2... 'z'=>26] не используя цикл.</h3>

<?php
/**
 * Va_todo_46
 *
 * @return void
 */
function va_todo_46() {
	$arr1 = range( 'a', 'z' );
	$arr2 = range( 1, 26 );
	$arr  = array_combine( $arr1, $arr2 );

	ar( $arr );
}

va_todo_46();
?>

<h3>47. Создайте массив вида [[1, 2, 3], [4, 5, 6], [7, 8, 9]] не используя цикл.</h3>

<?php
/**
 * Va_todo_47
 *
 * @return void
 */
function va_todo_47() {
	$arr = range( 1, 9 );

	ar( array_chunk( $arr, 3 ) );
}

va_todo_47();
?>

<h3>48. Дан массив с элементами 1, 2, 4, 5, 5. Найдите второй по величине элемент. В нашем случае это будет 4.</h3>

<?php
/**
 * Va_todo_48
 *
 * @return void
 */
function va_todo_48() {
	$arr  = array( 1, 2, 4, 5, 5 );
	$arr2 = array_unique( $arr );

	rsort( $arr2 );

	ar( $arr2[1] );

}

va_todo_48();
?>
