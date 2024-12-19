<!DOCTYPE html>
<html>
<head>
    <title>Hitung Nilai Rata-rata Mahasiswa</title>
</head>
<body>
    <form method="post">
        Nama Mahasiswa: <input type="text" name="nama"><br>
        Ujian Tengah Semester: <input type="number" name="uts"><br>
        Tugas Mandiri: <input type="number" name="tugas"><br>
        Ujian Akhir Semester: <input type="number" name="uas"><br>
        <input type="submit" value="Hitung Nilai">
        <input type="reset" value="Reset">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $uts = $_POST['uts'];
        $tugas = $_POST['tugas'];
        $uas = $_POST['uas'];

        // Hitung nilai rata-rata
        $rata_rata = ($uts + $tugas + $uas) / 3;

        // Tentukan grade
        if ($rata_rata >= 90) {
            $grade = "A";
        } elseif ($rata_rata >= 80) {
            $grade = "B";
        } elseif ($rata_rata >= 70) {
            $grade = "C";
        } elseif ($rata_rata >= 60) {
            $grade = "D";
        } else {
            $grade = "E";
        }

        // Tampilkan hasil
        echo "<p>$nama mendapatkan nilai rata-rata - $rata_rata ($grade) dan ";
        if ($rata_rata >= 60) {
            echo "lulus";
        } else {
            echo "tidak lulus";
        }
        echo "</p>";
    }
    ?>
</body>
</html>