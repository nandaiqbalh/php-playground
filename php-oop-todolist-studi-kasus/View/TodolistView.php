<?php

namespace View{

    use Helper\InputHelper;
    use Service\TodolistService;

  class TodolistView{

    private TodolistService $todolistService;

    public function __construct(TodolistService $todolistService)
    {
      $this->todolistService = $todolistService;
    }

    function showTodolist() : void {
      while (true) {

          $this->todolistService->showTodolist();

          echo "\nMENU:" . PHP_EOL;
          echo "1. Tambah ToDo" . PHP_EOL;
          echo "2. Hapus ToDo" . PHP_EOL;
          echo "x. Keluar" . PHP_EOL;

          $pilihan = InputHelper::input("Pilih");

          if ($pilihan == "1") {
              // pindah ke view ADD
              $this->addTodolist();
          } elseif ($pilihan == "2") {
              // pindah ke view REMOVE
              $this->removeTodolist();
          } elseif ($pilihan == "x") {
              // keluar
              break;
          } else {
              echo "Pilhan anda tidak valid" . PHP_EOL;
          }
      }
      // setelah keluar dari perulangan
      echo "Thanku, stay safe!" . PHP_EOL;
    }

    function addTodolist() : void{

      echo "\nMENAMBAH TODO" . PHP_EOL;

      $todo = InputHelper::input("Todo (x untuk batal)");
  
      if ($todo == "x") {
          // batal
          echo "Batal menambah todo" . PHP_EOL;
      } else {
          $this->todolistService->addToDoList($todo);
      }

    }

    function removeTodolist() : void{


    }

  }
}

 ?>
