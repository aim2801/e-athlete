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

        <!--Εγγραφή Μέλους - Χρήστη-->
        <div class="container">

            <!--Επικεφαλίδα-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Εγγραφή Μέλους - Χρήστη</h2>
            <!--Επικεφαλίδα-->

            <div class="row align-items-start">

                <!--Εικόνα-->
                <div class="col-md-3">
                    <img src="images/logo.png" class="rounded mx-auto d-block" alt="...">
                </div>
                <!--Εικόνα-->

                &nbsp;

                <!--Προσωπικά Στοιχεία-->
                <div class="col-md-8">
                    <form id="add_profile_form" name="add_profile_form" action="egrafi_xristi.php" method="post">
                        <div class="w-100 p-3" style="background-color: #eee;">


                            <div class="row align-items-start">

                                <!--Στοιχεία Χρήστη-->
                                <div class="col-md-6">
                                    <div class="row">
                                        <h5 class="text-center">Στοιχεία Χρήστη</h5>
                                        <div class="col-md-6">

                                            <label for="first_name" class="form-label">Όνομα</label>
                                            <input type="text" class="form-control" name="first_name" id="first_name" required>

                                        </div>
                                        <div class="col-md-6">
                                            <label for="last_name" class="form-label">Επώνυμο</label>
                                            <input type="text" class="form-control" name="last_name" id="last_name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" id="username" required>
                                        </div> 
                                        <div class="col-md-6">
                                            <label for="zip" class="form-label">Ταχ. Κώδικας</label>
                                            <input type="text"  pattern="[0-9]{5}" title="Μόνο Αριθμοί" maxlength="5" class="form-control" name="zip" id="zip" required>

                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputSex" class="form-label">Φύλο</label>
                                            <select class="form-control" id="autoSizingSelect" name="sex"required >
                                                <option selected>Επίλεξε φύλο</option>
                                                <option value="1">Άνδρας</option>
                                                <option value="2">Γυναίκα</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">

                                            <label for="birthday">Ημερομηνία Γέννησης</label>
                                            <p></p>
                                            <input type="date" id="birthday" name="birthday" required>

                                        </div>
                                    </div>
                                </div>
                                <!--Στοιχεία Χρήστη-->

                                &nbsp;

                                <!--Στοιχεία Εισόδου-->
                                <div class="col-md-5">
                                    <h5 class="text-center">Στοιχεία Εισόδου</h5>
                                    <div class="col">
                                        <label for="username" class="form-label">Όνομα Χρήστη</label>
                                        <input type="text" class="form-control form-control-lg" name="username" id="username" required>
                                    </div>

                                    <div class="col">
                                        <label for="password" class="form-label">Κωδικός Χρήστη</label>
                                        <input type="password" name="password_1" class="form-control" id="password_1" required>
                                    </div>
                                    <div class="col">
                                        <label for="password" class="form-label">Επιβεβαίωση Κωδικού Χρήστη</label>
                                        <input type="password" name="password_2" class="form-control" id="password_2" required>
                                    </div>
                                </div>
                                <!--Στοιχεία Εισόδου-->

                            </div>
                            <?php
                            if (isset($_POST['login_user'])) {
                                include('./php/errors.php');
                            }
                            ?>

                            <br>


                            <!--Submit Button-->
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-success" name="register_user_button" id="register">Εγγραφή</button>

                            </div>
                            <!--Submit Button-->

                        </div>
                    </form>
                </div>
                <!--Προσωπικά Στοιχεία-->

            </div>
        </div>
        <!--Εγγραφή Μέλους - Χρήστη-->


        <br>
        <?php
        if(isset($_POST['chat_button'])){
            include('./chat.php');
        }
        ?>
        <form name="chat" action="egrafi_xristi.php" method="post">
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
