<?php

$nama = ["rahmat", "fitriyani", "efri", "yuli", "fira"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Looping for Array</title>
</head>
<body>
<?php
    for ($i = 0; $i < count($nama); $i++) { // Count berguna untuk menentukan jumlah elemen dalam array.
        // Sehingga looping akan berhenti ketika isi array sudah tampil semua.
        echo "<li>$nama[$i]</li>";
    }
?>
</body>
</html>