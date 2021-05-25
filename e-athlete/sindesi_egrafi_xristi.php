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


<!doctype html>
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
        <!--Σύνδεση Μέλους-Χρήστη-->
        <div class="container">

            <!--Επικεφαλίδα-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Σύνδεση Μέλους - Χρήστη</h2>
            <!--Επικεφαλίδα-->

            <br>
            <div class="row align-items-start">

                <!--Εικόνα-->
                <div class="col-md-3">
                    <img src="images/logo.png" class="rounded mx-auto d-block" alt="...">
                </div>
                <!--Εικόνα-->

                &nbsp;

                <!--Στοιχεία Ειδόδου-->
                <div class="col-md-4">
                    <form action="sindesi_egrafi_xristi.php" method="post" id="sing_in" name="sing_in">

                        <div class="w-100 p-3" style="background-color: #eee;">
                            <h5>Καλώς ήρθες στο <strong>e-athlete</strong> </h5>
                            <br>
                            <?php
                            if (isset($_POST['login_user'])) {
                                include('./php/errors.php');
                            }
                            ?>

                            <div class="col-md-30">
                                <label for="user_name" class="form-label">Όνομα Χρήστη</label>
                                <input type="text" name="username" class="form-control" id="user_name" required>
                            </div>
                            <br>
                            <div class="col-md-30">
                                <label for="password" class="form-label">Κωδικός</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>

                            <br>

                            <div class="password_forgot">
                                <a id="MainContent_LoginUser_hlForgotPassword" href="#">Ξέχασες τον κωδικό σου;</a>
                            </div>

                            <!--Submit Button-->
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" id="register" name="login_user"value="Submit" class="btn btn-success">Είσοδος</button>

                            </div>
                            <!--Submit Button-->

                        </div>
                    </form>
                </div>
                <!--Στοιχεία Ειδόδου-->

                &nbsp;

                <!--Εγγραφή Μέλους-Χρήστη-->
                <div class="col-md-4">
                    <div class="w-100 p-3" style="background-color: #eee;">
                        <h5>Γιατί να γίνω μέλος στο e-athlete <strong class="text-danger">εντελώς δωρεάν</strong>;</h5>
                        <p>- Γιαν να <strong>βρίσκω εύκολα</strong> τις δραστηριότητες που υπάρχουν <strong>δίπλα στο σπίτι μου</strong>.</p>
                        <p>- Για να <strong>λαμβάνω προσφορές</strong> των συνεργαζόμενων επιχειρήσεων.</p>
                        <p>- Για να έχω <strong>δημιουργώ και να επεξεργάζομαι</strong> στο προφίλ του παιδιού μου.</p>
                        <p>- Για να <strong>ενημερώνομαι</strong> για τα νέα της επειχήρησης που συνεργάζομαι.</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="egrafi_xristi.php"><button type="button" class="btn btn-success">Εγγραφή</button></a>
                        </div>
                    </div>
                </div>
                <!--Εγγραφή Μέλους-Χρήστη-->

            </div>
        </div>
        <!--Σύνδεση Μέλους-Χρήστη-->

        <br>
        <?php
        if(isset($_POST['chat_button'])){
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