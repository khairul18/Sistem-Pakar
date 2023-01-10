<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AweSplash - Free HTML Splash Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600&amp;subset=latin-ext" rel="stylesheet">

        <!-- CSS -->
        <link href="assets/css/main.css" rel="stylesheet">

        <!-- JS -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>

        <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    </head>
    <body>

    <?php
		include ('navbar.php');
	?>

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
                            <div class="offset-lg-2 col-lg-8">
                                <div class="title-01 title-01--11 text-center">
                                    <h2 class="title__heading">
                                        <span>START</span>
                                        
                                    </h2>
                                    <div class="title__description" style="margin-bottom:55px; margin-top:px">( Simple Triage and Rapid Treatment )</div>
                                    <div class="title__action"> <a href="question.php" class="btn btn-success" style="background-color: #BD8611; border-radius: 18px; padding: 9px 35px; opacity:0.9">Mulai</a>
                                    <!-- <button style="background-color: #BD8611; border-radius: 60px;">Mulai</button> -->
                                    <!-- Options btn color: .btn-success | .btn-info | .btn-warning | .btn-danger | .btn-primary -->
                                </div> <!-- .title-01 -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        

        <!-- JS -->
        <script src="assets/js/plugins/animate-headline.js"></script>
        <script src="assets/js/main.js"></script>
        

    </body>
</html>
