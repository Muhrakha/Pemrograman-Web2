<?php require_once "proses_registrasi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h2>Form Registrasi IT Club GDSC</h2>
        <form method="POST">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                <input id="email" name="email" placeholder="Masukkan Email" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Pria" required="required"> 
                    <label for="jenis_kelamin_0" class="custom-control-label">Pria</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Wanita" required="required"> 
                    <label for="jenis_kelamin_1" class="custom-control-label">Wanita</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label">Domisili</label> 
                <div class="col-8">
                <select id="domisili" name="domisili" class="custom-select" required="required">
                    <?php foreach($domisili as $dom){ ?>
                        <option value="Jakarta"><?= $dom; ?></option>
                    <?php } ?>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="program_studi" class="col-4 col-form-label">Program Studi</label> 
                <div class="col-8">
                <select id="program_studi" name="program_studi" class="custom-select" required="required">
                    <?php foreach($program_studi as $key => $value){ ?>
                        <option><?$key ?><?= $value ?></option>
                    <?php } ?>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Programming</label> 
                <div class="col-8">
                    <?php foreach($skills as $key => $value){ ?>
                        <div class="custom-control custon-checkbox custon-control-inline">
                            <input name="skill[]" id="<?= $key; ?>" type="checkbox" class="custom-control-input" value="<?= $key; ?>">
                            <label for="<?= $key; ?>" class="custom-control-label"><?= $key; ?></label>
                        </div>
                    <?php } ?>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <table class="table table-bordered">
            <tr class="table-warning text-uppercase">
                <th>nim</th>
                <th>nama</th>
                <th>email</th>
                <th>jenis kelamin</th>
                <th>domisili</th>
                <th>Program Studi</th>
                <th>Skill Programing</th>
                <th>Skor</th>
                <th>Predikat</th>
            </tr>

            <?php
            if(isset($_POST['submit'])){
                // ini buat nim peserta
                $nim = $_POST['nim'];
                // ini ya buat nampilke nama peserta ingett kha
                $nama = $_POST['nama'];
                // nah ini kau masokke email di web kgek keluar email yg kau isi
                $email = $_POST['email'];
                // ontok kau isi jenis kelamin kau
                $jenis_kelamin = $_POST['jenis_kelamin'];
                // isi dari domisili kau
                $domisili = $_POST['domisili'];
                // buat masukke program studi
                $program_studi = $_POST['program_studi'];
                // buat masukke skill kau biso di mano
                $skill_user = $_POST['skill'];
                // nah sekarang ini untuk nampilke total skor dari skill yang telah kau centang2 ke
                $skor_user = 0;
                // ini buat nampilke predikat dari total skor kau tadi, jd kgk nampilke brp predikat yg telah kau pilih2 tadi
                $predikat = "";
                // ok rakha mari kita olah, inget kha cak praktikum kmren makek foreach yoo, men lupo cek pocok kha!!!
                    foreach($skill_user as $skor){$skor_user += $skills[$skor];}; 
                // nah ini buat nilai, dari total kepacakan yang kau pilih total nyo kgk nampilke nilai ;)
                if($skor_user >= 100){
                    // nampilke nilai lebihdari 100 bahwa itu tu sangat baik sekali :))
                    $predikat = "Sangat Baik";
                } else if ($skor_user >= 60 && $skor_user < 100){
                    // nampilke nilai 60 dari 100 bahwa itu yo baik, baik maksudnyo bagus la
                    $predikat = "Baik";
                }else if($skor_user >= 40 && $nilai < 60 ){
                    // nampilke nilai ini brrti yo cokop
                    $predikat = "Cukup";
                }else if($skor_user > 0 && $nilai < 40){
                    // kurang kau men nilai antara 0 smpe 40
                    $predikat = "Kurang";
                }else if($skor_user == 0){
                    // men katek nian nilai nah sudem tidak memadai berarti . bepeker
                    $predikat = "Tidak Memadai";
                }

            ?>
            <tr>
                <!-- ini btw buat hasil dari input yg kau isi di web mulai dari nim yang kau isi, nama, email dll, TQ. -->
                <td><?= $nim;?></td>
                <td><?= $nama;?></td>
                <td><?= $email;?></td>
                <td><?= $jenis_kelamin;?></td>
                <td><?= $domisili;?></td>
                <td><?= $program_studi;?></td>
                <td><?php foreach($skill_user as $skill){echo $skill . " ";} ?></td>
                <td><?= $skor_user; ?></td>
                <td><?= $predikat; ?></td>
            </tr>
            <!-- dah kelar jangan lupo totop, dah mokaseh, powered by @muhrakhaa_ -->
            <?php } ?>
        </table>
    </div>
</body>
</html>