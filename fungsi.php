<?php

function answer($kode){
    if($kode=='p1'){ //apakah korban dapat berjalan
        echo "<a class='btn col-lx-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=k1' style='padding: 9px 35px;'>Ya</a>"; 
        echo "<a class='btn col-lx-1 mrg btn-lg btn-outline-light' href='question.php?kode=p2' style='margin-left:40px;'>Tidak</a>";
    }


    if($kode=='p2'){ //apakah korban dapat bernafas spontan
        echo "<a class='btn col-lx-1 mrg btn-lg btn-outline-light' href='question.php?kode=p3' style='padding: 9px 35px;'>Ya</a>";
        echo "<a class='btn col-lx-1 mrg btn-lg btn-outline-light' href='question.php?kode=p4' style='margin-left:40px;'> Tidak </a>";
    }

    if($kode=='p4'){ //apakah korban dapat bernafas setelah di perbaiki jalur nafasnya?
        echo "<a class='btn col-lx-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=k31' style='padding: 9px 35px;'>Ya</a>";
        echo "<a class='btn col-lx-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=k2' style='margin-left:40px;'>Tidak</a>";
    }

    if($kode=='p3'){ //siklus nafas korban
        echo "<a class='btn col-lx-1 mrg btn-lg btn-outline-light' href='question.php?kode=p5'> <30 siklus </a>";
        echo "<a class='btn col-lx-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=k32' style='margin-left:40px;'> >30 siklus </a>";
    }    
    
    if($kode=='p5'){ //waktu pengisian kapiler korban
        echo "<a class='btn col-lx-1 mrg btn-lg btn-outline-light' href='question.php?kode=p6'> <2 detik </a>";
        echo "<a class='btn col-lx-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=k33' style='margin-left:40px;'> ≥2 detik </a>";
    }
    if($kode=='p6'){ //status mental korban
        echo "<a class='btn col-lx-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=k4' style='padding: 9px 35px;'>Ya</a>";
        echo "<a class='btn col-lx-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=k34' style='margin-left:40px;'>Tidak</a>";
    }
    

}

function kesimpulan($jurusan){
    // var_dump($jurusan);
    // exit();
    include 'koneksi.php';
    $sql = "SELECT * from tb_rincian WHERE kategori='$jurusan' AND status='setuju'";
   
    
    $data = mysqli_query($connect,$sql);
    
    while ($row = mysqli_fetch_assoc($data)) {
        echo '<p style="margin-left:30px;">~ '.$row['fakta'].'</p>';
    }  
}

function solusi($kode){  
    if ($kode=='k1'){
        $jurusan = "minor";
        kesimpulan($jurusan);
    }

    if ($kode=='k2'){
        $jurusan = "deceased";
        kesimpulan($jurusan);
    }

    if ($kode=='k31'){
        $jurusan = "immediate1";
        kesimpulan($jurusan);
    }

    if ($kode=='k32') {
        $jurusan = "immediate2";
        kesimpulan($jurusan);
    }

    if ($kode=='k33'){
        $jurusan = "immediate3";
        kesimpulan($jurusan);
    }

    if ($kode=='k34'){
        $jurusan = "immediate4";
        kesimpulan($jurusan);
    }

    if ($kode=='k4'){
        $jurusan = "delayed";
        kesimpulan($jurusan);
    }
}


?>