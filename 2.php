<?php

function determineTriangleType($a, $b, $c) {
    
    if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
        return "Треугольник с такими сторонами не существует.";
    }

    // Определение типа треугольника
    if ($a == $b && $b == $c) {
        return "Равносторонний треугольник";
    } elseif ($a == $b || $b == $c || $a == $c) {
        return "Равнобедренный треугольник";
    } else {
        return "Разносторонний треугольник";
    }
}

echo "Введите длину первой стороны: ";
$a = (float)trim(fgets(STDIN));

echo "Введите длину второй стороны: ";
$b = (float)trim(fgets(STDIN));

echo "Введите длину третьей стороны: ";
$c = (float)trim(fgets(STDIN));

// Проверка на положительные числа
if ($a <= 0 || $b <= 0 || $c <= 0) {
    echo "Все стороны должны быть положительными числами.\n";
    exit;
}

echo determineTriangleType($a, $b, $c) . "\n";
?>