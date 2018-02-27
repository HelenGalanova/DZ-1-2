<h1>Задание №6</h1>
<p>
    1. Создайте массив $bmw с ячейками: <br>
    a. model<br>
    b. speed<br>
    c. doors<br>
    d. year<br>
    2. Заполните ячейки значениями соответсвенно: “X5”, 120, 5, “2015”<br>
    3. Создайте массивы $toyota и $opel аналогичные массиву $bmw<br>
    (заполните данными)<br>
    4. Объедините три массива в один многомерный массив<br>

    <br>
</p>

<?php
$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2018
];

$toyota = [
    'model' => 'Corolla',
    'speed' => 100,
    'doors' => 4,
    'year' => 2018
];

$opel = [
    'model' => 'Astra',
    'speed' => 115,
    'doors' => 4,
    'year' => 2018
];

$cars = [$bmw, $toyota, $opel];

foreach ($cars as $value) {
    echo 'Модель: ' . $value['model'] . "<br />\r"
        . 'Скорость: ' . $value['speed'] . "<br />\r"
        . 'Двери: ' . $value['doors'] . "<br />\r"
        . 'Год выпуска: ' . $value['year'] . "<br />\r<br />\r";
}
?>