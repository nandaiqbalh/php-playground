<?php

require_once "../php-playground/php-oop-todolist-studi-kasus/Entity/TodoList.php";
require_once "../php-playground/php-oop-todolist-studi-kasus/Helper/InputHelper.php";
require_once "../php-playground/php-oop-todolist-studi-kasus/Repository/TodolistRepository.php";
require_once "../php-playground/php-oop-todolist-studi-kasus/Service/TodolistService.php";
require_once "../php-playground/php-oop-todolist-studi-kasus/View/TodolistView.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;
use View\TodolistView;

echo "APP TO DO LIST" . PHP_EOL;

$todolistRepository = new TodolistRepositoryImpl();
$todolistService = new TodolistServiceImpl($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodolist();

