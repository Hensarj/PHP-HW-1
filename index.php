<?php

//Задание №1
$name = 'Олег';
$age = '28';
echo "Меня зовут: $name";
echo '<br>';
echo "Мне $age лет";
echo '<br>';
echo '“!|\\/\’”\\';
echo '<br>';
echo '<br>';

//Задание №2
const PICTURES = 80;
const MARKER = 23;
const PENCIL = 40;
const OIL = PICTURES - MARKER - PENCIL;
echo 'Рисунков выполнено красками: ' . OIL;
echo '<br>';
echo '<br>';

//Задание №3
$age = random_int(1, 100);
echo "Всевышний решил, что вам $age лет.";
echo '<br>';
if ($age >= 18 & $age <= 65) {
    echo 'Вам еще работать и работать';
    echo '<br>';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
    echo '<br>';
} elseif
($age > 65) {
    echo 'Вам пора на пенсию';
    echo '<br>';
} elseif
($age >= 1 & $age <= 17) {
    echo 'Вам ещё рано работать';
    echo '<br>';
} else {
    echo 'Неизвестный возраст';
    echo '<br>';
}
echo '<br>';

//Задание №4
$day = random_int(1, 9);
echo "Сегодня день недели под цифрой $day";
echo '<br>';
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Это рабочий день';
        echo '<br>';
        break;
    case 6:
    case 7:
        echo 'Это выходной день';
        echo '<br>';
        break;
    default:
        echo 'Неизвестный день';
        echo '<br>';
        break;
}
echo '<br>';

//Задание №5
$bmw['model'] = 'X5';
$bmw['speed'] = 120;
$bmw['doors'] = 5;
$bmw['year'] = 2015;

$toyota['model'] = 'Lancer';
$toyota['speed'] = 220;
$toyota['doors'] = 3;
$toyota['year'] = 2013;

$opel['model'] = 'Astra';
$opel['speed'] = 180;
$opel['doors'] = 4;
$opel['year'] = 2010;

$cars[] = $bmw;
$cars[] = $toyota;
$cars[] = $opel;

for ($i = 0; $i <= 2; $i++) {
    switch ($i) {
        case 0:
            echo 'CAR bmw';
            break;
        case 1:
            echo 'CAR toyota';
            break;
        case 2:
            echo 'CAR opel';
            break;
    }
    echo '<br>';
    echo $cars[$i][model] . ' ' . $cars[$i][speed] . ' ' . $cars[$i][doors] . ' ' . $cars[$i][year];
    echo '<br>';
    echo '<br>';
}

//Задание №6
echo '<table>';
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 10; $j++) {
        echo '<td>';
        $element = $i * $j;
        if ($i % 2 == 0 & $j % 2 == 0) {
            echo "($element)";
        } elseif ($i % 2 != 0 & $j % 2 != 0) {
            echo "[$element]";
        } else {
            echo "$element";
        }
    }
}
