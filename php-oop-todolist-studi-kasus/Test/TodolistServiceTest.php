<?php

require_once "../php-playground/php-oop-todolist-studi-kasus/Entity/TodoList.php";
require_once "../php-playground/php-oop-todolist-studi-kasus/Repository/TodolistRepository.php";
require_once "../php-playground/php-oop-todolist-studi-kasus/Service/TodolistService.php";


use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(): void{

  $todolistRepository = new TodolistRepositoryImpl();
  $todolistRepository->todoList[1] = "Dhuha";
  $todolistRepository->todoList[2] = "Tahajud";
  $todolistRepository->todoList[3] = "Puasa";

  $todolistService = new TodolistServiceImpl($todolistRepository);
  $todolistService->showTodolist();
}
testShowTodolist();

 ?>
