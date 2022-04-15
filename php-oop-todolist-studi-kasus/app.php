<?php

require_once "../php-playground/php-dasar-todolist-studi-kasus/Model/Todolist.php";
require_once "../php-playground/php-dasar-todolist-studi-kasus/Model/Todolist.php";

// reuquire business logic
require_once "../php-playground/php-dasar-todolist-studi-kasus/BusinessLogic/ShowToDoList.php";
require_once "../php-playground/php-dasar-todolist-studi-kasus/BusinessLogic/AddToDoList.php";
require_once "../php-playground/php-dasar-todolist-studi-kasus/BusinessLogic/RemoveToDoList.php";

// require view
require_once "../php-playground/php-dasar-todolist-studi-kasus/View/ViewShowToDoList.php";
require_once "../php-playground/php-dasar-todolist-studi-kasus/View/ViewAddToDoList.php";
require_once "../php-playground/php-dasar-todolist-studi-kasus/View/ViewRemoveToDoList.php";

// require helper
require_once "../php-playground/php-dasar-todolist-studi-kasus/Helper/Input.php";

echo "APP TO DO LIST" . PHP_EOL;

viesShowToDoList();
