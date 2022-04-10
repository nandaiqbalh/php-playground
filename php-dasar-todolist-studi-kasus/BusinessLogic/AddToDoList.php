<?php

/**
 * Menambahkan to do ke List
 */
require_once "../php-playground/php-dasar-todolist-studi-kasus/Model/Todolist.php";

function addToDoList(string $inputToDo)
{
    global $todoList;

    // mengetahui number todolist sekarang (+1 karena agar nambahinnya di 
    // setelah data terakhir)
    $number = sizeof($todoList) + 1;

    $todoList[$number] = $inputToDo;
}
