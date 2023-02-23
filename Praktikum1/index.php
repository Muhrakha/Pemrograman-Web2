<?php 
// ini sebuah komentar
/* ini juga sebuah komentar 
    komentar adalah sejenis notasi

*/
# ini komentar pada kres

// echo "Hello World <br>";
// echo 'Hello World <br>';
// print_r("Muh Rakha <br>");
// var_dump("STT Nurul Fikri");




// Membuat variable User
$nama = "Muh Rakha";
$umur = 21;
$berat = 70.2;
$mahasiswa = true;

// echo "Nama saya adalah $nama <br>";
// echo "Umur saya adalah $umur <br>";
// echo "Berat saya mencapai $berat kg";


// Membuat variable Sistem
// echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
// echo "<br>";
// echo 'Nama File '.$_SERVER["PHP_SELF"];



// Membuat variable Konstanta
define('PHI', 3.14);
$jari = 10;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;


// echo "Luas lingkaran dengan jari-jari $jari = $luas";
// echo "Luas lingkaran dengan jari-jari $jari = $keliling";


// Membuat Array
$programs = ["PHP", "Javascript", "HTML", "CSS"];
// echo $programs[0];
// echo "Jumlah data variabel programs sebanyak " . count($programs);
foreach($programs as $program){
    echo "Bahasa $program <br>";
}

?>