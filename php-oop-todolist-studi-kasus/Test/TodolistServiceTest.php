<?php

require_once "../php-playground/php-oop-todolist-studi-kasus/Entity/TodoList.php";
require_once "../php-playground/php-oop-todolist-studi-kasus/Repository/TodolistRepository.php";
require_once "../php-playground/php-oop-todolist-studi-kasus/Service/TodolistService.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(): void{

  $todolistRepository = new TodolistRepositoryImpl();
  $todolistRepository->todoList[1] = new Todolist("Dhuha");
  $todolistRepository->todoList[2] = new Todolist("Tahajud");
  $todolistRepository->todoList[3] = new Todolist("Puasa");

  $todolistService = new TodolistServiceImpl($todolistRepository);
  $todolistService->showTodolist();
}

function testAddTodolist(): void{

  $todolistRepository = new TodolistRepositoryImpl();
  $todolistService = new TodolistServiceImpl($todolistRepository);
  $todolistService->addTodolist("Belajar PHP OOP");
  $todolistService->addTodolist("Belajar PHP Database");
  $todolistService->addTodolist("Belajar PHP Web");

  $todolistService->showTodolist();
}


function testRemoveTodolist(): void{

  $todolistRepository = new TodolistRepositoryImpl();
  $todolistService = new TodolistServiceImpl($todolistRepository);
  $todolistService->addTodolist("Belajar PHP OOP");
  $todolistService->addTodolist("Belajar PHP Database");
  $todolistService->addTodolist("Belajar PHP Web");

  $todolistService->showTodolist();
  $todolistService->removeTodolist(1);
  $todolistService->removeTodolist(3);
  $todolistService->showTodolist();
}
testRemoveTodolist();

// testShowTodolist();
// testAddTodolist();

 ?>
