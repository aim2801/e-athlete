<?php
include('./php/server.php');
?>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/logo1.png"/>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <title>e-athlete</title>

        <style>
            /* Button used to open the chat form - fixed at the bottom of the page */
            .open_button {
                background-color: orange;
                color: white;
                padding: 16px 20px;
                border: none;
                cursor: pointer;
                opacity: 0.8;
                position: fixed;
                bottom: 23px;
                right: 28px;
                width: 280px;
            }
            /* Style all font awesome icons */
            .fa {
                padding: 20px;
                font-size: 20px;
                width: 60px;
                text-align: center;
                text-decoration: none;
                border-radius: 50%;
            }

            /* Add a hover effect if you want */
            .fa:hover {
                opacity: 0.7;
            }

            /* Set a specific color for each brand */

            /* Facebook */
            .fa-facebook {
                background: #3B5998;
                color: white;
            }

            /* Twitter */
            .fa-twitter {
                background: #55ACEE;
                color: white;
            }
            /* Google+ */
            .fa-google-plus{
                background: #dc3545;
                color: white;
            }
            .rate{
                padding: 20px;
                font-size: 25px;
                width: 20px;
                text-align: left;
                text-decoration: none;
                border-radius: 50%;
                color: gold
            }




        </style>
    </head>
    <body>
        <!-- menou-->
        <?php
        include('./php/topNav.php');
        ?>
        <!-- menou-->
        <br>

        <!--Προφίλ Επιχείρησης-->
        <div class="container">

            <!--Επικεφαλίδα-->
            <h2 class="text-center"><strong>Προφίλ Επιχείρησης</strong></h2>
            <!--Επικεφαλίδα-->

            <br>

            <div class="row">
                <div class="col-md-3">
                    <div class="card-box">
                        <!--logo Εταιρείας-->
                        <div class="card-img-top text-center">
                            <img src="images/logo.png" class="img-thumbnail" alt=""> 
                        </div>
                        <!--logo Εταιρείας-->

                        <br>

                        <!--Επωνυμία Εταιρείας-->
                        <div class="card-header text-center">
                            <h4><strong>Karate Kid</strong></h4>
                        </div>
                        <!--Επωνυμία Εταιρείας-->

                        <br>

                        <!--Στοιχεία Εταιρείας-->
                        <div class="card-box text-left border border-secondary-light rounded p-3">                                                   
                            <p class="text-muted font-13"><strong>Διευθυνση: </strong><span class="m-l-15">Θηβών 28 - Περιστερι</span></p>
                            <hr>
                            <p class="text-muted font-13"><strong>Τομείς απασχόλησης: </strong> <span class="m-l-15">Καράτε</span></p>
                            <hr>
                            <p class="text-muted font-13"><strong>Ώρες λειτουργίας: </strong> <span class="m-l-15">14:00 - 21:00</span></p>
                            <hr>
                            <p class="text-muted font-13"><strong>Τηλέφωνο: </strong> <span class="m-l-15">210 1234 56</span></p>
                            <hr>

                            <span class="heading text-muted font-13"><strong>Αξιολογήσεις:</strong></span><br>

                            <span class="fa fa-star rate"></span>
                            <span class="fa fa-star rate"></span>
                            <span class="fa fa-star rate"></span>
                            <span class="fa fa-star rate"></span>
                            <span class="fa fa-star rate"></span>

                        </div>
                        <!--Στοιχεία Εταιρείας-->

                        <br>

                        <!--Sosial-->
                        <div class="card-footer text-center">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <!--Sosial-->

                        <br>

                        <!--Google map-->
                        <div class="card-box border border-secondary-light rounded">
                            <div class="card-header text-left">
                                <h4><strong>Που είμαστε</strong></h4>
                            </div>                          
                            <div id="map-container-google-2" class="map-container" >
                                <iframe src="https://maps.google.com/maps?q=Πολυτεχνείου+49,+Ηράκλειο+141+21&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                        allowfullscreen></iframe>
                            </div>                                                         
                        </div>
                        <!--Google Maps-->

                    </div> 
                </div> 

                <div class="col-md-9">

                    <!--Για εμάς-->
                    <div class="card-box border border-secondary-light rounded p-3">
                        <div class="card-header text-left">
                            <h4><strong>Για εμάς</strong></h4>
                        </div>
                        <div class="card-body">
                            <p>                                              
                                Στις εγκαταστάσεις του Συλλόγου οι οποίες χαρακτηρίζονται από την επιρροή των Ιαπωνικών
                                στοιχείων εξασκούνται καθημερινά αθλητές του καράτε όλων των ηλικιών από 5 ετών έως και 60 +.
                                Το Wado Ryu karate στο οποίο ειδικεύεται η σχολή, περιλαμβάνει παραδοσιακό καράτε αλλά φυσικά και αγωνιστικό.
                                Για το λόγο αυτό η σχολή έχει αναπτύξει τμήματα για όσους επιθυμούν να εντρυφήσουν στο παραδοσιακό καράτε,
                                στη φιλοσοφία και στην ανάλυση της πολεμικής τέχνης αλλά και σε όσους θέλουν να προχωρήσουν και σε αγωνιστικό επίπεδο
                                και στον πρωταθλητισμό.
                            </p>
                        </div>
                    </div>
                    <!--Για εμάς-->

                    <br>

                    <!--Ο χώρος μας-->
                    <div class="card-box border border-secondary-light rounded p-3">
                        <div class="card-header text-left">
                            <h4><strong>Ο χώρος μας</strong></h4>
                        </div>
                        <div class="card-body">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--Ο χώρος μας-->

                    <br>

                    <div class="row">
                        <div class="col-6">

                            <!--Υποχρεωτικά Έντυπα Υγείας-->
                            <div class="card-box border border-secondary-light rounded p-3">
                                <div class="card-header text-left">
                                    <h4><strong>Υποχρεωτικά Έγγραφα Υγείας</strong></h4>
                                </div>
                                <div class="card-body">
                                    <p>
                                        Πιστοποίηση από <strong>καρδιολόγο</strong>. 
                                    </p>
                                </div>
                            </div>
                            <!--Υποχρεωτικά Έντυπα Υγείας-->

                        </div>

                        <div class="col-6">

                            <!--Πιστοποιητικά-->
                            <div class="card-box border border-secondary-light rounded p-3">
                                <div class="card-header text-left">
                                    <h4><strong>Πιστοποιητικά</strong></h4>
                                </div>
                                <div class="card-body">
                                    <p>
                                        Πιστοποίηση <strong>ISO-29993</strong>.
                                    </p>
                                </div>
                            </div>
                            <!--Πιστοποιητικά-->

                        </div>
                    </div>

                    <br>

                    <!--Επικοινωνία-->
                    <div class="card-box border border-secondary-light rounded p-3">
                        <div class="card-header text-left">
                            <h4><strong>Επικοινωνία</strong></h4>
                        </div>
                        <div class="card-body">
                            <form id="contact-form" name="contact-form" action="mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form">
                                            <textarea type="text" id="message" name="message" rows="4" placeholder="Το μύνημα σου..." class="form-control md-textarea"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <br>
                            <!--Submit Button-->
                            <div class="text-center text-md-left">
                                <a class="btn btn-success" onclick="document.getElementById('contact-form').submit();">Αποστολή</a>
                            </div>
                            <!--Submit Button-->
                        </div>
                    </div>
                    <!--Επικοινωνία-->

                </div>
            </div>
        </div>
        <!--Προφίλ Επιχείρησης-->

        <br>

        <?php
        if (isset($_POST['chat_button'])) {
            include('./chat.php');
        }
        ?>
        <form name="chat" action="sindesi_egrafi_xristi.php" method="post">
            <button type=submit name="chat_button" class="open_button" >Live Chat</button>

        </form>
        <!-- Footer -->
        <?php
        include('./php/footer.php');
        ?>
        <!-- Footer -->

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
        -->
    </body>
</html>
