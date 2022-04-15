<?php

namespace Repository{

    use Entity\Todolist;

  interface TodolistReposiroty{

    // add
    function save(Todolist $todolist) : void;

    // remove
    function remove(int $number) : bool;

    // show
    function findAll() : array;
  }
}
 ?>
