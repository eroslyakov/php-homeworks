<?php
//Задача 1
//Создать функцию с аргументом для вывода приветствия. Установить значение по умолчанию для аргумента равное «Гость»
//
function greet($name='Гость') {
    echo "Привет, $name!";
}

greet();
greet('Евгений');
echo "<br>";
//Задача 2
//Допустим, пользователь вводит названия городов через пробел. Вы их присваиваете переменной.
//Переставьте названия так, чтобы названия были упорядочены по алфавиту.
//
$inStr = "Санкт-Петребург Москва Воронеж Рязань Екатеринбург Казань";
$arr = str_getcsv($inStr, ' ');
asort($arr);
$inStr = implode(' ', $arr);
var_dump($inStr);
echo "<br>";
    
//Задача 3
//Написать функцию - конвертер строки.
//Возможности:
//перевод всех символов в верхний регистр,
//перевод всех символов в нижний регистр,
//перевод всех символов в нижний регистр и первых символов слов в верхний регистр.
//Это должна быть одна функция
//
function conv($str, $act) {
    if($act=="up") echo strtoupper($str);
        else if($act=="down") echo strtolower($str);
        else echo ucwords($str);
}

$inStr = "St. Petersburg Moscow Voronezh Ryazan Kazan";
conv($inStr, "up");
echo "<br>";
conv($inStr, "down");
echo "<br>";
conv($inStr, "sdfsd");
echo "<br>";
//Задача 4
//Используя функцию удаления HTML и PHP-тегов из строки, выведите на экран строку «<h1>Hello, world!</h1>».
//Строка не должна выглядеть как заголовок первого уровня – все теги должны быть удалены.
//

$inStr = "<h1>Hello, world!</h1>";
echo strip_tags($inStr);
echo "<br>";
//Задача 5
//Создайте массив. Объедините все элементы массива в строку и выведите её на экран.
//
$arr = ["St.Petersburg", "Moscow", "Voronezh", "Ryazan", "Kazan"];

echo implode(' ', $arr);
echo "<br>";
//Задача 6
//В переменной $date лежит дата в формате '30-11-2017'. Преобразуйте эту дату в формат '2017.11.30'.
//
$date='30-11-2017';
$arr = explode("-", $date);
echo implode(".", $arr);
echo "<br>";
//Задача 7
//Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши.
//
$arr = '/php/';

echo trim($arr, "/");
echo "<br>";
//Задача 8
//Дана строка 'просто строка.'. В конце этой строки может быть точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла точка. То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать. Задачу решите через rtrim
$str1 = 'просто строка.';
$str2 = 'просто строка';

function addDot($str) {
    $str = rtrim($str, ".");
    return $str = $str.'.';
}

echo addDot($str1);
echo "<br>";
echo addDot($str2);
echo "<br>";