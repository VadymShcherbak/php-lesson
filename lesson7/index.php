<h1>Задачи на функции работы со строками в PHP</h1>

<h3>1. Дана строка 'php'. Сделайте из нее строку 'PHP'.</h3>

<?php
function va_todo_1() {
	$str = 'php';

	echo strtoupper( 'php' );
}

va_todo_1();
?>

<h3>2. Дана строка 'PHP'. Сделайте из нее строку 'php'.</h3>

<?php
function va_todo_2() {
	$str = 'PHP';

	echo strtolower( 'PHP' );
}

va_todo_2();
?>

<h3>3. Дана строка 'london'. Сделайте из нее строку 'London'.</h3>

<?php
function va_todo_3() {
	$str = 'london';

	echo ucfirst( 'london' );
}

va_todo_3();
?>

<h3>4.Дана строка 'London'. Сделайте из нее строку 'london'.</h3>

<?php
function va_todo_4() {
	$str = 'London';
	$r   = lcfirst( 'London' );

	echo $r;
}

va_todo_4();
?>

<h3>5.Дана строка 'london is the capital of great britain'. Сделайте из нее строку 'London Is The Capital Of Great Britain'.</h3>

<?php
function va_todo_5() {
	$str = 'london is the capital of great britain';

	echo ucwords( $str );
}

va_todo_5();
?>

<h3>6. Дана строка 'LONDON'. Сделайте из нее строку 'London'.</h3>

<?php
function va_todo_6() {
	$str = 'LONDON';

	echo ucfirst( strtolower( 'LONDON' ) );
}

va_todo_6();
?>

<h3>7. Дана строка 'html css php'. Найдите количество символов в этой строке.</h3>

<?php
function va_todo_7() {
	$str = 'html css php';

	echo strlen( 'html css php' );
}

va_todo_7();
?>

<h3>8.Дана переменная $password, в которой хранится пароль пользователя. Если количество символов пароля больше 5-ти и меньше 10-ти, то выведите пользователю сообщение о том, что пароль подходит, иначе сообщение о том, что нужно придумать другой пароль.</h3>

<?php
function va_todo_8() {
	$password = 12345678;

	if ( strlen( $password ) > 5 && strlen( $password ) < 10 ) {
		echo 'Пароль подходит';
	} else {
		echo 'Придумайте другой пароль';
	}
}

va_todo_8();
?>

<h3>9.Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.</h3>

<?php
function va_todo_9() {
	$str = 'html css php';

	echo substr( $str, 0, 4 ) . ', ';
	echo substr( $str, 5, 3 ) . ', ';
	echo substr( $str, -3, 3 );
}

va_todo_9();
?>

<h3>10. Дана строка. Вырежите и выведите на экран последние 3 символа этой строки.</h3>

<?php
function va_todo_10() {
	$str = 'html css php';

	echo substr( $str, -3, 3 );
}

va_todo_10();
?>

<h3>11. Дана строка. Проверьте, что она начинается на 'http://'. Если это так, выведите 'да', если не так - 'нет'.</h3>

<?php
function va_todo_11() {
	$str = 'http://php/lesson';

	if ( substr( $str, 0, 7 ) === 'http://' ) {
		echo 'Да';
	} else {
		echo 'Нет';
	}
}

va_todo_11();
?>

<h3>12. Дана строка. Проверьте, что она начинается на 'http://' или на 'https://'. Если это так, выведите 'да', если не так - 'нет'.</h3>

<?php
function va_todo_12() {
	$str = 'https://php/lesson';

	if ( substr( $str, 0, 7 ) === 'http://' || substr( $str, 0, 8 ) === 'https://' ) {
		echo 'Да';
	} else {
		echo 'Нет';
	}
}

va_todo_12();
?>

<h3>13. Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.</h3>

<?php
function va_todo_13() {
	$str = 'picture.png';

	if ( substr( $str, -4 ) === '.png' ) {
		echo 'Да';
	} else {
		echo 'Нет';
	}
}

va_todo_13();
?>

<h3>14.Дана строка. Проверьте, что она заканчивается на '.png' или на '.jpg'. Если это так, выведите 'да', если не так - 'нет'.</h3>

<?php
function va_todo_14() {
	$str = 'picture.jpg';

	if ( substr( $str, -4 ) === '.png' || substr( $str, -4 ) === '.jpg' ) {
		echo 'Да';
	} else {
		echo 'Нет';
	}
}

va_todo_14();
?>

<h3>15. Дана строка. Если в этой строке более 5-ти символов - вырежите из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.</h3>

<?php
function va_todo_15() {
	$str = '1234567';

	if ( strlen( $str ) > 5 ) {
		echo substr( $str, 0, 5 ) . '...';
	} elseif ( strlen( $str ) <= 5 ) {
		echo $str;
	}
}

va_todo_15();
?>

<h3>16. Дана строка '31.12.2013'. Замените все точки на дефисы.</h3>

<?php
function va_todo_16() {
	$str = '31.12.2013';

	echo str_replace( '.', '-', $str );
}

va_todo_16();
?>

<h3>17. Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.</h3>

<?php
function va_todo_17() {
	$str = 'abc';
	$r   = str_replace( 'abc', '123', $str );

	echo $r;
}

va_todo_17();
?>

<h3>18. Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры. То есть в нашем случае должна получится строка 'abcbdefgh'.</h3>

<?php
function va_todo_18() {
	$str = '1a2b3c4b5d6e7f8g9h0';
	$r   = str_replace( array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 0 ), '', $str );

	echo $r;
}

va_todo_18();
?>

<h3>19. Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3. Решите задачу двумя способами работы с функцией strtr (массив замен и две строки замен).</h3>

<?php
function va_todo_19() {
	$str = 'abcaabbcc';
	$r   = strtr( $str, 'abc', '123' );
	$r2  = strtr(
		$str,
		array(
			'a' => '1',
			'b' => '2',
			'c' => '3',
		)
	);

	echo $r . '<br>';
	echo $r;
}

va_todo_19();
?>

<h3>20. Дана строка $str. Вырежите из нее подстроку с 3-го символа (отсчет с нуля), 5 штук и вместо нее вставьте '!!!'.</h3>

<?php
function va_todo_20() {
	$str = 'abcaabbcc';
	$res = substr_replace( $str, '!!!', 0, 5 );

	echo $res;
}

va_todo_20();
?>

<h3>21. Дана строка 'abc abc abc'. Определите позицию первой буквы 'b'.</h3>

<?php
function va_todo_21() {
	$str = 'abc abc abc';
	$res = strpos( $str, 'b', 0 );

	echo $res;
}

va_todo_21();
?>

<h3>22.Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.</h3>

<?php
function va_todo_22() {
	$str = 'abc abc abc';
	$res = strrpos( $str, 'b', 0 );

	echo $res;
}

va_todo_22();
?>

<h3>23. Дана строка 'abc abc abc'. Определите позицию первой найденной буквы 'b', если начать поиск не с начала строки, а с позиции 3.</h3>

<?php
function va_todo_23() {
	$str = 'abc abc abc';
	$res = strpos( $str, 'b', 3 );

	echo $res;
}

va_todo_23();
?>

<h3>24. Дана строка 'aaa aaa aaa aaa aaa'. Определите позицию второго пробела.</h3>

<?php
function va_todo_24() {
	$str = 'aaa aaa aaa aaa aaa';
	$res = strpos( $str, ' ', 4 );

	echo $res;
}

va_todo_24();
?>

<h3>25. Проверьте, что в строке есть две точки подряд. Если это так - выведите 'есть', если не так - 'нет'.</h3>

<?php
function va_todo_25() {
	$str = 'aaa..aaa aaa aaa aaa';

	if ( strpos( $str, '..' ) || 0 === strpos( $str, '..' ) ) {
		echo 'Есть';
	} else {
		echo 'Нет';
	}
}

va_todo_25();
?>

<h3>26. Проверьте, что строка начинается на 'http://'. Если это так - выведите 'да', если не так - 'нет'.</h3>

<?php
function va_todo_26() {
	$str = 'http://php/course';

	if ( strpos( $str, 'http://' ) === 0 ) {
		echo 'Да';
	} else {
		echo 'Нет';
	}
}

va_todo_26();
?>

<h3>27.Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.</h3>

<?php
function va_todo_27() {
	$str = 'html css php';
	$arr = explode( ' ', $str );

	var_dump( $arr );
}

va_todo_27();
?>

<h3>28.Дан массив с элементами 'html', 'css', 'php'. С помощью функции implode создайте строку из этих элементов, разделенных запятыми.</h3>

<?php
function va_todo_28() {
	$arr = array( 'html', 'css', 'php' );
	$str = implode( ',', $arr );

	echo $str;
}

va_todo_28();
?>

<h3>29.В переменной $date лежит дата в формате '2013-12-31'. Преобразуйте эту дату в формат '31.12.2013'.</h3>

<?php
function va_todo_29() {
	$date = '2013-12-31';
	$arr  = explode( '-', $date );

	echo $arr[2] . '.' . $arr[1] . '.' . $arr[0];
}

va_todo_29();
?>

<h3>30. Дана строка '1234567890'. Разбейте ее на массив с элементами '12', '34', '56', '78', '90'.</h3>

<?php
function va_todo_30() {
	$str = '1234567890';
	$arr = str_split( $str, 2 );

	var_dump( $arr );
}

va_todo_30();
?>

<h3>31. Дана строка '1234567890'. Разбейте ее на массив с элементами '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'.</h3>

<?php
function va_todo_31() {
	$str = '1234567890';
	$arr = str_split( $str, 1 );

	var_dump( $arr );
}

va_todo_31();
?>

<h3>32. Дана строка '1234567890'. Сделайте из нее строку '12-34-56-78-90' не используя цикл.</h3>

<?php
function va_todo_32() {
	$str  = '1234567890';
	$arr  = str_split( $str, 2 );
	$str2 = implode( '-', $arr );

	echo $str2;
}

va_todo_32();
?>

<h3>33.Дана строка. Очистите ее от концевых пробелов.</h3>

<?php
function va_todo_33() {
	$str = ' 1234567890 ';
	$r   = trim( $str );

	echo '.' . $r . '.';
	echo $str;
}

va_todo_33();
?>

<h3>34.Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши.</h3>

<?php
function va_todo_34() {
	$str = '/php/';
	$r   = trim( $str, '/' );

	echo $r;
}

va_todo_34();
?>

<h3>35. Дана строка 'слова слова слова.'. В конце этой строки может быть точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла точка. То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать. Задачу решите через rtrim без всяких ифов.</h3>

<?php
function va_todo_35() {
	$str = 'слова слова слова.';
	$r   = rtrim( $str, '.' );

	echo $r . '.';
}

va_todo_35();
?>

<h3>36. Дана строка '12345'. Сделайте из нее строку '54321'.</h3>

<?php
function va_todo_36() {
	$str = '12345';
	$r   = strrev( '12345' );

	echo $r;
}

va_todo_36();
?>

<h3>37. Проверьте, является ли слово палиндромом (одинаково читается во всех направлениях, примеры таких слов: madam, otto, kayak, nun, level).</h3>

<?php
function va_todo_37() {
	$str = 'level';

	if ( strrev( $str ) === $str ) {
		echo $str . ' - Слово является палиндромом';
	} else {
		echo 'Слово не является палиндромом';
	}
}

va_todo_37();
?>

<h3>38. Дана строка. Перемешайте символы этой строки в случайном порядке.</h3>

<?php
function va_todo_38() {
	$str = 'level';
	$r   = str_shuffle( $str );

	echo $r;
}

va_todo_38();
?>

<h3>39. Создайте строку из 6-ти случайных маленьких латинских букв так, чтобы буквы не повторялись. Нужно сделать так, чтобы в нашей строке могла быть любая латинская буква, а не ограниченный набор.</h3>

<?php
function va_todo_39() {
	$str = 'qwertyuiopasdfghjklzxcvbnm';
	$res = str_shuffle( substr( $str, 0, 6 ) );

	echo $res;
}

va_todo_39();
?>

<h3>40. Дана строка '12345678'. Сделайте из нее строку '12 345 678'.</h3>

<?php
function va_todo_40() {
	$str = '12345678';
	$res = number_format( $str, 0, '.', ' ' );
	echo $res;
}

va_todo_40();
?>

<h3>41. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5. Решите задачу с помощью одного цикла и функции str_repeat.
x<br>xx<br>xxx<br>xxxx<br>xxxxx<br></h3>

<?php
function va_todo_41() {
	$str = 'x';
	$row = 9;

	for ( $i = 1; $i <= $row; $i++ ) {
		echo str_repeat( $str, $i ) . '<br>';
	}
}

va_todo_41();
?>

<h3>42. Нарисуйте пирамиду, как показано на рисунке. Решите задачу с помощью одного цикла и функции str_repeat.</h3>

<?php
function va_todo_42() {
	$row = 9;

	for ( $i = 1; $i <= $row; $i++ ) {
		echo str_repeat( $i, $i ) . '<br>';
	}
}

va_todo_42();
?>


<h3>43. Дана строка 'html, <b>php</b>, js'. Удалите теги из этой строки.</h3>

<?php
function va_todo_43() {
	$str = 'html, <b>php</b>, js';
	$res = strip_tags( $str );

	echo $res;
}

va_todo_43();
?>

<h3>44.Дана строка $str. Удалите все теги из этой строки, кроме тегов </b> и </i>.</h3>

<?php
function va_todo_44() {
	$str = 'html, <b>php</b>, <i>js</i>';
	$res = strip_tags( $str, '<b><i>' );

	echo $res;
}

va_todo_44();
?>

<h3>45. Дана строка 'html, <b>php</b>, js'. Выведите ее на экран 'как есть': то есть браузер не должен преобразовать </b> в жирный.</h3>

<?php
function va_todo_45() {
	$str = 'html, <b>php</b>, js';

	echo htmlspecialchars( $str );
}

va_todo_45();
?>

<h3>46. Узнайте код символов 'a', 'b', 'c', пробела.</h3>

<?php
function va_todo_46() {

	echo ord( 'a' ) . '<br>';
	echo ord( 'b' ) . '<br>';
	echo ord( 'c' ) . '<br>';
	echo ord( ' ' ) . '<br>';
}

va_todo_46();
?>

<h3>47. Изучите таблицу ASCII. Определите границы, в которых располагаются буквы английского алфавита.</h3>

<?php
function va_todo_47() {

	echo ord( 'A' ) . ' - ' . ord( 'Z' ) . ' Большие букви<br>';
	echo ord( 'a' ) . ' - ' . ord( 'z' ) . ' Малинькие букви';
}

va_todo_47();
?>

<h3>48. Выведите на экран символ с кодом 33.</h3>

<?php
function va_todo_48() {

	echo chr( '33' );
}

va_todo_48();
?>

<h3>49.Запишите в переменную $str случайный символ - большую букву латинского алфавита. Подсказка: с помощью таблицы ASCII определите какие целые числа соответствуют большим буквам латинского алфавита.</h3>

<?php
function va_todo_49() {
	$str = chr( mt_rand( 65, 90 ) );

	echo $str;
}

va_todo_49();
?>

<h3>50.Запишите в переменную $str случайную строку $len длиной, состоящую из маленьких букв латинского алфавита. Подсказка: воспользуйтесь циклом for или while.</h3>

<?php
function va_todo_50() {
	$str = '';
	$len = 8;

	for ( $i = 1; $i <= $len; $i++ ) {
		$str .= chr( mt_rand( 97, 122 ) );
	}

	echo $str;
}

va_todo_50();
?>

<h3>51.Дана буква английского алфавита. Узнайте, она маленькая или большая.</h3>

<?php
function va_todo_51() {
	$lett = 'k';

	if ( ord( $lett ) >= 65 && ord( $lett ) <= 90 ) {
		echo $arr . ' большая буква';
	} elseif ( ord( $lett ) >= 97 && ord( $lett ) <= 122 ) {
		echo $lett . ' маленькая буква';
	}
}

va_todo_51();
?>

<h3>52. Дана строка 'ab-cd-ef'. С помощью функции strchr выведите на экран строку '-cd-ef'.</h3>

<?php
function va_todo_52() {
	$str = 'ab-cd-ef';

	echo strchr( $str, '-' );
}

va_todo_52();
?>

<h3>53. Дана строка 'ab-cd-ef'. С помощью функции strrchr выведите на экран строку '-ef'.</h3>

<?php
function va_todo_53() {
	$str = 'ab-cd-ef';

	echo strrchr( $str, '-' );
}

va_todo_53();
?>

<h3>54.Дана строка 'ab--cd--ef'. С помощью функции strstr выведите на экран строку '--cd--ef'.</h3>

<?php
function va_todo_54() {
	$str = 'ab--cd--ef';

	echo strstr( $str, '--' );
}

va_todo_54();
?>

<h3>55.Преобразуйте строку 'var_test_text' в 'varTestText'. Скрипт, конечно же, должен работать с любыми аналогичными строками.</h3>

<?php
function va_todo_55() {
	$str  = 'var_test_text';
	$str2 = str_replace( '_', ' ', $str );
	$str3 = ucwords( $str2 );

	echo lcfirst( str_replace( ' ', '', $str3 ) );
}

va_todo_55();
?>

<h3>56. Дан массив с числами. Выведите на экран все числа, в которых есть цифра 3.</h3>

<?php
function va_todo_56() {
	$arr = array( 1, 3, 23, 4, 13, 85, 73 );

	foreach ( $arr as $value ) {
		if ( strpos( $value, '3' ) !== false ) {
			echo $value . '<br>';
		}
	}
}

va_todo_56();
?>
