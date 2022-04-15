<?php

function tesMix(mixed $param) : mixed{
  if (is_array($param)) {
    return [];
  } else  if (is_string($$param)) {
    return "Nanda";
  } else{
    return null;
  }

}

 ?>
