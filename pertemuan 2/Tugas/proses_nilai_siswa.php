<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $praktikum = $_POST['praktikum'];
    $rata_nilai = round(($uts + $uas + $praktikum) / 3, 2);

    echo "Nama: $nama <br>";
    echo "Mata Kuliah: $matkul <br>";
    echo "Nilai UTS: $uts <br>";
    echo "Nilai UAS: $uas <br>";
    echo "Nilai Praktikum: $praktikum <br>";
    echo "Rata-Rata Nilai: $rata_nilai <br>";

    $grade;
    if ($rata_nilai >= 85 && $rata_nilai <= 100) {
        $grade = "A";
        echo "Grade = $grade <br>";
    } elseif ($rata_nilai >= 70 && $rata_nilai <= 85) {
        $grade = "B";
        echo "Grade = $grade <br>";
    } elseif ($rata_nilai >= 56 && $rata_nilai <=70) {
        $grade = "C";
        echo "Grade = $grade <br>";
    } elseif ($rata_nilai >= 36 && $rata_nilai <=56) {
        $grade = "D";
        echo "Grade = $grade <br>";
    } elseif ($rata_nilai > 100) {
        $grade = "Invalid";
        echo "Grade = $grade <br>";
    } else {
        $grade = "E";
        echo "Grade = $grade <br>";
    }
} else {
    echo "Tidak ada data!";
}
