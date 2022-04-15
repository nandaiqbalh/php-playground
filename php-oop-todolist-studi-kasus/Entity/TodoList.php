<?php

namespace Entity{
  class Todolist{
    private string $todo;

    // constructor
    public function __construct(string $todo = "")
    {
      $this->todo = $todo;

    }

    // getter
    public function getTodo(): string
    {
      return $this->todo;
    }

    // setter
    public function setTodo(string $todo) : void
    {
      $this->todo = $todo;
    }

  }




}
 ?>
