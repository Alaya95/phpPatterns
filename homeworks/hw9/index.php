<?php
// 1. Создать массив на миллион элементов и отсортировать его различными способами. Сравнить скорости.

//Массив был создан на 100 000 элементов. Далее результаты будут сортированы по времени.

// Сортировка, занявшая менее 1 сек :

// Сортировка из PHP:                   0.016930818557739
// Сортировка голубиная:                0.028285026550293
// Сортировка пирамидальная SPL:        0.041852951049805
// Сортировка быстрая чужая:            0.070704936981201
// Сортировка быстрая наша:             0.12657499313354
// Сортировка пирамидальная:            0.26262998580933
// Сортировка расческой:                0.27153491973877

// Сортировка, занявшая более 1 сек:

// Сортировка слиянием:                 2.6486189365387

//Сортировка массивов, занявшая более 1 минуты:

// Сортировка выбором:                  95.071699142456
// Сортировка пузырьком:                202.58375000954
// Сортировка вставками:                365.64616703987
// Сортировка вставками сорт. массива:  368.28354811668

// 2. Реализовать удаление элемента массива по его значению. Обратите внимание на возможные дубликаты!


function createArray($arrLength, $minNum, $maxNum): array
{
    $newArr = [];

    for ($i = 0; $i < $arrLength; $i++) {
        $newArr[] = mt_rand($minNum, $maxNum);
    }

    return $newArr;
}

function treeSort(array $list): array
{
    $tree = new SplMinHeap();

    foreach ($list as $n) {
        $tree->insert($n);
    }

    $list = [];

    while ($tree->valid()) {
        $list[] = $tree->top();
        $tree->next();
    }

    return $list;
}

function interpolationSearch($myArray, $num)
{
    $start = 0;
    $end = count($myArray) - 1;
    $n = 0;

    while (($start <= $end) && ($num >= $myArray[$start]) && ($num <= $myArray[$end])) {
        $n++;
        $base = floor($start +
            ($end - $start) / ($myArray[$end] - $myArray[$start])
            * ($num - $myArray[$start])
        );

        echo "Проверяется элемент с индексом: $base" . PHP_EOL;

        if ($myArray[$base] == $num) {
            echo "Количество итераций: $n искомого числа $num под индексом $base" . PHP_EOL;
            return $base;
        } elseif ($myArray[$base] < $num) {
            $start = $base + 1;
        } else {
            $end = $base - 1;
        }
    }
    echo "ЧИСЛО НЕ НАЙДЕНО! Количество итераций: $n" . PHP_EOL;
    return null;

}

function unsetEl($arr)
{
    $num = rand(0, 50);

    while (interpolationSearch($arr, $num)) {
        if (($key = array_search($num, $arr)) !== FALSE) {
            unset($arr[$key]);
        }
    }

    return $arr;
}


$myArr = createArray(100, 0, 50);
$treeSortArr = treeSort($myArr);
$newArr = unsetEl($treeSortArr);


// 3. Подсчитать практически количество шагов при поиске описанными в методичке алгоритмами.

/*
 * Линейный - 10 шагов.
 *  Бинарный - 2 шага
 *  Интерполяционный поиск - 2 шага
 */


// 4. * Выписав первые шесть простых чисел, получим 2, 3, 5, 7, 11 и 13.
// Очевидно, что 6-е простое число — 13. Какое число является 10001-м простым числом?