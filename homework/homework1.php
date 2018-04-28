<?php
//1
$i = 6;
echo(++$i + $i++);//14
echo('<br>');
$i = 1;
echo(++$i + $i++ + $i);//7
echo('<br>');
$a = 2;
echo($a++ + (--$a * ++$a));//8
echo('<br>');

//2
$login = 'Evgen'; 
echo("Вы вошли под именем $login"); //переменная login не существует
                                    //поэтому вместо её значения вернётся пустое место
echo('<br>');
unset($login);
echo("Вы вошли под именем $login"); //переменная login не существует
                                    //поэтому вместо её значения вернётся пустое место
echo('<br>');

//3
$a = 3;
$b = 5;
echo($a*$a + $b*$b);//34
echo('<br>');

//4
$S = 50;
$t = 2;
echo('Скорость a = '.($S/$t).' км/ч ('.round($S/$t*1000/3600, 2).' м/с)');
echo('<br>');

//5
const CONST1 = 12;
echo(CONST1);//12
echo('<br>');
const CONST1 = 8;
echo(CONST1);//12
echo('<br>');

//6
$m = 8;
$n = 11.45;
echo(abs(10 - $m) > abs(10 - $n) ? $n : $m);//11.45
echo('<br>');

//7
$x = 28;
$x1 = $x%10;
$x2 = (integer)($x/10);
echo($x1 > $x2 ?$x1 :$x2);
echo('<br>');

$y = 774;
$y1 = $y%10;
$y2 = (integer)($y%100/10);
$y3 = (integer)($y/100);
if($y1>=$y2 && $y1>=$y3) echo($y1);
    else if($y2>=$y1 && $y2>=$y3) echo($y2);
     else echo($y3);
echo('<br>');

//8
$a = 3.867;
echo(round($a, 0, PHP_ROUND_HALF_UP));//4
echo('<br>');

//9
$y = 774;
$y1 = $y%10;
$y2 = (integer)($y%100/10);
$y3 = (integer)($y/100);
echo($y1 + $y2 + $y3);//18
echo('<br>');
