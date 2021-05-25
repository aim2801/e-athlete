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

        <!--Προσωπικό Προφίλ Επιχείρησης-->
        <div class="container">
            <div class="row">

                <!--Επικεφαλίδα-->
                <h2 class="text-center"><strong>Προσωπικό Προφίλ Επιχείρησης</strong></h2>
                <!--Επικεφαλίδα-->

                <div class="col-md-3">
                    <div class="card-box">

                        <!--logo Εταιρείας-->
                        <div class="card-img-top text-center">
                            <img src="images/logo.png" class="img-thumbnail" alt=""> 
                        </div>
                        <!--logo Εταιρείας-->

                    </div>
                </div>

                <div class="col-md-9 border border-secondary-light rounded p-3">
                    <ul class="nav nav-tabs " id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Στοιχεία Επιχείρησης</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Προφίλ Επιχείρησης</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="edit-tab" data-bs-toggle="tab" data-bs-target="#edit" type="button" role="tab" aria-controls="edit" aria-selected="false">Επεξεργασία Στοιχείων-Προφίλ</button>
                        </li>
                    </ul>
                    <br>
                    <div class="tab-content" id="myTabContent">

                        <!--Στοιχεία Επιχείρησης-->
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card-box ">
                                <div class="card-body">
                                    <p class="text-muted font-13"><strong>Επωνυμία: </strong><span class="m-l-15">Karate Kid</span></p>
                                    <hr>
                                    <p class="text-muted font-13"><strong>Υπηρεσίες: </strong><span class="m-l-15">Καράτε</span></p>
                                    <hr> 
                                    <p class="text-muted font-13"><strong>Α.Φ.Μ.: </strong><span class="m-l-15">800 1245 67</span></p>
                                    <hr> 
                                    <p class="text-muted font-13"><strong>Δ.Ο.Υ.: </strong><span class="m-l-15">Β' Περιστερίου</span></p>
                                    <hr> 
                                    <p class="text-muted font-13"><strong>Περιοχή: </strong><span class="m-l-15">Περιστέρι</span></p>
                                    <hr> 
                                    <p class="text-muted font-13"><strong>Διεύθυνση: </strong><span class="m-l-15">Θηβών 28</span></p>
                                    <hr> 
                                    <p class="text-muted font-13"><strong>Ταχ. Κώδικας: </strong><span class="m-l-15">13132</span></p>
                                    <hr> 
                                    <p class="text-muted font-13"><strong>Τηλέφωνο: </strong><span class="m-l-15">210 1234 56</span></p>
                                    <hr> 
                                    <p class="text-muted font-13"><strong>Email: </strong><span class="m-l-15">karatekid@email.gr</span></p>
                                </div>
                            </div>
                        </div>
                        <!--Στοιχεία Επιχείρησης-->

                        <!--Προφίλ Επιχείρησης-->
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="card border border-secondary-light rounded p-3">
                                <div class="card-header text-left">
                                    <h4>Στοιχεία Εταιρείας</h4>
                                </div>

                                <!--Στοιχεία Εταιρείας-->
                                <div class="card-body">
                                    <p class="text-muted font-13"><strong>Διευθυνση: </strong><span class="m-l-15">Θηβών 28 - Περιστερι</span></p>
                                    <hr>
                                    <p class="text-muted font-13"><strong>Τομείς απασχόλησης: </strong> <span class="m-l-15">Καράτε</span></p>
                                    <hr>
                                    <p class="text-muted font-13"><strong>Ώρες λειτουργίας: </strong> <span class="m-l-15">14:00 - 21:00</span></p>
                                    <hr>
                                    <p class="text-muted font-13"><strong>Τηλέφωνο: </strong> <span class="m-l-15">210 1234 56</span></p>
                                </div>
                                <!--Στοιχεία Εταιρείας-->

                            </div>

                            <br>

                            <!--Κείμενο-->
                            <div class="card border border-secondary-light rounded p-3">
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
                            <!--Κείμενο-->

                            <br>

                            <!--Φωτογραφίες-->
                            <div class="card border border-secondary-light rounded p-3">
                                <div class="card-header text-left">
                                    <h4><strong>Φωτογραφίες</strong></h4>
                                </div>
                                <div class="card-body">
                                    <img src="images/logo.png" class="img-thumbnail" alt="...">
                                    <img src="images/logo.png" class="img-thumbnail" alt="...">
                                    <img src="images/logo.png" class="img-thumbnail" alt="...">
                                    <img src="images/logo.png" class="img-thumbnail" alt="...">
                                    <img src="images/logo.png" class="img-thumbnail" alt="...">
                                    <img src="images/logo.png" class="img-thumbnail" alt="...">                                                                                                           
                                </div>
                            </div>
                            <!--Φωτογραφίες-->

                            <br>

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

                            <br>

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
                        <!--Προφίλ Επιχείρησης-->

                        <!--Επεξεργασία Στοιχείων - Προφίλ-->
                        <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="edit-tab">

                            <!--Στοιχεία Επιχείρησης-->
                            <div class="card border border-secondary-light rounded p-3">
                                <div class="card-header text-left">
                                    <h4>Στοιχεία Επιχείρησης</h4>
                                </div>

                                <div class="card-body">
                                    <form action="/action_page.php" method="get" id="nameform">
                                        <div class="row">

                                            <div class="col-md-6">
                                                <label for="inputCompanyName" class="form-label">Επωνυμία Επιχείρησης</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Επωνυμία Επιχείρησης" required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputServices" class="form-label">Υπηρεσίες</label>
                                                <input type="text" class="form-control" id="Υπηρεσίες" required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputAfm" class="form-label">Α.Φ.Μ</label>
                                                <input type="text" pattern="[0-9]{9}" title="9 Αριθμοί" maxlength="9" class="form-control" id="Α.Φ.Μ" required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputDoy" class="form-label">Δ.Ο.Υ</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Δ.Ο.Υ" required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputFirstName" class="form-label">Όνομα Ιδιοκτήτη</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Όνομα Ιδιοκτήτη" required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputEmail" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4" required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputPhone" class="form-label">Τηλέφωνο</label>
                                                <input type="text" pattern="[0-9]{10}" title="10 Αριθμοί" maxlength="10" class="form-control" id="Τηλέφωνο" required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputArea" class="form-label">Περιοχή</label>
                                                <input type="text" class="form-control" id="Περιοχή" required>
                                            </div>                                    

                                            <div class="col-md-6">
                                                <label for="inputStreet" class="form-label">Οδός</label>
                                                <input type="text" class="form-control" id="Διεύθυνση" required>
                                            </div> 

                                            <div class="col-md-2">
                                                <label for="inputSteetNum" class="form-label">Αριθμός</label>
                                                <input type="text" class="form-control" id="Διεύθυνση" required>
                                            </div> 

                                            <div class="col-md-4">
                                                <label for="inputZip" class="form-label">Ταχ. Κώδικας</label>
                                                <input type="text" pattern="[0-9]{5}" title="Μόνο Αριθμοί" maxlength="5" class="form-control" id="inputZip" required>
                                            </div>

                                        </div>
                                    </form>

                                    <br>

                                    <!--Submit Button-->
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button type="submit" form="nameform" value="Submit" class="btn btn-success">Αποθήκευση</button>
                                    </div>
                                    <!--Submit Button-->

                                </div>
                            </div>
                            <!--Στοιχεία Επιχείρησης-->

                            <br>

                            <!--Προφίλ Επιχείρησης-->
                            <div class="card border border-secondary-light rounded p-3">
                                <div class="card-header text-left">
                                    <h4>Προφίλ Επιχείρησης</h4>
                                </div>
                                <form action="/action_page.php" method="get" id="profilEpixform">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <label for="inputTime" class="form-label">Ώρες λειτουργίας</label>
                                            <input type="text" class="form-control" placeholder="" aria-label="Ώρες λειτουργίας" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputHealthDocuments" class="form-label">Υποχρεωτικά Έγγραφα Υγείας</label>
                                            <input type="text" class="form-control" placeholder="" aria-label="Υποχρεωτικά Έγγραφα Υγείας" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCertificates" class="form-label">Πιστοποιητικά</label>
                                            <input type="text" class="form-control" placeholder="" aria-label="Ώρες λειτουργίας" required>
                                        </div>
                                    </div>
                                </form>

                                <!--Submit Button-->
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" form="profilEpixform" value="Submit" class="btn btn-success">Αποθήκευση</button>
                                </div>
                                <!--Submit Button-->

                            </div>
                            <div class="card border border-secondary-light rounded p-3">
                                <div class="card-header text-left">
                                    <h4>Φωτογραφίες</h4>
                                </div>

                                <div class="card-body">
                                    <img src="images/logo.png" class="img-thumbnail" alt="...">
                                    <img src="images/logo.png" class="img-thumbnail" alt="...">
                                    <img src="images/logo.png" class="img-thumbnail" alt="...">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Προσθήκη Φωτογραφίας</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>

                                <!--Submit Button-->
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" form="formFile" value="Submit" class="btn btn-success">Αποθήκευση</button>
                                </div>
                                <!--Submit Button-->

                            </div>
                            <!--Προφίλ Επιχείρησης-->

                        </div>
                        <!--Επεξεργασία Στοιχείων - Προφίλ-->

                    </div>
                </div>
            </div>
        </div>







        <br>
        <?php
        if (isset($_POST['chat_button'])) {
            include('./chat.php');
        }
        ?>
        <form name="chat" action="profil_epix.php" method="post">
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
