<?php

namespace Repository{

    use Entity\Todolist;

  interface TodolistRepository{

    // add
    function save(Todolist $todolist) : void;

    // remove
    function remove(int $number) : bool;

    // show
    function findAll() : array;
  }

  class TodolistRepositoryImpl implements TodolistRepository{

    public array $todoList = array();

    // add
    function save(Todolist $todolist) : void{
      $number = sizeof($this->todoList) + 1;
      $this->todoList[$number] = $todolist;
    }

    // remove
    function remove(int $number) : bool{
      // pengkondisian untuk mengecek apakah number yang dimasukan masih
      // merupakan data di dalam array

      if ($number > sizeof($this->todoList)) {
          // kalau masukan ternyata melebihi jumlah data array, maka akan return false
          return false;
      }

      // perulangan yang akan menggeser data variabel supaya indeks tetap urut,
      // hanya datanya yang akan digeser ke depan
      for ($i = $number; $i < sizeof($this->todoList); $i++) {
          $this->todoList[$i] = $this->todoList[$i + 1];
      }

      // unset data terakhir
      unset($this->todoList[sizeof($this->todoList)]);

      // return berhasil ketika berhasil hapus todolist
      return true;

    }

    // show
    function findAll() : array{

      return $this->todoList;
    }

  }
}
 ?>
