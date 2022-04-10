<?php

require_once "../php-playground/php-dasar-todolist-studi-kasus/Helper/Input.php";
require_once "../php-playground/php-dasar-todolist-studi-kasus/BusinessLogic/ShowToDoList.php";
require_once "../php-playground/php-dasar-todolist-studi-kasus/View/ViewAddToDoList.php";
require_once "../php-playground/php-dasar-todolist-studi-kasus/View/ViewRemoveToDoList.php";


function viesShowToDoList()
{
    while (true) {

        showToDoList();

        echo "\nMENU:" . PHP_EOL;
        echo "1. Tambah ToDo" . PHP_EOL;
        echo "2. Hapus ToDo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            // pindah ke view ADD
            viewAddToDoList();
        } elseif ($pilihan == "2") {
            // pindah ke view REMOVE
            viewRemoveToDoList();
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
