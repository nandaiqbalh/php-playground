<?php
require_once "../php-playground/php-dasar-todolist-studi-kasus/Helper/Input.php";
require_once "../php-playground/php-dasar-todolist-studi-kasus/BusinessLogic/RemoveToDoList.php";
require_once "../php-playground/php-dasar-todolist-studi-kasus/BusinessLogic/ShowToDoList.php";

function viewRemoveToDoList()
{

    showToDoList();

    echo "\nMENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Number (x untuk batal)");

    if ($pilihan == "x") {
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        $success = removeToDoList($pilihan);
        if ($success) {
            echo "Berhasil menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}
