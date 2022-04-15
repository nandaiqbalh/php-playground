<?php

namespace Service{
  interface TodolistReposiroty{

    // show
    function showTodolist(): void;

    // add
    function addTodolist(string $todo) : void;

    // remove
    function removeTodolist(int $number) : void;
  }
}
 ?>
