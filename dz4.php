<h1>Задание №4</h1>

<p>1. Создайте константу и присвойте ей значение.<br>
    2. Проверьте, существует ли константа, которую Вы хотите использовать<br>
    3. Выведите значение созданной константы<br>
    4. Попытайтесь изменить значение созданной константы.<br></p>

<?php
$age = 80;
if ($age >= 18 and $age < 65) {
    echo "Вам ещё работать и работать";
} elseif ($age >= 1 and $age < 18) {
    echo "Вам ещё рано работать";
} elseif ($age >= 65) {
    echo "Вам пора на пенсию";
} else {
    echo "Неизвестный возраст";
}
?>