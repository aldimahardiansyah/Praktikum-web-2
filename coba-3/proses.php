<?php
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$gender = $_POST['gender'];
$prodi = $_POST['prodi'];
$skills = $_POST['skill'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

// Funtion untuk mengakumulasi skor dari setiap skill
function skor_skill($skills)
{
    $nilai_skill = ["HTML" => 10, "CSS" => 10, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
    $skor = 0;

    foreach ($skills as $skill) {
        $skor = $skor + $nilai_skill[$skill];
    }

    return $skor;
}

// Function untuk mendapatkan kategori skill berdasarkan skor
function kategoriSkill($score)
{
    $kategori = '';
    switch ($score) {
        case $score == 0:
            $kategori = 'Tidak Memadai';
            break;
        case $score <= 40:
            $kategori = 'Kurang';
            break;
        case $score <= 60:
            $kategori = 'Cukup';
            break;
        case $score <= 100:
            $kategori = 'Baik';
            break;
        case $score <= 150:
            $kategori = 'Sangat Baik';
            break;
        default:
            $kategori = 'Score Tidak Valid';
    }

    return $kategori;
}

echo "NIM : $nim <br>";
echo "Nama : $nama <br>";
echo "Jenis Kelamin : $gender <br>";
echo "Program Studi : $prodi <br>";
echo "Skill Programming : ";

foreach ($skills as $skill) {
    echo $skill;
}

echo "<br>Tempat Domisili : $domisili <br>";
echo "Skor: " . skor_skill($skills);
echo "<br>Kategori: " . kategoriSkill(skor_skill($skills));
