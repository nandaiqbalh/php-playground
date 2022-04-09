<?php

require_once "Model/Todolist.php";

// reuquire business logic
require_once "BusinessLogic/ShowToDoList.php";
require_once "BusinessLogic/AddToDoList.php";
require_once "BusinessLogic/RemoveToDoList.php";

// require view
require_once "View/ViewShowToDoList.php";
require_once "View/ViewAddToDoList.php";
require_once "View/ViewRemoveToDoList.php";

echo "APP TO DO LIST" . PHP_EOL;
