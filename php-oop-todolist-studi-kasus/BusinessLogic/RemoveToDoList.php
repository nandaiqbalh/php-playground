<?php

/**
 * 
 * Menghapus to do dari List
 */

function removeToDoList(int $number): bool
{

    // global keyword untuk mengambil global variabel
    global $todoList;

    // pengkondisian untuk mengecek apakah number yang dimasukan masih 
    // merupakan data di dalam array
    if ($number > sizeof($todoList)) {

        // kalau masukan ternyata melebihi jumlah data array, maka akan return false
        return false;
    }

    // perulangan yang akan menggeser data variabel supaya indeks tetap urut, 
    // hanya datanya yang akan digeser ke depan
    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    // unset data terakhir
    unset($todoList[sizeof($todoList)]);

    // return berhasil ketika berhasil hapus todolist
    return true;
}
