<h3>1.Создайте переменную $a и присвойте ей значение 3. Выведите значение этой переменной на экран.</h3>

<?php 
function va_todo_1() {
	$a = 3;
	echo $a;	
}
va_todo_1();
?>

<h3>2. Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления).</h3>

<?php 
function va_todo_2() {
	$a = 10;
	$b = 2;
	echo $a + $b . '<br>';
	echo $a - $b . '<br>'; 	
	echo $a * $b . '<br>';
	echo $a / $b . '<br>';
}
va_todo_2();
?>

<h3>3.Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат присвойте переменной $result. Выведите на экран значение переменной $result.</h3>

<?php 
function va_todo_3() {
	$c		= 15;
	$d 		= 2;
	$result = $c + $d;
	echo $result;	
}
va_todo_3();
?>

<h3>4.Создайте переменные $a=10, $b=2 и $c=5. Выведите на экран их сумму.</h3>

<?php 
function va_todo_4() {
	$a = 10;
	$b = 2;
	$c = 5;
	echo $a + $b + $c;	
}
va_todo_4();
?>

<h3>5. Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c. Затем создайте переменную $d, присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите в переменную $result. Выведите на экран значение переменной $result.</h3>

<?php 
function va_todo_5() {
	$a 		= 17;
	$b 		= 10;
	$c 		= $a - $b;
	$d 		= 7;
	$result = $c + $d;
	echo $result;	
}
va_todo_5();
?>

<h3>6.Создайте переменную $text и присвойте ей значение 'Привет, Мир!'. Выведите значение этой переменной на экран.</h3>

<?php 
function va_todo_6() {
	$text = 'Привет, Мир!';
	echo $text;	
}
va_todo_6();
?>

<h3>7. Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих переменных и операции сложения строк выведите на экран фразу 'Привет, Мир!'</h3>

<?php 
function va_todo_7() {
	$text1='Привет,';
	$text2=' Мир!';
	echo $text1 . $text2;
}
va_todo_7();
?>

<h3>8. Создайте переменную $name и присвойте ей ваше имя. Выведите на экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.</h3>

<?php 
function va_todo_8() {
	$text='Привет,';
	$name=' Вадим';
	echo $text . $name;	
}
va_todo_8();
?>

<h3>9.Создайте переменную $age и присвойте ей ваш возраст. Выведите на экран 'Мне %Возраст% лет!'.</h3>

<?php 
function va_todo_9() {
	$text  ='Мне ';
	$age   = 28;
	$text2 = ' лет';
	echo $text . $age . $text2;	
}
va_todo_9();
?>

<h3>10. Создайте переменную $text и присвойте ей значение 'abcde'. Обращаясь к отдельным символам этой строки выведите на экран символ 'a', символ 'c', символ 'e'.</h3>

<?php 
function va_todo_10() {
	$text  ='abcde';
	echo $text[0];
	echo $text[2];
	echo $text[4];
}
va_todo_10();
?>

<h3>11. Дана произвольная строка, например, 'abcde'. Поменяйте первую букву (то есть букву 'a') этой строки на '!'.</h3>

<?php 
function va_todo_11() {
	$text  ='abcde';
	$text[0] = '!';
	echo $text;
}
va_todo_11();
?>

<h3>12. Создайте переменную $num и присвойте ей значение '12345'. Найдите сумму цифр этого числа.</h3>

<?php 
function va_todo_12() {
	$num ='12345';

	for ($i=0; $i < strlen($num); $i++) { 
		$result += $num[$i];
	}
	echo $result;
}
va_todo_12();
?>

<h3>13 Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце.</h3>

<?php 
function va_todo_13() {
	$sh =  60 * 60;
	$sd = $sh * 24;
	$sm = $sd * 30;

	echo $sh . ': second in hour:'  . '<br>';
	echo $sd . ': second in day'    . '<br>';
	echo $sm . ': second in month'  . '<br>';
}
va_todo_13();
?>

<h3>14.Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'.</h3>

<?php 
function va_todo_14() {
	$hour = 16;
	$minute = 13;
	$second = 35;

	echo $hour . ':' . $minute . ':' . $second;
}
va_todo_14();
?>

<h3>15. Создайте переменную, присвойте ей число. Возведите это число в квадрат (это значит нужно умножить его само на себя). Выведите его на экран.</h3>

<?php 
function va_todo_15() {
	$num = 16;

	echo $num *= $num ;
}
va_todo_15();
?>

<h3>16.Переделайте этот код так, чтобы в нем использовались операции +=, -=, *=, /=. Количество строк кода при этом не должно измениться.</h3>

<?php 
function va_todo_16() {
	$var = 47;
	$var += 7;
	$var -= 18;
	$var *= 10;
	$var /= 20;
	echo $var;
}
va_todo_16();
?>

<h3>17.Переделайте этот код так, чтобы в нем использовалась операция .=. Количество строк кода при этом не должно измениться.</h3>

<?php 
function va_todo_17() {
	$text = 'Я';
	$text .= ' хочу';
	$text .=' знать';
	$text .=' PHP!';
	echo $text;
}
va_todo_17();
?>

<h3>18. Переделайте этот код так, чтобы в нем использовались операции ++ и --. Количество строк кода при этом не должно измениться.</h3>

<?php 
function va_todo_18() {
	$var = 10;
	$var++;
	$var++;
	$var--;
	echo $var;
}
va_todo_18();
?>

<h3>19. Переделайте этот код так, чтобы в нем использовались операции ++, -- , +=, -=, *=, /=. Количество строк кода при этом не должно измениться.</h3>

<?php 
function va_todo_19() {
	$var = 10;
	$var += 7;
	$var++;
	$var--;
	$var += 12;
	$var *= 7;
	$var -= 15;
	echo $var;
}
va_todo_19();
?>
