<?php
include('./php/server.php');
?>
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

</style>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/logo1.png"/>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <title>e-athlete</title>
    </head>
    <body>
        <!-- menou-->
        <?php
        include('./php/topNav.php');
        ?>
        <!-- menou-->
        <!-- eikones-->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/5.jpg" class="d-block w-100" alt="...">
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
        <!-- eikones-->
        <br>

        <!-- Εγγραφή Επιχείρησης -->
        <div class="container">

            <!--Επικεφαλίδα-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Εγγραφή Επιχείρησης</h2>
            <!--Επικεφαλίδα-->
            <div class="row align-items-start">

                <!--Εικόνα-->
                <div class="col-md-3">
                    <img src="images/logo.png" class="rounded mx-auto d-block" alt="...">
                </div>
                <!--Εικόνα-->

                &nbsp;

                <div class="col-md-8">
                    <div class="w-100 p-3" style="background-color: #eee;">

                        <form action="egrafi_epix.php" method="post" name="eg_ep_form" id="eg_ep_form">
                            <div class="row align-items-start">

                                <!-- Στοιχεία Επιχείρησης -->
                                <div class="col-md-6">
                                    <h5 class="text-center">Στοιχεία Επιχείρησης</h5>
                                    <br>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <label for="name" class="form-label">Επωνυμία Επιχείρησης</label>
                                            <input type="text" class="form-control" placeholder="" name="name" id="name" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="services" class="form-label">Υπηρεσίες</label>
                                            <input type="text" class="form-control" name="services" id="services" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="afm" class="form-label">Α.Φ.Μ</label>
                                            <input type="text" pattern="[0-9]{9}" title="9 Αριθμοί" maxlength="9" class="form-control" name="afm"id="afm" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="doy" class="form-label">Δ.Ο.Υ</label>
                                            <input type="text" class="form-control" placeholder="" name="doy" id="doy" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="owner" class="form-label">Όνομα Ιδιοκτήτη</label>
                                            <input type="text" class="form-control" placeholder="" name="owner" id="owner" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="area" class="form-label">Περιοχή</label>
                                            <input type="text" class="form-control" id="area" name="area" required>
                                        </div>                                    

                                        <div class="col-md-6">
                                            <label for="street" class="form-label">Οδός</label>
                                            <input type="text" class="form-control" id="street" name="street" required>
                                        </div> 

                                        <div class="col-md-2">
                                            <label for="number" class="form-label">Αριθμός</label>
                                            <input type="text" class="form-control" id="number" name="number" required>
                                        </div> 

                                        <div class="col-md-4">
                                            <label for="zip" class="form-label">Ταχ. Κώδικας</label>
                                            <input type="text" pattern="[0-9]{5}" title="Μόνο Αριθμοί" maxlength="5" class="form-control" id="zip" name="zip" required>
                                        </div>

                                    </div>
                                </div>
                                <!-- Στοιχεία Επιχείρησης -->

                                &nbsp;

                                <!--Στοιχεία Εισόδου-->
                                <div class="col-md-5">
                                    <h5 class="text-center">Στοιχεία Εισόδου</h5>
                                    <br>
                                    <div class="col">
                                        <label for="username" class="form-label">Όνομα Χρήστη</label>
                                        <input type="text" class="form-control" id="username_comp" name="username_comp"required>
                                    </div>

                                    <div class="col">
                                        <label for="password" class="form-label">Κωδικός</label>
                                        <input type="text" class="form-control" id="password_comp_1" name="password_comp_1" required>
                                    </div>
                                    <div class="col">
                                        <label for="password" class="form-label">Επιβεβαίωση Κωδικού</label>
                                        <input type="text" class="form-control" id="password_comp_2" name="password_comp_2"required>
                                    </div>
                                </div>
                                <!--Στοιχεία Εισόδου-->

                            </div>


                            <br>

                            <!--Submit Button-->
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit"  class="btn btn-success" name="eg_ep_form_button" id="eg_ep_form_button">Εγγραφή</button>
                            </div>
                            <!--Submit Button-->
                        </form>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Εγγραφή Επιχείρησης -->

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
