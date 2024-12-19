<?php

$mahasiswa = [
    "001" => "rahmat",
    "002" => "fitri",
    "003" => "dimas",
    "004" => "dara",
    "005" => "cinta"
];

// Untuk memasukkan value, kita harus membuat key yang merepresentasikan valuenya.
// Tanda "=>" dapat diartikan sebagai merujuk ke
// "Key" => "Value"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Associative</title>
</head>
<body>
<?php foreach ($mahasiswa as $nrp => $nama) : ?>
    <li><?php echo "$nrp : $nama"; ?></li>
<?php endforeach; ?>
</body>
</html>