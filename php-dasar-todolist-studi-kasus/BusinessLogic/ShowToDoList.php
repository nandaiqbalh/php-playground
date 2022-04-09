<?php

/**
 * Menambilkan to do yang ada pada list
 */

function showToDoList()
{

    // Mengambil variabel array todolist dari global scope
    // yang ada pada Model
    global $todoList;

    // judul aplikasi
    echo "TODO LIST" . PHP_EOL;

    // foreach untuk menampilkan
    foreach ($todoList as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}
