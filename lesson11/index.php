<?php
require 'helper.php';
?>

<h1>Задачи на даты в PHP</h1>

<h3>1. Выведите текущее время в формате timestamp.</h3>

<?php
/**
 * Va_todo_1
 *
 * @return void
 */
function va_todo_1() {

	echo time();
}

va_todo_1();
?>

<h3>2.Выведите 1 марта 2025 года в формате timestamp.</h3>

<?php
/**
 * Va_todo_2
 *
 * @return void
 */
function va_todo_2() {

	echo mktime( 0, 0, 0, 3, 1, 2025 );
}

va_todo_2();
?>

<h3>3. Выведите 31 декабря текущего года в формате timestamp. Скрипт должен работать независимо от года, в котором он запущен.</h3>

<?php
/**
 * Va_todo_3
 *
 * @return void
 */
function va_todo_3() {

	echo mktime( 0, 0, 0, 12, 31 );
}

va_todo_3();
?>

<h3>4.Найдите количество секунд, прошедших с 13:12:59 15-го марта 2000 года до настоящего момента времени.</h3>

<?php
/**
 * Va_todo_4
 *
 * @return void
 */
function va_todo_4() {

	echo time() - mktime( 13, 12, 59, 3, 15, 2000 );
}

va_todo_4();
?>

<h3>5. Найдите количество целых часов, прошедших с 7:23:48 текущего дня до настоящего момента времени.</h3>

<?php
/**
 * Va_todo_5
 *
 * @return void
 */
function va_todo_5() {

	echo time() - mktime( 7, 23, 48 );
}

va_todo_5();
?>

<h3>6.Выведите на экран текущий год, месяц, день, час, минуту, секунду.</h3>

<?php
/**
 * Va_todo_6
 *
 * @return void
 */
function va_todo_6() {

	echo date( 'Y-m-d h:i:s' );
}

va_todo_6();
?>

<h3>7. Выведите текущую дату-время в форматах '2025-12-31', '31.12.2025', '31.12.13', '12:59:59'.</h3>

<?php
/**
 * Va_todo_7
 *
 * @return void
 */
function va_todo_7() {

	echo date( 'Y-m-d' ) . '<br>';
	echo date( 'd.m.Y' ) . '<br>';
	echo date( 'd.m.y' ) . '<br>';
	echo date( 'h:i:s' ) . '<br>';
}

va_todo_7();
?>

<h3>8.С помощью функций mktime и date выведите 12 февраля 2025 года в формате '12.02.2025'.</h3>

<?php
/**
 * Va_todo_8
 *
 * @return void
 */
function va_todo_8() {

	echo date( 'd.m.Y', mktime( 0, 0, 0, 2, 12, 2025 ) );
}

va_todo_8();
?>

<h3>9. Создайте массив дней недели $week. Выведите на экран название текущего дня недели с помощью массива $week и функции date. Узнайте какой день недели был 06.06.2006, в ваш день рождения.</h3>

<?php
/**
 * Va_todo_9
 *
 * @return void
 */
function va_todo_9() {
	$week = array( 'Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота' );

	echo $week[ date( 'w' ) ] . '<br>';
	echo $week[ date( 'w', mktime( 0, 0, 0, 6, 6, 2006 ) ) ] . '<br>';
	echo $week[ date( 'w', mktime( 0, 0, 0, 8, 14, 1992 ) ) ] . '<br>';
}

va_todo_9();
?>

<h3>10.Создайте массив месяцев $month. Выведите на экран название текущего месяца с помощью массива $month и функции date.</h3>

<?php
/**
 * Va_todo_10
 *
 * @return void
 */
function va_todo_10() {
	$month = array( 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь' );

	echo $month[ date( 'n' ) - 1 ];
}

va_todo_10();
?>

<h3>11.Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца, в котором он запущен.</h3>

<?php
/**
 * Va_todo_11
 *
 * @return void
 */
function va_todo_11() {

	echo date( 't' );
}

va_todo_11();
?>

<h3>12.Сделайте поле ввода, в которое пользователь вводит год (4 цифры), а скрипт определяет високосный ли год.</h3>

<form action="" method="GET">
	<input type="text" name="year">
	<input type="submit" name="submit">
</form>

<?php
/**
 * Va_todo_12
 *
 * @return void
 */
function va_todo_12() {

	if ( ! empty( $_GET['year'] ) ) {

		if ( date( 'L', mktime( 0, 0, 0, 1, 1, $_GET['year'] ) ) ) {
			echo 'Год високосный';
		} else {
			echo 'Год не високосный';
		}
	}
}

va_todo_12();
?>

<h3>13. Сделайте форму, которая спрашивает дату в формате '31.12.2025'. С помощью функций mktime и explode переведите эту дату в формат timestamp. Узнайте день недели (словом) за введенную дату.</h3>

<form action="" method="GET">
	<input type="text" name="date_13" placeholder="31.12.2025">
	<input type="submit" name="submit">
</form>

<?php
/**
 * Va_todo_13
 *
 * @return void
 */
function va_todo_13() {
	$week = array( 'Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота' );
	$date = esc_html( $_GET['date_13'] );

	if ( ! empty( $_GET['date_13'] ) ) {
		$arr   = explode( '.', $date );
		$date2 = mktime( 0, 0, 0, $arr[1], $arr[0], $arr[2] );

		echo $week[ date( 'w', $date2 ) ];
	} else {
		echo 'Введите дату';
	}
}

va_todo_13();
?>

<h3>14. Сделайте форму, которая спрашивает дату в формате '2025-12-31'. С помощью функций mktime и explode переведите эту дату в формат timestamp. Узнайте месяц (словом) за введенную дату.</h3>

<form action="" method="GET">
	<input type="text" name="date_14" placeholder="2025-12-31">
	<input type="submit" name="submit">
</form>

<?php
/**
 * Va_todo_14
 *
 * @return void
 */
function va_todo_14() {
	$month = array( 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь' );
	$date  = esc_html( $_GET['date_14'] );

	if ( ! empty( $_GET['date_14'] ) ) {
		$arr   = explode( '-', $date );
		$date2 = mktime( 0, 0, 0, $arr[1], $arr[2], $arr[0] );

		echo $month[ date( 'n', $date2 ) - 1 ];
	} else {
		echo 'Введите дату';
	}
}

va_todo_14();
?>

<h3>15.Сделайте форму, которая спрашивает две даты в формате '2025-12-31'. Первую дату запишите в переменную $date1, а вторую в $date2. Сравните, какая из введенных дат больше. Выведите ее на экран.</h3>

<form action="" method="GET">
	<input type="text" name="date_15" placeholder="2025-12-31">
	<input type="text" name="date_15_1" placeholder="2025-12-31">
	<input type="submit" name="submit">
</form>

<?php
/**
 * Va_todo_15
 */
function va_todo_15() {
	$date1 = esc_html( $_GET['date_15'] );
	$date2 = esc_html( $_GET['date_15_1'] );

	if ( $date1 > $date2 ) {
		echo $date1;
	} elseif ( $date2 > $date1 ) {
		echo $date2;
	}
}

va_todo_15();
?>

<h3>16. Дана дата в формате '2025-12-31'. С помощью функции strtotime и функции date преобразуйте ее в формат '31-12-2025'.</h3>

<form action="" method="GET">
	<input type="text" name="date_16" placeholder="2025-12-31">
	<input type="submit" name="submit_16">
</form>

<?php
/**
 * Va_todo_16
 *
 * @return void
 */
function va_todo_16() {
	if ( ! isset( $_GET['submit_16'] ) ) {
		return;
	}

	if ( ! empty( $_GET['date_16'] ) ) {
		$date = esc_html( $_GET['date_16'] );

		echo date( 'd-m-Y', strtotime( $date ) );
	}
}

va_todo_16();
?>

<h3>17.Сделайте форму, которая спрашивает дату-время в формате '2025-12-31T12:13:59'. С помощью функции strtotime и функции date преобразуйте ее в формат '12:13:59 31.12.2025'.</h3>

<form action="" method="GET">
	<input type="text" name="date_17" placeholder="2025-12-31 12:13:59">
	<input type="submit" name="submit_17">
</form>

<?php
/**
 * Va_todo_17
 *
 * @return void
 */
function va_todo_17() {
	if ( ! isset( $_GET['submit_17'] ) ) {
		return;
	}

	$date = esc_html( $_GET['date_17'] );

	echo date( 'h:i:s d.m.Y', strtotime( $date ) );
}

va_todo_17();
?>

<h3>18. В переменной $date лежит дата в формате '2025-12-31'. Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня.</h3>

<?php
/**
 * Va_todo_18
 */
function va_todo_18() {
	$date = '2025-12-31';

	$date2 = date_create( $date );
	date_modify( $date2, '2 days' );
	echo date_format( $date2, 'd:m:Y' ) . '<br>';

	date_modify( $date2, '1 month 3 days' );
	echo date_format( $date2, 'd:m:Y' ) . '<br>';

	date_modify( $date2, '1 year' );
	echo date_format( $date2, 'd:m:Y' ) . '<br>';

	date_modify( $date2, '-3 days' );
	echo date_format( $date2, 'd:m:Y' ) . '<br>';
}

va_todo_18();
?>

<h3>19. Узнайте сколько дней осталось до Нового Года. Скрипт должен работать в любом году.</h3>

<?php
/**
 * Va_todo_19
 */
function va_todo_19() {
	echo date( 'L' ) ? 366 - date( 'z' ) : 365 - date( 'z' );
}

va_todo_19();
?>

<h3>20. Сделайте форму с одним полем ввода, в которое пользователь вводит год. Найдите все пятницы 13-е в этом году. Результат выведите в виде массива дат.</h3>

<form action="" method="GET">
	<input type="text" name="date_20" placeholder="2025">
	<input type="submit" name="submit_20">
</form>

<?php
/**
 * Va_todo_20
 *
 * @return void
 */
function va_todo_20() {
	if ( ! isset( $_GET['submit_20'] ) ) {
		return;
	}

	if ( ! empty( $_GET['date_20'] ) && is_numeric( $_GET['date_20'] ) ) {
		$year   = esc_html( $_GET['date_20'] );
		$friday = array();

		for ( $month = 1; $month <= 12; $month++ ) {
			$month_days = date( 't', mktime( 0, 0, 0, $month, 1, $year ) );

			for ( $day = 1; $day <= $month_days; $day++ ) {
				$this_date = mktime( 0, 0, 0, $month, $day, $year );

				if ( '13' === date( 'j', $this_date ) && '5' === date( 'w', $this_date ) ) {
					$friday[] = date( 'd.m.Y', $this_date );
				}
			}
		}

		ar( $friday );
	}
}

va_todo_20();
?>

<h3>21. Узнайте какой день недели был 100 дней назад.</h3>

<?php
/**
 * Va_todo_21
 */
function va_todo_21() {
	$week = array( 'Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота' );
	$date = date_create( date( 'Y-m-d' ) );

	date_modify( $date, '-100 day' );

	echo $week[ date( 'w', strtotime( date_format( $date, 'd.m.Y' ) ) ) ];
}

va_todo_21();
?>
