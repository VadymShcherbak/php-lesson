<?php
/**
 * PHP lesson
 *
 * @package lessons-33
 */

require 'helper.php';
?>


<h1>Задачи на основы работы с базами данных SQL в PHP</h1>

<h3>1. Выбрать работника с id = 3.</h3>

<?php
$pdo = new PDO( 'mysql:host=192.168.1.133;dbname=test;', 'vadym', 'vadym' );

/**
 * Va_todo_1
 */
function va_todo_1() {
	global $pdo;

	$id = 3;

	$res = $pdo->prepare( 'SELECT * FROM `workers` WHERE id = :id' );

	$res->bindParam( ':id', $id );
	$res->execute();
	$data = $res->fetchAll( PDO::FETCH_ASSOC );

	foreach ( $data as $value ) {
		ar( $value );
	}
}

va_todo_1();
?>

<h3>2. Выбрать работников с зарплатой 1000$.</h3>

<?php
/**
 * Va_todo_2
 */
function va_todo_2() {
	global $pdo;

	$sal = 1000;
	$res = $pdo->prepare( 'SELECT * FROM `workers` WHERE salary = :salary' );

	$res->bindParam( ':salary', $sal );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_2();
?>

<h3>3.Выбрать работников в возрасте 23 года.</h3>

<?php
/**
 * Va_todo_3
 */
function va_todo_3() {
	global $pdo;

	$age = 23;
	$res = $pdo->prepare( 'SELECT * FROM `workers` WHERE age = :age' );

	$res->bindParam( ':age', $age );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_3();
?>

<h3>4.Выбрать работников с зарплатой более 400$.</h3>

<?php
/**
 * Va_todo_4
 */
function va_todo_4() {
	global $pdo;
	$sal = 400;
	$res = $pdo->prepare( 'SELECT * FROM `workers` WHERE salary > :salary' );

	$res->bindParam( ':salary', $sal );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_4();
?>

<h3>5. Выбрать работников с зарплатой равной или большей 500$.</h3>

<?php
/**
 * Va_todo_5
 */
function va_todo_5() {
	global $pdo;

	$sal = 500;
	$res = $pdo->prepare( 'SELECT * FROM `workers` WHERE salary >= :salary' );

	$res->bindParam( ':salary', $sal );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_5();
?>

<h3>6. Выбрать работников с зарплатой НЕ равной 500$.</h3>

<?php
/**
 * Va_todo_6
 */
function va_todo_6() {
	global $pdo;

	$sal = 500;
	$res = $pdo->prepare( 'SELECT * FROM `workers` WHERE salary != :salary' );

	$res->bindParam( ':salary', $sal );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_6();
?>

<h3>7.Выбрать работников с зарплатой равной или меньшей 900$.</h3>

<?php
/**
 * Va_todo_7
 */
function va_todo_7() {
	global $pdo;

	$sal = 900;
	$res = $pdo->prepare( 'SELECT * FROM `workers` WHERE salary <= :salary' );

	$res->bindParam( ':salary', $sal );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_7();
?>

<h3>8. Узнайте зарплату и возраст Васи.</h3>

<?php
/**
 * Va_todo_8
 */
function va_todo_8() {
	global $pdo;

	$name = 'Вася';
	$res  = $pdo->prepare( 'SELECT * FROM `workers` WHERE name = :name' );

	$res->bindParam( ':name', $name );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_8();
?>

<h3>9. Выбрать работников в возрасте от 25 (не включительно) до 28 лет (включительно).</h3>

<?php
/**
 * Va_todo_9
 */
function va_todo_9() {
	global $pdo;

	$age1 = 25;
	$age2 = 28;
	$res  = $pdo->prepare( 'SELECT * FROM `workers` WHERE age > :age1 AND age <= :age2' );

	$res->bindParam( ':age1', $age1 );
	$res->bindParam( ':age2', $age2 );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_9();
?>

<h3>10.Выбрать работника Петю.</h3>

<?php
/**
 * Va_todo_10
 */
function va_todo_10() {
	global $pdo;

	$name = 'Петя';
	$res  = $pdo->prepare( 'SELECT * FROM `workers` WHERE name = :name' );

	$res->bindParam( ':name', $name );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_10();
?>

<h3>11.Выбрать работников Петю и Васю.</h3>

<?php
/**
 * Va_todo_11
 */
function va_todo_11() {
	global $pdo;

	$name1 = 'Петя';
	$name2 = 'Вася';
	$res   = $pdo->prepare( 'SELECT * FROM `workers` WHERE name = :name1 OR  name = :name2' );

	$res->bindParam( ':name1', $name1 );
	$res->bindParam( ':name2', $name2 );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_11();
?>

<h3>12.Выбрать всех, кроме работника Петя.</h3>

<?php
/**
 * Va_todo_10
 */
function va_todo_12() {
	global $pdo;

	$name = 'Петя';
	$res  = $pdo->prepare( 'SELECT * FROM `workers` WHERE name != :name' );

	$res->bindParam( ':name', $name );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_12();
?>

<h3>13.Выбрать всех работников в возрасте 27 лет или с зарплатой 1000$.</h3>

<?php
/**
 * Va_todo_13
 */
function va_todo_13() {
	global $pdo;

	$age = 27;
	$sal = 1000;
	$res = $pdo->prepare( 'SELECT * FROM `workers` WHERE age = :age OR  salary = :salary' );

	$res->bindParam( ':age', $age );
	$res->bindParam( ':salary', $sal );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_13();
?>

<h3>14. Выбрать всех работников в возрасте от 23 лет (включительно) до 27 лет (не включительно) или с зарплатой 1000$.</h3>

<?php
/**
 * Va_todo_14
 */
function va_todo_14() {
	global $pdo;

	$min_age = 23;
	$max_age = 27;
	$sal     = 1000;
	$res     = $pdo->prepare( 'SELECT * FROM `workers` WHERE age >= :min_age AND age < :max_age OR  salary = :salary' );

	$res->bindParam( ':min_age', $min_age );
	$res->bindParam( ':max_age', $max_age );
	$res->bindParam( ':salary', $sal );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_14();
?>

<h3>15. Выбрать всех работников в возрасте от 23 лет до 27 лет или с зарплатой от 400$ до 1000$.</h3>

<?php
/**
 * Va_todo_15
 */
function va_todo_15() {
	global $pdo;

	$min_age = 23;
	$max_age = 27;
	$min_sal = 400;
	$max_sal = 1000;
	$res     = $pdo->prepare( 'SELECT * FROM `workers` WHERE ( age >= :min_age AND age <= :max_age ) OR ( salary >= :min_sal AND salary <= :max_sal )' );

	$res->bindParam( ':min_age', $min_age );
	$res->bindParam( ':max_age', $max_age );
	$res->bindParam( ':min_sal', $min_sal );
	$res->bindParam( ':max_sal', $max_sal );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_15();
?>

<h3>16. Выбрать всех работников в возрасте 27 лет или с зарплатой не равной 400$.</h3>

<?php
/**
 * Va_todo_16
 */
function va_todo_16() {
	global $pdo;

	$age = 27;
	$sal = 400;
	$res = $pdo->prepare( 'SELECT * FROM `workers` WHERE age = :age OR  salary != :salary' );

	$res->bindParam( ':age', $age );
	$res->bindParam( ':salary', $sal );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_16();
?>

<h3>17. Добавьте нового работника Никиту, 26 лет, зарплата 300$. Воспользуйтесь первым синтаксисом.</h3>

<?php
/**
 * Va_todo_17
 */
function va_todo_17() {
	global $pdo;

	$name = 'Никита';
	$age  = 26;
	$sal  = 300;
	$res  = $pdo->prepare( 'INSERT INTO `workers` SET name = :name, age = :age, salary = :salary' );

	$res->bindParam( ':name', $name );
	$res->bindParam( ':age', $age );
	$res->bindParam( ':salary', $sal );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

// va_todo_17();
?>

<h3>18.Добавьте нового работника Светлану с зарплатой 1200$. Воспользуйтесь вторым синтаксисом.</h3>

<?php
/**
 * Va_todo_18
 */
function va_todo_18() {
	global $pdo;

	$name = 'Светлана';
	$age  = 18;
	$sal  = 300;
	$res  = $pdo->prepare( 'INSERT INTO `workers` ( name, age, salary ) VALUES ( :name, :age, :salary )' );

	$res->bindParam( ':name', $name );
	$res->bindParam( ':age', $age );
	$res->bindParam( ':salary', $sal );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

// va_todo_18();
?>

<h3>19. Добавьте двух новых работников одним запросом: Ярослава с зарплатой 1200$ и возрастом 30, Петра с зарплатой 1000$ и возрастом 31.</h3>

<?php
/**
 * Va_todo_19
 */
function va_todo_19() {
	global $pdo;

	$name  = 'Ярослав';
	$age   = 30;
	$sal   = 1200;
	$name2 = 'Петро';
	$age2  = 31;
	$sal2  = 1000;
	$res   = $pdo->prepare(
		'INSERT INTO `workers` ( name, age, salary ) VALUES ( :name, :age, :salary ), ( :name2, :age2, :salary2  )'
	);

	$res->bindParam( ':name', $name );
	$res->bindParam( ':age', $age );
	$res->bindParam( ':salary', $sal );
	$res->bindParam( ':name2', $name2 );
	$res->bindParam( ':age2', $age2 );
	$res->bindParam( ':salary2', $sal2 );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

// va_todo_19();
?>

<h3>20. Удалите работника с id=7.</h3>

<?php
/**
 * Va_todo_20
 */
function va_todo_20() {
	global $pdo;

	$id  = 7;
	$res = $pdo->prepare( 'DELETE FROM `workers` WHERE id = :id' );

	$res->bindParam( ':id', $id );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

// va_todo_20();
?>

<h3>21. Удалите Колю.</h3>

<?php
/**
 * Va_todo_21
 */
function va_todo_21() {
	global $pdo;

	$name = 'Коля';
	$res  = $pdo->prepare( 'DELETE FROM `workers` WHERE name = :name' );

	$res->bindParam( ':name', $name );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

// va_todo_21();
?>

<h3>22. Удалите всех работников, у которых возраст 23 года.</h3>

<?php
/**
 * Va_todo_22
 */
function va_todo_22() {
	global $pdo;

	$age = 23;
	$res = $pdo->prepare( 'DELETE FROM `workers` WHERE age = :age' );

	$res->bindParam( ':age', $age );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

// va_todo_22();
?>

<h3>23. Поставьте Васе зарплату в 200$.</h3>

<?php
/**
 * Va_todo_23
 */
function va_todo_23() {
	global $pdo;

	$name = 'Вася';
	$sal  = 200;
	$res  = $pdo->prepare( 'UPDATE `workers` SET salary = :salary WHERE name = :name' );

	$res->bindParam( ':name', $name );
	$res->bindParam( ':salary', $sal );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_23();
?>

<h3>24. Работнику с id=4 поставьте возраст 35 лет.</h3>

<?php
/**
 * Va_todo_24
 */
function va_todo_24() {
	global $pdo;

	$id  = 4;
	$age = 35;
	$res = $pdo->prepare( 'UPDATE `workers` SET age = :age WHERE id = :id' );

	$res->bindParam( ':id', $id );
	$res->bindParam( ':age', $age );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_24();
?>

<h3>25. Всем, у кого зарплата 500$ сделайте ее 700$.</h3>

<?php
/**
 * Va_todo_25
 */
function va_todo_25() {
	global $pdo;

	$sal1 = 500;
	$sal2 = 700;
	$res  = $pdo->prepare( 'UPDATE `workers` SET salary = :salary2 WHERE salary = :salary1' );

	$res->bindParam( ':salary1', $sal1 );
	$res->bindParam( ':salary2', $sal2 );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_25();
?>

<h3>26. Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23.</h3>

<?php
/**
 * Va_todo_26
 */
function va_todo_26() {
	global $pdo;

	$id1 = 2;
	$id2 = 5;
	$age = 23;
	$res = $pdo->prepare( 'UPDATE `workers` SET age = :age WHERE id > :id1 AND id <= :id2' );

	$res->bindParam( ':id1', $id1 );
	$res->bindParam( ':id2', $id2 );
	$res->bindParam( ':age', $age );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_26();
?>

<h3>27. Поменяйте Васю на Женю и прибавьте ему зарплату до 900$.</h3>

<?php
/**
 * Va_todo_27
 */
function va_todo_27() {
	global $pdo;

	$name  = 'Вася';
	$name2 = 'Женя';
	$sal   = 900;
	$res   = $pdo->prepare( 'UPDATE `workers` SET name = :name2, salary = :salary WHERE name = :name' );

	$res->bindParam( ':name', $name );
	$res->bindParam( ':name2', $name2 );
	$res->bindParam( ':salary', $sal );
	$res->execute();

	ar( $res->fetchAll( PDO::FETCH_ASSOC ) );
}

va_todo_27();
?>
