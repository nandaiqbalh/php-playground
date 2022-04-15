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

    }

    // show
    function findAll() : array{

      return $this->todoList;
    }

  }
}
 ?>
