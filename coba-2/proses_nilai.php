<?php
$submit = $_GET['submit'];
$name = $_GET['name'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$task = $_GET['task'];

if (isset($submit)) {
    echo "Nama: $name <br>";
    echo "Mata Kuliah: $matkul <br>";
    echo "Nilai UTS: $uts <br>";
    echo "Nilai UAS: $uas <br>";
    echo "Nilai Tugas Praktikum: $task";
} else {
    echo "Tidak ada data!";
}
