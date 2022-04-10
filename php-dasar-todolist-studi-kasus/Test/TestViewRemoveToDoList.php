<?php
require_once "../php-playground/php-dasar-todolist-studi-kasus/Model/Todolist.php";

require_once "../php-playground/php-dasar-todolist-studi-kasus/View/ViewShowToDoList.php";
require_once "../php-playground/php-dasar-todolist-studi-kasus/BusinessLogic/AddToDoList.php";
require_once "../php-playground/php-dasar-todolist-studi-kasus/BusinessLogic/RemoveToDoList.php";

addToDoList("Nanda");
addToDoList("Iqbal");
addToDoList("Hanafi");

viewRemoveToDoList();

viesShowToDoList();
