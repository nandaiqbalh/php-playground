<?php

namespace Service{

    use Entity\Todolist;
    use Repository\TodolistRepository;

  interface TodolistService{

    // show
    function showTodolist(): void;

    // add
    function addTodolist(string $todo) : void;

    // remove
    function removeTodolist(int $number) : void;
  }

  class TodolistServiceImpl implements TodolistService{

    private TodolistRepository $todolistRepository;

    // constructor
    public function __construct(TodolistRepository $todolistRepository)
    {
      $this->todolistRepository = $todolistRepository;

    }

    function showTodolist(): void
    {
      // judul aplikasi
      echo "TODO LIST" . PHP_EOL;

      // foreach untuk menampilkan
      $todoList = $this->todolistRepository->findAll();
      foreach ($todoList as $number => $value) {
          echo "$number. ".$value->getTodo() . PHP_EOL;
      }
    }

    // add
    function addTodolist(string $todo) : void{
      $todolist = new Todolist($todo);
      $this->todolistRepository->save($todolist);
      echo "SUKSES MENAMBAHKAN TODO" . PHP_EOL;
    }

    // remove
    function removeTodolist(int $number) : void{

    }
  }
}
 ?>
