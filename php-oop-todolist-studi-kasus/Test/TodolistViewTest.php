<?php
require_once "../php-playground/php-oop-todolist-studi-kasus/Helper/InputHelper.php";
require_once "../php-playground/php-oop-todolist-studi-kasus/Entity/TodoList.php";
require_once "../php-playground/php-oop-todolist-studi-kasus/Repository/TodolistRepository.php";
require_once "../php-playground/php-oop-todolist-studi-kasus/Service/TodolistService.php";
require_once "../php-playground/php-oop-todolist-studi-kasus/View/TodolistView.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;
use View\TodolistView;

function testViewShowTodoList() : void{

  $todolistRepository = new TodolistRepositoryImpl();
  $todolistService = new TodolistServiceImpl($todolistRepository);
  $todolistView = new TodolistView($todolistService);

  $todolistService->addTodolist("Tahajud");
  $todolistService->addTodolist("Dhuha");
  $todolistService->addTodolist("Puasa");

  $todolistView->showTodolist();
  
}

function testViewAddTodoList() : void{

  $todolistRepository = new TodolistRepositoryImpl();
  $todolistService = new TodolistServiceImpl($todolistRepository);
  $todolistView = new TodolistView($todolistService);

  $todolistService->addTodolist("Tahajud");
  $todolistService->addTodolist("Dhuha");
  $todolistService->addTodolist("Puasa");
  
  $todolistView->showTodolist();
  $todolistView->addTodolist();
    
}
testViewAddTodoList();
 ?>
