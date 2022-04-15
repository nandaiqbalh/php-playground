<?php

// function input
function input(string $info): string
{

    // menampilkan output yang akan meminta user untuk memasukkan input
    echo "$info : ";

    // fgets untuk mengambil input dari user
    $result = fgets(STDIN);
    return trim($result);
}
