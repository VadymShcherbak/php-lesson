<h1>Задачи на циклы foreach, while, for в PHP</h1>

<h3>1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.</h3>

<?php
function va_todo_1() {
	$arr = array( 'html', 'css', 'php', 'js', 'jq' );

	foreach ( $arr as $elem ) {
		echo $elem . '<br>';
	}
}

va_todo_1();
?>

<h3>2.Дан массив с элементами 1, 2, 3, 4, 5. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.</h3>

<?php
function va_todo_2() {
	$arr    = array( '1', '2', '3', '4', '5' );
	$result = 0;

	foreach ( $arr as $elem ) {
		$result += $elem;
	}

	echo $result;
}

va_todo_2();
?>

<h3>3.Дан массив с элементами 1, 2, 3, 4, 5. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.</h3>

<?php
function va_todo_3() {
	$arr    = array( '1', '2', '3', '4', '5' );
	$result = 0;

	foreach ( $arr as $elem ) {
		$result += pow( $elem, 2 );
	}

	echo $result;
}

va_todo_3();
?>

<h3>4. Дан массив $arr. С помощью цикла foreach выведите на экран столбец ключей и элементов в формате 'green - зеленый'.
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];</h3>

<?php
function va_todo_4() {
	$arr = array(
		'green' => 'зеленый',
		'red'   => 'красный',
		'blue'  => 'голубой',
	);

	foreach ( $arr as $key => $value ) {
		echo $key . '<br>';
	}
}

va_todo_4();
?>

<h3>5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' и с элементами '200', '300', '400'. С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля - зарплата 200 долларов.'.</h3>

<?php
function va_todo_5() {
	$arr = array(
		'Коля' => '200',
		'Вася' => '300',
		'Петя' => '400',
	);

	foreach ( $arr as $key => $value ) {
		echo $key . ' - зарплата ' . $value . '<br>';
	}
}

va_todo_5();
?>

<h3>6.Выведите столбец чисел от 1 до 100.</h3>

<?php
function va_todo_6() {
	$i = 1;

	while ( $i <= 100 ) {
		echo $i . '<br>';
		$i++;
	}
}

va_todo_6();
?>

<h4>For</h4>

<?php
function va_todo_6_1() {

	for ( $i = 1; $i <= 100; $i++ ) {
		echo $i . '<br>';
	}
}

va_todo_6_1();
?>

<h3>7. Выведите столбец чисел от 11 до 33</h3>

<?php
function va_todo_7() {
	$i = 11;

	while ( $i <= 33 ) {
		echo $i . '<br>';
		$i++;
	}
}

va_todo_7();
?>

<h4>For</h4>

<?php
function va_todo_7_1() {

	for ( $i = 11; $i <= 33; $i++ ) {
		echo $i . '<br>';
	}
}

va_todo_7_1();
?>

<h3>8. Выведите столбец четных чисел в промежутке от 0 до 100.</h3>

<?php
function va_todo_8() {
	$i = 0;

	while ( $i <= 100 ) {
		if ( 0 === $i % 2 ) {
			echo $i . '<br>';
		}
		$i++;
	}
}

va_todo_8();
?>

<h4>For</h4>

<?php
function va_todo_8_1() {

	for ( $i = 0; $i <= 100; $i++ ) {
		if ( 0 === $i % 2 ) {
			echo $i . '<br>';
		}
	}
}

va_todo_8_1();
?>

<h3>9.С помощью цикла найдите сумму чисел от 1 до 100.</h3>

<?php
function va_todo_9() {
	$i      = 1;
	$result = 0;

	while ( $i <= 100 ) {
		$result += $i;
		$i++;
	}

	echo $result;
}

va_todo_9();
?>

<h4>For</h4>

<?php
function va_todo_9_1() {
	$result = 0;

	for ( $i = 1; $i <= 100; $i++ ) {
		$result += $i;
	}

	echo $result;
}

va_todo_9_1();
?>

<h3>10.Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, которые больше 3-х, но меньше 10.</h3>

<?php
function va_todo_10() {
	$arr = array( 2, 5, 9, 15, 0, 4 );

	foreach ( $arr as $elem ) {
		if ( $elem > 3 && $elem < 10 ) {
			echo $elem . ',';
		}
	}
}

va_todo_10();
?>

<h3>11.Дан массив с числами. Числа могут быть положительными и отрицательными. Найдите сумму положительных элементов этого массива.</h3>

<?php
function va_todo_11() {
	$arr    = array( 2, -5, 3, -4, 0, 4 );
	$result = 0;

	foreach ( $arr as $elem ) {
		if ( $elem >= 0 ) {
			$result += $elem;
		}
	}

	echo $result;
}

va_todo_11();
?>

<h3>12. Дан массив с элементами 1, 2, 5, 9, 4, 13, 4, 10. С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением, равным 4. Если есть - выведите на экран 'Есть!' и выйдите из цикла. Если нет - ничего делать не надо.</h3>

<?php
function va_todo_12() {
	$arr = array( 1, 2, 5, 9, 4, 13, 4, 10 );

	foreach ( $arr as $elem ) {
		if ( 4 === $elem ) {
			echo 'Есть ';
		}
	}
}

va_todo_12();
?>

<h3>13.Дан массив числами, например: ['10', '20', '30', '50', '235', '3000']. Выведите на экран только те числа из массива, которые начинаются на цифру 1, 2 или 5.</h3>

<?php
function va_todo_13() {
	$arr = array( '10', '20', '30', '50', '235', '3000' );

	foreach ( $arr as $elem ) {
		if ( '1' === $elem[0] || '2' === $elem[0] || '5' === $elem[0] ) {
			echo $elem . '<br>';
		}
	}
}

va_todo_13();
?>

<h3>14. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '-1-2-3-4-5-6-7-8-9-'.</h3>

<?php
function va_todo_14() {
	$arr    = array( 1, 2, 3, 4, 5, 6, 7, 8, 9 );
	$result = '-';

	foreach ( $arr as $elem ) {
		$result .= $elem . '-';
	}

	echo $result;
}

va_todo_14();
?>

<h3>15.Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а выходные дни выведите жирным.</h3>

<?php
function va_todo_15() {
	$arr = array( 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пьятница', 'Субота', 'Воскресенье' );

	foreach ( $arr as $elem ) {
		if ( 'Субота' === $elem || 'Воскресенье' === $elem ) {
			echo '<strong>' . $elem . '</strong>' . ',';
		} else {
			echo $elem . ', ';
		}
	}
}

va_todo_15();
?>

<h3>16.Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</h3>

<?php
function va_todo_16() {
	$arr = array( 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пьятница', 'Субота', 'Воскресенье' );
	$day = 'Четверг';

	foreach ( $arr as $elem ) {
		if ( $elem === $day ) {
			echo '<i>' . $elem . '</i>' . ',';
		} else {
			echo $elem . ', ';
		}
	}
}

va_todo_16();
?>

<h3>17.С помощью цикла for заполните массив числами от 1 до 100. То есть у вас должен получится массив [1, 2, 3... 100].</h3>

<?php
function va_todo_17() {
	$arr = array();

	for ( $i = 0; $i <= 100; $i++ ) {
		if ( $i > 0 && $i <= 100 ) {
			var_dump( $arr[] = $i );
		}
	}
}

va_todo_17();
?>

<h3>18.Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские - в массив $ru.
	$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];</h3>

<?php
function va_todo_18() {
	$arr = array(
		'green' => 'зеленый',
		'red'   => 'красный',
		'blue'  => 'голубой',
	);
	$en  = array();
	$ru  = array();

	foreach ( $arr as $key => $value ) {
		$en[] = $key;
		$ru[] = $value;
	}

	var_dump( $en );
	var_dump( $ru );
}

va_todo_18();
?>

<h3>19.Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.</h3>

<?php
function va_todo_19() {
	$num = 1000;
	$i   = 0;

	while ( $num > 50 ) {
		$num /= 2;

		$i++;
	}

	echo $num . '<br>';
	echo $i . '<br>';
}

va_todo_19();
?>

<h4>For</h4>

<?php
function va_todo_19_1() {
	$num = 1000;

	for ( $i=0; $num > 50; $i++ ) { 
		$num /= 2;
	}

	echo $num . '<br>';
	echo $i . '<br>';
}

va_todo_19_1();
?>
