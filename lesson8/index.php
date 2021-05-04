<h1>Задачи на функции работы с массивами в PHP</h1>

<h3>1.Дан массив $arr. Подсчитайте количество элементов этого массива.</h3>

<?php
function va_todo_1() {
	$arr = array( 'a', 'b', 'c', 'd', 'e' );

	echo count( $arr );
}

va_todo_1();
?>

<h3>2.Дан массив $arr. С помощью функции count выведите последний элемент данного массива.</h3>

<?php
function va_todo_2() {
	$arr = array( 'a', 'b', 'c', 'd', 'e' );

	echo $arr[ count( $arr ) - 1 ];
}

va_todo_2();
?>

<h3>3. Дан массив с числами. Проверьте, что в нем есть элемент со значением 3.</h3>

<?php
function va_todo_3() {
	$arr = array( '1', '2', '3', '4', '5' );
	$res = in_array( '3', $arr );

	var_dump( $res );
}

va_todo_3();
?>

<h3>4. Дан массив [1, 2, 3, 4, 5]. Найдите сумму элементов данного массива.</h3>

<?php
function va_todo_4() {
	$arr = array( '1', '2', '3', '4', '5' );

	echo array_sum( $arr );
}

va_todo_4();
?>

<h3>5. Дан массив [1, 2, 3, 4, 5]. Найдите произведение (умножение) элементов данного массива.</h3>

<?php
function va_todo_5() {
	$arr = array( '1', '2', '3', '4', '5' );

	echo array_product( $arr );
}

va_todo_5();
?>

<h3>6.Дан массив $arr. С помощью функций array_sum и count найдите среднее арифметическое элементов (сумма элементов делить на их количество) данного массива.</h3>

<?php
function va_todo_6() {
	$arr = array( '1', '2', '3', '4', '5' );

	echo array_sum( $arr ) / count( $arr );
}

va_todo_6();
?>

<h3>7. Создайте массив, заполненный числами от 1 до 100.</h3>

<?php
function va_todo_7() {

	var_dump( range( 1, 100 ) );
}

va_todo_7();
?>

<h3>8. Создайте массив, заполненный буквами от 'a' до 'z'.</h3>

<?php
function va_todo_8() {

	var_dump( range( 'a', 'z' ) );
}

va_todo_8();
?>

<h3>9.Создайте строку '1-2-3-4-5-6-7-8-9' не используя цикл.</h3>

<?php
function va_todo_9() {
	$arr = range( 1, 9 );

	echo implode( '-', $arr );
}

va_todo_9();
?>

<h3>10.Найдите сумму чисел от 1 до 100 не используя цикл.</h3>

<?php
function va_todo_10() {

	echo array_sum( range( 1, 100 ) );
}

va_todo_10();
?>

<h3>11.Найдите произведение чисел от 1 до 10 не используя цикл.</h3>

<?php
function va_todo_11() {

	echo array_product( range( 1, 100 ) );
}

va_todo_11();
?>

<h3>11. Даны два массива: первый с элементами 1, 2, 3, второй с элементами 'a', 'b', 'c'. Сделайте из них массив с элементами 1, 2, 3, 'a', 'b', 'c'.</h3>

<?php
function va_todo_12() {
	$arr  = array( 1, 2, 3 );
	$arr2 = array( 'a', 'b', 'c' );

	var_dump( array_merge( $arr, $arr2 ) );
}

va_todo_12();
?>

<h3>13.Дан массив с элементами 1, 2, 3, 4, 5. С помощью функции array_slice создайте из него массив $result с элементами 2, 3, 4.</h3>

<?php
function va_todo_13() {
	$arr    = array( 1, 2, 3, 4, 5 );
	$result = array_slice( $arr, 1, 3 );

	var_dump( $result );
}

va_todo_13();
?>

<h3>14.Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice преобразуйте массив в [1, 4, 5].</h3>

<?php
function va_todo_14() {
	$arr    = array( 1, 2, 3, 4, 5 );
	$result = array_splice( $arr, 1, 2 );

	var_dump( $arr );
}

va_todo_14();
?>

<h3>15.Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice запишите в новый массив элементы [2, 3, 4].</h3>

<?php
function va_todo_15() {
	$arr    = array( 1, 2, 3, 4, 5 );
	$result = array_splice( $arr, 1, 3 );

	var_dump( $result );
}

va_todo_15();
?>

<h3>16.Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice сделайте из него массив [1, 2, 3, 'a', 'b', 'c', 4, 5].</h3>

<?php
function va_todo_16() {
	$arr    = array( 1, 2, 3, 4, 5 );
	$result = array_splice( $arr, 3, 0, array( 'a', 'b', 'c' ) );

	var_dump( $arr );
}

va_todo_16();
?>

<h3>17. Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice сделайте из него массив [1, 'a', 'b', 2, 3, 4, 'c', 5, 'e'].</h3>

<?php
function va_todo_17() {
	$arr = array( 1, 2, 3, 4, 5 );

	array_splice( $arr, 1, 0, array( 'a', 'b' ) );
	array_splice( $arr, 6, 0, array( 'c' ) );
	array_splice( $arr, 8, 0, array( 'e' ) );

	var_dump( $arr );
}

va_todo_17();
?>

<h3>18. Дан массив 'a'=>1, 'b'=>2, 'c'=>3'. Запишите в массив $keys ключи из этого массива, а в $values – значения.</h3>

<?php
function va_todo_18() {
	$arr    = array(
		'a' => 1,
		'b' => 2,
		'c' => 3,
	);
	$keys   = array_keys( $arr );
	$values = array_values( $arr );

	var_dump( $keys );
	var_dump( $values );
}

va_todo_18();
?>

<h3>19. Даны два массива: ['a', 'b', 'c'] и [1, 2, 3]. Создайте с их помощью массив 'a'=>1, 'b'=>2, 'c'=>3'.</h3>

<?php
function va_todo_19() {
	$keys  = array( 'a', 'b', 'c' );
	$elems = array( 1, 2, 3 );
	$res   = array_combine( $keys, $elems );

	var_dump( $res );
}

va_todo_19();
?>

<h3>20.Дан массив 'a'=>1, 'b'=>2, 'c'=>3. Поменяйте в нем местами ключи и значения.</h3>

<?php
function va_todo_20() {
	$arr = array(
		'a' => 1,
		'b' => 2,
		'c' => 3,
	);

	var_dump( array_flip( $arr ) );
}

va_todo_20();
?>

<h3>21.Дан массив с элементами 1, 2, 3, 4, 5. Сделайте из него массив с элементами 5, 4, 3, 2, 1.</h3>

<?php
function va_todo_21() {
	$arr = array( 1, 2, 3, 4, 5 );

	var_dump( array_reverse( $arr ) );
}

va_todo_21();
?>

<h3>22. Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. Найдите позицию первого элемента '-'.</h3>

<?php
function va_todo_22() {
	$arr = array( 'a', '-', 'b', '-', 'c', '-', 'd' );

	echo array_search( '-', $arr );
}

va_todo_22();
?>

<h3>23. Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. Найдите позицию первого элемента '-' и удалите его с помощью функции array_splice.</h3>

<?php
function va_todo_23() {
	$arr = array( 'a', '-', 'b', '-', 'c', '-', 'd' );
	$res = array_search( '-', $arr );
	array_splice( $arr, 1, 1 );

	var_dump( $arr );

}

va_todo_23();
?>

<h3>24. Дан массив ['a', 'b', 'c', 'd', 'e']. Поменяйте элемент с ключом 0 на '!', а элемент с ключом 3 - на '!!'.</h3>

<?php
function va_todo_24() {
	$arr    = array( 'a', 'b', 'c', 'd', 'e' );
	$result = array_replace(
		$arr,
		array(
			0 => '!',
			3 => '!!',
		)
	);

	var_dump( $result );

}

va_todo_24();
?>

<h3>25. Дан массив '3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'. Попробуйте на нем различные типы сортировок.</h3>

<?php
function va_todo_25() {
	$arr = array(
		'3' => 'a',
		'1' => 'c',
		'2' => 'e',
		'4' => 'b',
	);

	krsort( $arr );

	var_dump( $arr );

}

va_todo_25();
?>

<h3>26. Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3. Выведите на экран случайный ключ из данного массива.</h3>

<?php
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
function va_todo_28() {
	$arr = array( 1, 2, 3, 4, 5, 6, 7, 8 );
	shuffle( $arr );

	var_dump( $arr );
}

va_todo_28();
?>

<h3>29. Заполните массив числами от 1 до 25 с помощью range, а затем перемешайте его элементы в случайном порядке.</h3>

<?php
function va_todo_29() {
	$arr = range( 1, 25 );
	shuffle( $arr );

	var_dump( $arr );
}

va_todo_29();
?>

<h3>30.Создайте массив, заполненный буквами от 'a' до 'z' так, чтобы буквы шли в случайном порядке и не повторялись.</h3>

<?php
function va_todo_30() {
	$arr = range( 'a', 'z' );
	shuffle( $arr );

	var_dump( $arr );
}

va_todo_30();
?>

<h3>31. Сделайте строку длиной 6 символов, состоящую из маленьких английских букв, расположенных в случайном порядке. Буквы не должны повторяться.</h3>
