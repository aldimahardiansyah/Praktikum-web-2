<?php
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $prodi = $_POST['prodi'];
    $skills = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];

    function skor_skill($skills)
    {
        // array skills
        $skill_lists = [
            'HTML' => 10,
            'CSS' => 10,
            'JavaScript' => 20,
            'RWD Bootstrap' => 20,
            'PHP' => 30,
            'Python' => 30,
            'Java' => 50
        ];
        $result = 0;

        foreach ($skills as $skill) {
            $result = $result + $skill_lists[$skill];
        }

        return $result;
    }

    // Tugas:
    function kategori_skill($skor_skill)
    {
        // hasil return harus berupa string kategori skill
    }

    echo "NIM: $nim";
    echo "<br> Nama: $nama";
    echo "<br> Jenis Kelamin: $gender";
    echo "<br> Program Studi: $prodi";
    echo "<br> Skill Programming: ";

    foreach ($skills as $skill) {
        echo $skill . ", ";
    }

    echo "<br> Domisili: $domisili";
    echo "<br> Email: $email";
    echo "<br> Skor Skill: " . skor_skill($skills);
    echo "<br> Kategori Skill: ";
}
