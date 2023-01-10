<?php
include('koneksi.php');

$sql = "SELECT * from tb_pertanyaan";
$data = mysqli_query($connect,$sql);



              if($data){
                $row=mysqli_fetch_assoc($data);
                echo $row['kategori'];

              
              }
            
            ?>