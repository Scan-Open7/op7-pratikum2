<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <title>Ouput MahaSiswa</title>
</head>
<body>
    <!-- header -->
    <header class='header'>
        <h3 class='head'>Data Nilai MahaSiswa Di Kampus STT Nurul Fikri!</h3>
    </header>
    <!-- content -->

    <?php

        $abs1 = ['id'=>1, 'nama'=>'Ahmad Fauzi', 'matkul'=>'Pemrograman Web', 'uts'=>78, 'uas'=>85, 'tugas'=>87];
        $abs2 = ['id'=>2, 'nama'=>'Aulia Salsabia', 'matkul'=>'Basis Data I', 'uts'=>88, 'uas'=>82, 'tugas'=>92];
        $abs3 = ['id'=>3, 'nama'=>'Nuaufal Rizki', 'matkul'=>'Statistik', 'uts'=>76, 'uas'=>79, 'tugas'=>82];
        $abs4 = ['id'=>4, 'nama'=>'Bunga Amelia', 'matkul'=>'Statistik', 'uts'=>84, 'uas'=>87, 'tugas'=>80];
        $abs5 = ['id'=>5, 'nama'=>'Nida Hanifah', 'matkul'=>'UI/UX', 'uts'=>89, 'uas'=>90, 'tugas'=>95];
        $abs6 = ['id'=>6, 'nama'=>'Burha Nurdin', 'matkul'=>'Basis Data I', 'uts'=>81, 'uas'=>87, 'tugas'=>90];
        $abs7 = ['id '=>7, 'nama'=>'Budi Nur cahyano', 'matkul'=>'Basda', 'uts'=>88, 'uas'=>87, 'tugas'=>90];

        
        $abs8 = ['id' =>8, 'nama'=>$_POST['nama'], 'matkul'=>$_POST['matkul'], 'uts'=>$_POST['uts'], 'uas'=>$_POST['uas'], 'tugas'=>$_POST['tugas']];

        $abs_nilai = [$abs1,$abs2,$abs3,$abs4,$abs5,$abs6,$abs7,$abs8];


    ?>
    
    <table border="1" width="100%" class='table'>
    <thead>
        <tr>
            <th>No</th><th>Nama Lengkap</th><th>Mata Kuliah</th><th>Nilai UTS</th>
            <th>Nilai UAS</th><th>Nilai Tugas / Pratikum</th><th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach($abs_nilai as $ns){
        echo '<tr><td>'.$nomor.'</td>';
        echo '<td>'.$ns['nama'].'</td>';
        echo '<td>'.$ns['matkul'].'</td>';
        echo '<td>'.$ns['uts'].'</td>';
        echo '<td>'.$ns['uas'].'</td>';
        echo '<td>'.$ns['tugas'].'</td>';
        $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
        echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
        echo '<tr/>';
        $nomor++;
        }
        ?>
    </tbody>
    </table>


</body>
</html>
<?php

    
?>