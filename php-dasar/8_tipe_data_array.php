<?php

$values = array(1, "Nanda", "Iqbal", 2);
// var_dump($values);

// $values2 = [1, "Nanda", "Iqbal", 2];
// var_dump($values2);


// OPERASI ARRAY
// var_dump($values[1]);

// // ubah data aray
// $values[0] = "Halo";
// var_dump($values[0]);

// // hapus index
// unset($values[2]);
// var_dump($values);

// // menambahkan
// $values[] = "Hanafi";
// var_dump($values);

// // menghitung
// var_dump(count($values));\


//ARRAY SEBAGAI MAP
// $nanda = array(
//     "nama" => "Nanda Iqbal Hanafi",
//     "nim" => 2112012013,
//     "alamat" => "Kulon Progo"
// );

// var_dump($nanda);

// ARRAY DALAM ARRAY
$nanda = array(
    "id" => 1,
    "nama" => "Nanda Iqbal Hanafi",
    "age" => 21,
    "address" => [
        "kabupaten" => "Kulon Progo",
        "provinsi" => "DIY"
    ]
);

var_dump($nanda);
