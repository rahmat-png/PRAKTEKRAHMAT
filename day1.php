<?php

$a = "hello";
$hello  = "hello world";

// menampilkan isi variabel
// hello
echo $a . "</br>";

//menampilkan ii variabel $a
//hello world!
echo $hello . "</br>";

// menampilkan isi dari variabel dengan nama yang sama seperti isi variabel $a
//isi variabel $a = hello. jadi, nanti akan menampilkan isi dari variabel $hello
// hello world
echo $$a . "</br>";

?>