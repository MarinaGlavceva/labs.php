<?php

// Создание переменных
$days = 288;
$message = "Все возвращаются на работу!";

// Вывод с использованием конкатенации
echo "Осталось " . $days . " дней. " . $message . "<br>";

// Вывод с использованием двойных кавычек (интерполяция переменных)
echo "Осталось $days дней. $message <br>";

// Вывод с использованием print и конкатенации
print "Осталось " . $days . " дней. " . $message . "<br>";

// Вывод с использованием print и двойных кавычек
print "Осталось $days дней. $message <br>";

?>
