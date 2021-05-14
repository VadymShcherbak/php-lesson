<?php
/**
 * PHP lesson
 *
 * @package lessons-36
 */

require 'helper.php';
?>

<h1>Задачи на базы данных SQL в PHP</h1>

<h3>1. Из таблицы workers достаньте первые 6 записей.</h3>

<?php
$pdo = new PDO( 'mysql:host=192.168.1.133;dbname=test;', 'vadym', 'vadym' );

/**
 * Va_todo_1
 */
function va_todo_1() {
	global $pdo;

	$id  = 0;
	$res = $pdo->prepare( 'SELECT * FROM `workers` WHERE id > :id LIMIT 6' );

	$res->bindParam( ':id', $id );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_1();
?>

<h3>2. Из таблицы workers достаньте записи со вторую, 3 штуки.</h3>

<?php
/**
 * Va_todo_2
 */
function va_todo_2() {
	global $pdo;

	$id  = 0;
	$res = $pdo->prepare( 'SELECT * FROM `workers` WHERE id > :id LIMIT 1, 3' );

	$res->bindParam( ':id', $id );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_2();
?>

<h3>3.Из таблицы workers достаньте всех работников и отсортируйте их по возрастанию зарплаты.</h3>

<?php
/**
 * Va_todo_3
 */
function va_todo_3() {
	global $pdo;

	$id  = 0;
	$res = $pdo->prepare( 'SELECT * FROM `workers` WHERE id > :id ORDER BY salary' );

	$res->bindParam( ':id', $id );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_3();
?>

<h3>4. Из таблицы workers достаньте всех работников и отсортируйте их по убыванию зарплаты.</h3>

<?php
/**
 * Va_todo_4
 */
function va_todo_4() {
	global $pdo;

	$id  = 0;
	$res = $pdo->prepare( 'SELECT * FROM `workers` WHERE id > :id ORDER BY salary DESC' );

	$res->bindParam( ':id', $id );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_4();
?>

<h3>5. Из таблицы workers достаньте работников со второго по шестого и отсортируйте их по возрастанию возраста.</h3>

<?php
/**
 * Va_todo_5
 */
function va_todo_5() {
	global $pdo;

	$id  = 0;
	$res = $pdo->prepare( 'SELECT * FROM `workers` WHERE id > :id ORDER BY age LIMIT 1, 5' );

	$res->bindParam( ':id', $id );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_5();
?>

<h3>6. В таблице workers подсчитайте всех работников.</h3>

<?php
/**
 * Va_todo_6
 */
function va_todo_6() {
	global $pdo;

	$id  = 0;
	$res = $pdo->prepare( 'SELECT  COUNT(*) FROM `workers` WHERE id > :id' );

	$res->bindParam( ':id', $id );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_6();
?>

<h3>7.В таблице workers подсчитайте всех работников c зарплатой 300$.</h3>

<?php
/**
 * Va_todo_7
 */
function va_todo_7() {
	global $pdo;

	$sal = 300;
	$res = $pdo->prepare( 'SELECT  COUNT(*) FROM `workers` WHERE salary = :salary' );

	$res->bindParam( ':salary', $sal );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_7();
?>

<h3>8. В таблице pages найти строки, в которых фамилия автора заканчивается на "ов".</h3>

<?php
/**
 * Va_todo_8
 */
function va_todo_8() {
	global $pdo;

	$letters = '%ов%';
	$res     = $pdo->prepare( 'SELECT * FROM `pages` WHERE athor LIKE :letters' );

	$res->bindParam( ':letters', $letters );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_8();
?>

<h3>9.В таблице pages найти строки, в которых есть слово "элемент" (искать только по колонке article).</h3>

<?php
/**
 * Va_todo_9
 */
function va_todo_9() {
	global $pdo;

	$word = '%элемент%';
	$res  = $pdo->prepare( 'SELECT * FROM `pages` WHERE article LIKE :word' );

	$res->bindParam( ':word', $word );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_9();
?>

<h3>10. В таблице workers найти строки, в которых возраст работника начинается с числа 3, а далее идет только одна цифра.</h3>

<?php
/**
 * Va_todo_10
 */
function va_todo_10() {
	global $pdo;

	$num = '3_';
	$res = $pdo->prepare( 'SELECT * FROM `workers` WHERE age LIKE :num' );

	$res->bindParam( ':num', $num );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_10();
?>

<h3>11. В таблице workers найти строки, в которых имя работника заканчивается на "я".</h3>

<?php
/**
 * Va_todo_11
 */
function va_todo_11() {
	global $pdo;

	$let = '%я%';
	$res = $pdo->prepare( 'SELECT * FROM `workers` WHERE name LIKE :let' );

	$res->bindParam( ':let', $let );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_11();
?>
