<?php

require_once "../php-playground/php-dasar-todolist-studi-kasus/Model/Todolist.php";
require_once "../php-playground/php-dasar-todolist-studi-kasus/BusinessLogic/AddToDoList.php";
require_once "../php-playground/php-dasar-todolist-studi-kasus/Helper/Input.php";


function viewAddToDoList()
{

    echo "\nMENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo == "x") {
        // batal
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        addToDoList($todo);
    }
}
