<?php

/**
 * Menambahkan to do ke List
 */
function addToDoList(string $inputToDo)
{
    global $todoList;

    // mengetahui number todolist sekarang (+1 karena agar nambahinnya di 
    // setelah data terakhir)
    $number = sizeof($todoList) + 1;

    $todoList[$number] = $inputToDo;
}
