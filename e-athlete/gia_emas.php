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


        <p></p>
        <!--sundesi -->
        <div class="container">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Λίγα λόγια για εμάς</h2>
            <div class="clearfix">
                <img src="images/logo.png" class="col-md-2 float-md-end mb-3 ms-md-3" alt="...">
                <p>
                    Με το <strong>E-Athlete</strong> είναι εύκολο να βρεις το άθλημα που σου ταιριάζει, 
                    την τοποθεσία και το γυμναστήριο που σου αρέσει: <strong>στο τηλέφωνο, 
                        στον υπολογιστή ή στο tablet σου</strong>.
                </p>
                <p>
                    Υπάρχουν <strong>εκατοντάδες αθλητικές δραστηριότητες</strong> όπως και 
                    συνεργαζόμενα αθλητικά κτήρια που πληρούν το πιο αποτελεσματικό μαθησιακό 
                    πρόγραμμα όπως και τις πιο σύγχρονες εγκαταστάσεις που υπάρχουν αυτή τη στιγμή στην Ελλάδα. 
                    <strong>Επέλεξε το άθλημα που σου αρέσει</strong>  ή άφησε το E-Athlete να σε εκπλήξει με τις προτάσεις του.
                </p>
                <p>
                    Μπορείς επίσης να περιηγηθείς στα προφίλ των συνεργαζόμενων επιχειρήσεων 
                    και με βάση τις κριτικές και τις φωτογραφίες να επιλέξεις εάν σου ταιριάζει ο χώρος 
                    και οι ώρες των μαθημάτων. 
                    <strong>Γέμισε την ζωή σου με το E-Athlete</strong> εντάσσοντας τον εαυτό σου στον χώρο του 
                    αθλητισμού, <strong>εγγράψου δωρεάν</strong> και ανακάλυψε τα πάντα για τον αθλητισμό.
                </p>
            </div>
        </div>

        <!--sundesi -->
        <br>
        <?php
        if(isset($_POST['chat_button'])){
            include('./chat.php');
        }
        ?>
        <form name="chat" action="gia_emas.php" method="post">
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
