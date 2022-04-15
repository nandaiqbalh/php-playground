<?php

namespace Repository{

    use Entity\Todolist;

  interface TodolistReposiroty{

    // add
    public function save(Todolist $todolist) : void;

    // remove
    public function remove(int $number) : bool;

    // show
    public function findAll() : array;
  }
}
 ?>
