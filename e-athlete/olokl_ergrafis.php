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
        <br>

        <!--Ολοκλήρωση Εγγραφής-->
        <div class="container-fluid">
            <div class="text-center">
                <img src="images/main.png" class="rounded" alt="...">
            </div>

            <?php
            if (isset($_SESSION['username'])) {
                echo "<h2 class=\"text-center\"><strong>Συνδέθηκες επιτυχώς!</strong></h2>";
            }
            if (!isset($_SESSION['username'])) {
                echo "<h2 class=\"text-center\"><strong>Ολοκληρώθηκε η εγγραφή σου επιτυχώς!</strong></h2>"
                . "<h5 class=\"text-center\">Συνδέσου και εξερεύνησε τον κόσμο του e-athlete</h5> ";
            }
            ?>

        </div>
        <!--Ολοκλήρωση Εγγραφής-->

        <br>
        <br>
        <?php
        if (isset($_POST['chat_button'])) {
            include('./chat.php');
        }
        ?>
        <form name="chat" action="olokl_ergrafis.php" method="post">
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
