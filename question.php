<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="website sistem pakar">
   
    <link rel="icon" href="image/icon.png">

    <title>Sistem Pakar</title>
    <link href="css/main.css" rel="stylesheet">

    <!-- <link href="css/carousel.css" rel="stylesheet"\> -->

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom styles for this template -->

</head>

<body>


    <div class="site" id="page">
            <a class="skip-link sr-only" href="#main">Skip to content</a>

            <!-- Options headline effects: .rotate | .slide | .zoom | .push | .clip -->
            <section class="hero-section hero-section--image clearfix clip">
                <div class="hero-section__wrap">
                    <div class="hero-section__option">
                        <img src="assets/images/abab.jpg" alt="Hero section image">
                    </div>
                    <!-- .hero-section__option -->

                    <div class="container">
                        <div class="row">
                            <div class="offset-lg-1 col-lg-10">
                                <div class="title-01 title-01--11 text-center">
                                <!-- ini bagian kotak isi -->


                                <main class="batas-atas">

        <div class="card text-white  mb-3" style="background-color: #BD8611; opacity: 0.9">

        
        <h5 class="card-header" >
            <div class="col-md-14">
                <a class="md-2" href="index.php">
                    <img src="image/icon.png" height="25" class="d-inline-block align-top" alt="">
                </a>
                <label class="md-8" style="margin-left:270px;">Pertanyaan diagnosis</label>
                
                <a href="#" onclick="history.back()" class="md-4" style="margin-left:255px; color: white;"  ><svg width="21px" height="21px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 459 459" style="enable-background:new 0 0 459 459;" xml:space="preserve"><g><g id="keyboard-backspace"><polygon points="459,204 96.9,204 188.7,112.2 153,76.5 0,229.5 153,382.5 188.7,346.8 96.9,255 459,255 " fill="#000000" style="fill: rgb(255, 255, 255);"></polygon></g></g></svg></a>

            </div>
            </h5>
        
            <div class="card-body text-center ukuran-30">

            <form method="post" action="input-ketampung.php" enctype="multipart/form-data" role="form">
            
                <?php
                include ('koneksi.php');
                $kode='p1';  //inisiasi pertanyaan pertama
                // session_start();
                // echo "<p>- Kondisi Korban -</p>";
            
                    
                    if(isset($_GET['kode'])){
                        $kode=$_GET['kode'];
                    }

                    $sql = "SELECT * from tb_pertanyaan WHERE kode_pertanyaan='$kode'";
                    $data = mysqli_query($connect,$sql);
                    $row = mysqli_fetch_assoc($data);     
                ?>
                <br/><br/>
                <?php
                if($kode=='p4'){
                    echo '<h3 style="color:maroon"> Segera Buka Jalur Nafas Korban! 
                    <a href="#" data-toggle="popover" data-placement="top" title="Cara membuka jalur nafas: " data-content="Dorong Dahi Korban Kebelakang dan Dorong Rahang Korban ke bawah"
                    style="margin-left:2px">
                    <svg width="16px" height="16px" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m256 0c-141.162 0-256 114.838-256 256s114.838 256 256 256 256-114.837 256-256-114.837-256-256-256zm0 460.8c-112.925 0-204.8-91.875-204.8-204.8s91.875-204.8 204.8-204.8 204.8 91.875 204.8 204.8-91.875 204.8-204.8 204.8zm25.6-307.2c0 14.137-11.461 25.6-25.6 25.6s-25.6-11.462-25.6-25.6c0-14.139 11.461-25.6 25.6-25.6s25.6 11.461 25.6 25.6zm0 76.8v128c0 14.138-11.462 25.6-25.6 25.6-14.137 0-25.6-11.462-25.6-25.6v-128c0-14.137 11.463-25.6 25.6-25.6 14.138 0 25.6 11.462 25.6 25.6z" fill="#000000" style="fill: rgb(116, 17, 17);"></path></svg></a>
                    
                    <h3>';
                }
                ?>


                
                <?php
                if($kode=='p6'){
                    echo '<h3 style="color:maroon"> Coba beri perintah sederhana kepada korban 
                    <a href="#" data-toggle="popover" data-placement="top" title="Contoh Perintah: " data-content="Minta korban untuk membuka mata / Tanyakan Namanya / Minta korban untuk mengangkat Tangan"
                    style="margin-left:2px">
                    <svg width="14px" height="14px" version="1.1" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m256 0c-141.162 0-256 114.838-256 256s114.838 256 256 256 256-114.837 256-256-114.837-256-256-256zm0 460.8c-112.925 0-204.8-91.875-204.8-204.8s91.875-204.8 204.8-204.8 204.8 91.875 204.8 204.8-91.875 204.8-204.8 204.8zm25.6-307.2c0 14.137-11.461 25.6-25.6 25.6s-25.6-11.462-25.6-25.6c0-14.139 11.461-25.6 25.6-25.6s25.6 11.461 25.6 25.6zm0 76.8v128c0 14.138-11.462 25.6-25.6 25.6-14.137 0-25.6-11.462-25.6-25.6v-128c0-14.137 11.463-25.6 25.6-25.6 14.138 0 25.6 11.462 25.6 25.6z" fill="#000000" style="fill: rgb(255, 255, 255);"></path></svg></a>
                    
                    <h3>';
                
                }
                
                // session_start();
                ?>

        
                
                <label for="exampleFormControlInput1" style="margin-bottom:40px"><?php echo $row['isi_pertanyaan'];
                
                if($kode=='p3'){
                    echo '
                    <a href="#" data-toggle="popover" data-placement="top" title="Cara menghitung: " data-content="Letakkan tangan anda di dada korban, setiap dada korban naik dan turun di hitung sebagai 1 siklus lalu hitung ada berapa siklus dalam satu menit"
                    style="margin-left:2px">
                    <svg width="14px" height="14px" version="1.1" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m256 0c-141.162 0-256 114.838-256 256s114.838 256 256 256 256-114.837 256-256-114.837-256-256-256zm0 460.8c-112.925 0-204.8-91.875-204.8-204.8s91.875-204.8 204.8-204.8 204.8 91.875 204.8 204.8-91.875 204.8-204.8 204.8zm25.6-307.2c0 14.137-11.461 25.6-25.6 25.6s-25.6-11.462-25.6-25.6c0-14.139 11.461-25.6 25.6-25.6s25.6 11.461 25.6 25.6zm0 76.8v128c0 14.138-11.462 25.6-25.6 25.6-14.137 0-25.6-11.462-25.6-25.6v-128c0-14.137 11.463-25.6 25.6-25.6 14.138 0 25.6 11.462 25.6 25.6z" fill="#000000" style="fill: rgb(255, 255, 255);"></path></svg></a>
                    
                    ';
                }

                if($kode=='p5'){
                    echo '
                    <a href="#" data-toggle="popover" data-placement="top" title="Cara menghitung: " data-content="Letakkan tangan anda di dada korban, setiap dada korban naik dan turun di hitung sebagai 1 siklus lalu hitung ada berapa siklus dalam satu menit"
                    style="margin-left:2px">
                    <svg width="14px" height="14px" version="1.1" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m256 0c-141.162 0-256 114.838-256 256s114.838 256 256 256 256-114.837 256-256-114.837-256-256-256zm0 460.8c-112.925 0-204.8-91.875-204.8-204.8s91.875-204.8 204.8-204.8 204.8 91.875 204.8 204.8-91.875 204.8-204.8 204.8zm25.6-307.2c0 14.137-11.461 25.6-25.6 25.6s-25.6-11.462-25.6-25.6c0-14.139 11.461-25.6 25.6-25.6s25.6 11.461 25.6 25.6zm0 76.8v128c0 14.138-11.462 25.6-25.6 25.6-14.137 0-25.6-11.462-25.6-25.6v-128c0-14.137 11.463-25.6 25.6-25.6 14.138 0 25.6 11.462 25.6 25.6z" fill="#000000" style="fill: rgb(255, 255, 255);"></path></svg></a>
                    
                    ';
                }
                    ?>
                </label>
                <!-- <a href="#popup1" onclick="history.back()" class="" style="margin-left:2px"><svg width="14px" height="14px" version="1.1" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m256 0c-141.162 0-256 114.838-256 256s114.838 256 256 256 256-114.837 256-256-114.837-256-256-256zm0 460.8c-112.925 0-204.8-91.875-204.8-204.8s91.875-204.8 204.8-204.8 204.8 91.875 204.8 204.8-91.875 204.8-204.8 204.8zm25.6-307.2c0 14.137-11.461 25.6-25.6 25.6s-25.6-11.462-25.6-25.6c0-14.139 11.461-25.6 25.6-25.6s25.6 11.461 25.6 25.6zm0 76.8v128c0 14.138-11.462 25.6-25.6 25.6-14.137 0-25.6-11.462-25.6-25.6v-128c0-14.137 11.463-25.6 25.6-25.6 14.138 0 25.6 11.462 25.6 25.6z" fill="#000000" style="fill: rgb(255, 255, 255);"></path></svg></a> -->

<!--                  
                <div id="popup1" class="overlay">
	<div class="popup">
		<h2>Here i am</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
			Thank to pop me out of that button, but now i'm done so you can close this window.
		</div>
	</div>
</div> -->


       
                <div class="option">
                    <?php 
                        include "fungsi.php";
                        answer($kode);                    
                    ?>
                    
                   
                    
                </div>
                  
                <br/>
                <br/>
                

            </form>

          </div>
        </div>
    

            </div>
                        </div>
                    </div>
                    </div>
                </section>
            </div>
                
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script>
    $(function () {
  $('[data-toggle="popover"]').popover({
    trigger: 'focus'
  });
});
</script>


    
</body>
</html>