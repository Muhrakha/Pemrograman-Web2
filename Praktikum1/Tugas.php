<?php 
$mahasiswa1 = [
    'id'=>1,
    'nim'=>01101220,
    'nama'=>"Firly",
    'uts'=>90,
    'uas'=>85,
    'tugas'=>95,
];

$mahasiswa2 = [
    'id'=>2,
    'nim'=>01101221,
    'nama'=>"Muh Rakha",
    'uts'=>95,
    'uas'=>90,
    'tugas'=>95,
];

$mahasiswa3 = [
    'id'=>3,
    'nim'=>01101222,
    'nama'=>"Rahman",
    'uts'=>85,
    'uas'=>85,
    'tugas'=>90,
];


$ar_nilai = [$mahasiswa1, $mahasiswa2, $mahasiswa3];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3>Daftar Nilai Mahasiswa</h3>
        <table class="table table-stripped">
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
            </tr>
            <?php foreach($ar_nilai as $nilai){ ?>
                <tr>
                    <td><?= $nilai['id']; ?></td>
                    <td><?= $nilai['nim']; ?></td>
                    <td><?= $nilai['nama']; ?></td>
                    <td><?= $nilai['uts']; ?></td>
                    <td><?= $nilai['uas']; ?></td>
                    <td><?= $nilai['tugas']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta> 
    <meta> 
    
</head>
<body>
    <div class="container">
        <h3></h3>
        <table class="table table-stripped">
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
            </tr>
        </table>
    </div>
</body>
</html> -->