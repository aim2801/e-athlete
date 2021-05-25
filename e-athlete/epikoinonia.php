<?php
include('./php/server.php');

if (isset($_POST['send_email'])) {


    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    if (empty($name)) {
        array_push($errors, "Υποχρεωτική συμπλήρωση Ονόματος και Επώνυμου.");
    }
    if (empty($email)) {
        array_push($errors, "Υποχρεωτική συμπλήρωση Email.");
    }
    if (empty($subject)) {
        array_push($errors, "Υποχρεωτική συμπλήρωση Θέματος.");
    }
    if (empty($message)) {
        array_push($errors, "Υποχρεωτική συμπλήρωση Μηνύματος.");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Λάθος σύνταξή email, πρέπει να είναι της μορφής example@example.com.");
    }
    if (count($errors) == 0) {

        $to = ""; // email της εταιρείας e-athlete
        $body = "";

        $body .= "Από: " . $name . "΄\r\n";
        $body .= "Email: " . $email . "΄\r\n";
        $body .= "Μύνημα: " . $message . "΄\r\n";

        mail($to, $subject, $body);
    }
}
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
        <!--epikoinonia -->
        <div class="container">
            <section class="mb-4">

                <!--Επικεφαλίδα-->
                <h2 class="h1-responsive font-weight-bold text-center my-4">Επικοινωνήστε μαζί μας</h2>
                <p class="text-center w-responsive mx-auto mb-5">
                    Έχετε ερωτήσεις; Μην διστάσετε να επικοινωνήσετε μαζί μας απευθείας. Η ομάδα μας θα επικοινωνήσει μαζί σας όσο το δυνατόν πιο σύντομα για να σας βοηθήσει.
                </p>
                <!--Επικεφαλίδα-->

                <div class="row">

                    <!--Μήνυμα-->
                    <div class="col-md-9 mb-md-0 mb-5">
                        <div class="box border p-4">

                            <form id="contact-form" name="contact-form" action="contact_page.php" method="post">
                                <div class="row ">
                                    <?php
                                    if (isset($_POST['send_email'])) {
                                        include('./php/errors.php');
                                    }
                                    ?>
                                    <div class="col-lg-12">
                                        <div class="md-form mb-0">
                                            <label for="name" class="">Όνομα</label>
                                            <input type="text" id="first_name" name="name" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="md-form mb-0">
                                            <label for="email" class="">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="md-form mb-0">
                                            <label for="subject" class="">Θέμα</label>
                                            <input type="text" id="subject" name="subject" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="md-form">
                                            <label for="message">Το μήνυμά σου</label>
                                            <textarea id="message" name="message" rows="8" class="form-control md-textarea" required></textarea>
                                        </div>
                                    </div>

                                </div>



                                <!--Submit Button-->
                                <div class="clearfix text-center mt-4">
                                    <button type="button" class="btn btn-danger">Ακύρωση</button>
                                    <button type="submit" class="btn btn-success" name="send_email">Αποστολή</button>
                                </div>

                                <!--Submit Button-->
                            </form>
                        </div>

                    </div>
                    <!--Μήνυμα-->

                    <!--Στοιχεία Εταιρείας-->
                    <div class="col-md-3 text-center">
                        <br><br>
                        <ul class="list-unstyled mb-0">

                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <h5> <strong>Διεύθυνση</strong></h5>
                                <p>Πολυτεχνείου 49, Ηράκλειο, 14121, Αττική </p>
                            </li>

                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                <h5> <strong>Τηλέφωνο</strong></h5>
                                <p>210 1234 567</p>
                            </li>

                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                <h5> <strong>Ηλεκτρονική Διεύθυνση</strong></h5>
                                <p>e-athlete@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--Στοιχεία Εταιρείας-->

                </div>

            </section>
        </div>

        <br><br>
        <?php
        if (isset($_POST['chat_button'])) {
            include('./chat.php');
        }
        ?>
        <form name="chat" action="epikoinonia.php" method="post">
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

