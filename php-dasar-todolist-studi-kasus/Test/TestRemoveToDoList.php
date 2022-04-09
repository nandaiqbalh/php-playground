<?php
require_once "../php-playground/php-dasar-todolist-studi-kasus/Model/Todolist.php";
require_once "../php-playground/php-dasar-todolist-studi-kasus/BusinessLogic/RemoveToDoList.php";
require_once "../php-playground/php-dasar-todolist-studi-kasus/BusinessLogic/AddToDoList.php";
require_once "../php-playground/php-dasar-todolist-studi-kasus/BusinessLogic/ShowToDoList.php";

addToDoList("Belajar");
addToDoList("Tadarus");
addToDoList("Sholat Tahajud");

showToDoList();

removeToDoList(2);
echo "\n";
showToDoList();
addToDoList("Sholat Dhuha");
removeToDoList(1);
echo "\n";
showToDoList();
