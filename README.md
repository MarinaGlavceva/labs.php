# Лабораторная работа №1: Установка и первая программа на PHP

## Цель работы
Целью моей лабораторной работы является установка и настройка среды разработки для работы с языком программирования PHP, а также создание моей первой программы на PHP.

---

## Условие

### Шаг 1: Альтернативный способ установки PHP через XAMPP
> Выбираю **либо Шаг 1, либо Шаг 2** для установки PHP.

1. Перешла на сайт: [https://www.apachefriends.org](https://www.apachefriends.org).
2. Скачала и установила XAMPP, выбрав компоненты:
   - Apache
   - PHP
   - phpMyAdmin
3. Запустила **XAMPP Control Panel** и включила **Apache**.
4. Проверила работу сервера, открыв [http://localhost](http://localhost) в браузере.

### Шаг 3: Написание первой PHP-программы
1. Создала директорию для проекта, например: `D:\Projects\PHP\01_Introduction`.
2. Создала файл `index3.php` и открыла его в текстовом редакторе.
3. Вставила следующий код:
   ```php
   <?php
   echo "Привет, мир!";
   ?>
   ```
4. Запустила программу:
   - Если использую **встроенный сервер PHP**:
     ```sh
     php -S localhost:8000
     ```
     Затем открыла [http://localhost:8000](http://localhost:8000) в браузере.
   - Если использую **XAMPP**, скопировала файл `index.php` в папку `htdocs` и открыла [http://localhost/index.php](http://localhost/index.php) в браузере.

### Шаг 4: Вывод данных в PHP
Вывела строку "Hello, World!" различными способами:
```php
<?php
   echo "Hello, World with echo!";
   print "Hello, World with print!";
?>
```

### Шаг 5: Работа с переменными и выводом
1. Создала две переменные:
   ```php
   <?php
   $days = 288; // Целочисленная переменная
   $message = "Все возвращаются на работу!"; // Строковая переменная
   ?>
   ```
2. Вывела их значения несколькими способами:
   - **С использованием конкатенации (`.`):**
     ```php
     echo "Число дней: " . $days . "<br>";
     echo "Сообщение: " . $message . "<br>";
     ```
   - **С использованием двойных кавычек:**
     ```php
     echo "Число дней: $days <br>";
     echo "Сообщение: $message <br>";
     ```
   - **С использованием `print()`:**
     ```php
     print "Число дней: " . $days . "<br>";
     print "Сообщение: " . $message . "<br>";
     ```

---

## Контрольные вопросы
1. **Какие способы установки PHP существуют?**
   - Установка вручную с [php.net](https://www.php.net/downloads).
   - Использование XAMPP, который включает PHP, Apache и MySQL.

2. **Как проверить, что PHP установлен и работает?**
   - В командной строке выполнить:
     ```sh
     php -v
     ```
   - Создать PHP-файл и открыть его через веб-сервер.

3. **Чем отличается оператор `echo` от `print`?**
   - `echo` может выводить несколько аргументов через запятую и работает быстрее.
   - `print` всегда возвращает `1`, что делает его полезным в выражениях.
   ```php
   echo "Hello", " World!"; // Работает
   print "Hello"; // Работает
   ```
   Но `print` не поддерживает множественные аргументы:
   ```php
   print "Hello", " World!"; // Ошибка
   ```

---

## Вывод
В ходе выполнения лабораторной работы я установила и настроила среду разработки PHP, а также написала и запустила свои первые программы. Разобрала способы установки, работу с переменными и операторами вывода данных.


