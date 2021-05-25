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
        <br>

        <div class="container">

            <!--Εικόνα-->
            <div class="text-center">
                <img src="images/main.png" class="rounded" alt="...">
            </div>
            <!--Εικόνα-->

            <!--Επικεφαλίδα-->
            <h2 class="text-center"><strong>Βρες το άθλημα που σε ενδιαφέρει!</strong></h2>
            <!--Επικεφαλίδα-->

            <br>

            <!--Αναζήτηση-->
            <div class="container col-md-4 offset-md-4">

                <form class="d-flex" action="athlimata.php" method="post">

                    <!--Πεδία Αναζήτησης-->
                    <input class="form-control me-2" type="text" name="search_athlima" placeholder="Άθλημα" aria-label="Search">
                    <br>
                    <input class="form-control me-2" type="text" name="search_area" placeholder="Περιοχή" aria-label="Search">
                    <!--Πεδία Αναζήτησης-->

                    <br>

                    <!--Submit Button-->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-outline-success" type="submit" name="search_d">Αναζήτηση</button>
                    </div>
                    <!--Submit Button-->
                </form>
            </div>
            <!--Αναζήτηση-->

        </div>


        <br>
        <?php
        if(isset($_POST['chat_button'])){
            include('./chat.php');
        }
        ?>
        <form name="chat" action="index.php" method="post">
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
