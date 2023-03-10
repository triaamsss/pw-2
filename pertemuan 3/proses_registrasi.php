<?php
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $prodi = $_POST['prodi'];
    $skills = $_POST['skill'];
    $domisili = $_POST['domisili'];

    function skor_skill($skills){
        $skills_list = [
            'HTML' => 10,
            'CSS' => 10,
            'JavaScript' => 20,
            'RWD Bootstrap' => 30,
            'PHP' => 30,
            'Python' => 30,
            'Java' => 50
        ];
        $result = 0;
        foreach($skills as $skill) {
            $result = $result + $skills_list[$skill]; 
        }
        return $result;
    }

    //TUGAS!!
    function kategori_skill($skor_skill){
        // return string kategori skill
    }

    echo "NIM: $nim";
    echo "<br> Nama: $nama";
    echo "<br> Jenis Kelamin: $gender";
    echo "<br> Program Studi: $prodi";
    echo "<br> Skill Programming: ";
    foreach ($skills as $skill) {
        echo $skill . ", ";
    }
    echo "<br> Tempat Domisili: $domisili";
    echo "<br> Skor Skill " . skor_skill($skills)
}
