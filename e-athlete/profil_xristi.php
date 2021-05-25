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
                <h2 class="text-center"><strong>Προσωπικό Προφίλ Χρήστη</strong></h2>
                <!--Επικεφαλίδα-->

                <div class="col-md-3">
                    <div class="card-box">

                        <!--logo Εταιρείας-->
                        <div class="card-img-top text-center">
                            <img src="images/logo.png" class="img-thumbnail" alt=""> 
                        </div>
                        <!--logo Εταιρείας-->

                        <br>

                        <!--Επιλογές Μενού-->
                        <div class="nav flex-column nav-pills " id="v-pills-tab"  aria-orientation="vertical">
                            <h4 class="text-center">Όνομα Χρήστη</h4> 
                            <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button"  aria-controls="v-pills-profile" aria-selected="false">Προφίλ</button>
                            <button class="nav-link" id="v-pills-security-tab" data-bs-toggle="pill" data-bs-target="#v-pills-security" type="button"  aria-controls="v-pills-security" aria-selected="true">Ασφάλεια</button>
                            <br>
                            <h4 class="text-center">Οικογένεια</h4>
                            <button class="nav-link" id="v-pills-profile_kid-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile_kid" type="button" aria-controls="v-pills-profile_kid" aria-selected="false">Προφίλ Παιδιού</button>
                        </div>
                        <!--Επιλογές Μενού-->

                    </div>
                </div>

                <div class="col-md-9 border border-secondary-light rounded p-3">

                    <div class="tab-content" id="v-pills-tabContent">

                        <!--Προφίλ-->

                        <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <ul class="nav nav-tabs " id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"  aria-controls="home" aria-selected="true"><strong>Προσωπικές Πληροφορίες</strong></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="edit-tab" data-bs-toggle="tab" data-bs-target="#edit" type="button" aria-controls="edit" aria-selected="false"><strong>Επεξεργασία Στοιχείων</strong></button>
                                </li>
                            </ul>
                            <br>
                            <div class="tab-content" id="myTabContent">

                                <!--Στοιχεία Χρήστη-->
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-box ">
                                        <div class="card-body">
                                            <p class="text-muted font-13"><strong>Όνομα: </strong><span class="m-l-15">Νίκος</span></p>
                                            <hr>
                                            <p class="text-muted font-13"><strong>Επώνυμο: </strong><span class="m-l-15">Καπούτας</span></p>
                                            <hr> 
                                            <p class="text-muted font-13"><strong>Τηλέφωνο: </strong><span class="m-l-15">210 1234 56</span></p>
                                            <hr> 
                                            <p class="text-muted font-13"><strong>Email: </strong><span class="m-l-15">info@email.com</span></p>
                                            <hr> 
                                            <p class="text-muted font-13"><strong>Περιοχή: </strong><span class="m-l-15">Ηράκλειο</span></p>
                                            <hr> 
                                            <p class="text-muted font-13"><strong>Οδός: </strong><span class="m-l-15">Ραβινέ</span></p>
                                            <hr> 
                                            <p class="text-muted font-13"><strong>Αριθμός: </strong><span class="m-l-15">28</span></p>
                                            <hr> 
                                            <p class="text-muted font-13"><strong>Ταχ. Κώδικας: </strong><span class="m-l-15">13132</span></p>


                                        </div>
                                    </div>
                                </div>
                                <!--Στοιχεία Χρήστη-->

                                <!--Επεξεργασία Στοιχείων Χρήστη-->
                                <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="edit-tab">

                                    <!--Στοιχεία Χρήστη-->
                                    <div class="card border border-secondary-light rounded p-3">
                                        <div class="card-header text-left">
                                            <h4>Στοιχεία Χρήστη</h4>
                                        </div>

                                        <div class="card-body">
                                            <form action="/action_page.php" method="get" id="nameform">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <label for="inputCompanyName" class="form-label">Όνομα: </label>
                                                        <input type="text" class="form-control" placeholder="" aria-label="Επωνυμία Επιχείρησης" required>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="inputServices" class="form-label">Επώνυμο: </label>
                                                        <input type="text" class="form-control" id="Υπηρεσίες" required>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="inputPhone" class="form-label">Τηλέφωνο</label>
                                                        <input type="text" pattern="[0-9]{10}" title="10 Αριθμοί" maxlength="10" class="form-control" id="Τηλέφωνο" required>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="inputEmail" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="inputEmail4" required>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="inputArea" class="form-label">Περιοχή</label>
                                                        <input type="text" class="form-control" id="Περιοχή" required>
                                                    </div>                                    

                                                    <div class="col-md-4">
                                                        <label for="inputStreet" class="form-label">Οδός</label>
                                                        <input type="text" class="form-control" id="Διεύθυνση" required>
                                                    </div> 

                                                    <div class="col-md-2">
                                                        <label for="inputSteetNum" class="form-label">Αριθμός</label>
                                                        <input type="text" pattern="[0-9]{5}" title="Μόνο Αριθμοί" maxlength="5" class="form-control" id="Διεύθυνση" required>
                                                    </div> 

                                                    <div class="col-md-2">
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
                                    <!--Στοιχεία Χρήστη-->





                                </div>
                                <!--Επεξεργασία Στοιχείων Χρήστη-->
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
                                                        <textarea  id="message" name="message" rows="4" placeholder="Το μύνημα σου..." class="form-control md-textarea"></textarea>
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
                        <!--Προφίλ-->

                        <!--Ασφάλεια-->
                        <div class="tab-pane fade show active" id="v-pills-security" role="tabpanel" aria-labelledby="v-pills-home-tab">

                            <!--Αλλαγή: Όνομα Χρήστη-->
                            <div class="card border border-secondary-light rounded p-3">
                                <div class="card-header text-left">
                                    <h4>Αλλαγή Ονόματος Χρήστη</h4>
                                </div>

                                <div class="card-body">
                                    <form action="/action_page.php" method="get" id="nameform">
                                        <div class="row">

                                            <div class="col-md-6">
                                                <label for="inputCompanyName" class="form-label">Τρέχον Όνομα Χρήστη</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Υπάρχον Όνομα Χρήστη" required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputCompanyName" class="form-label">Νέο Όνομα Χρήστη</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Νέο Όνομα Χρήστη" required>
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
                            <!--Αλλαγή: Όνομα Χρήστη-->

                            <br>

                            <!--Αλλαγή Κωδικού Πρόσβασης-->
                            <div class="card border border-secondary-light rounded p-3">
                                <div class="card-header text-left">
                                    <h4>Αλλαγή Κωδικού Πρόσβασης</h4>
                                </div>

                                <div class="card-body">
                                    <form action="/action_page.php" method="get" id="nameform">
                                        <div class="row">

                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Τρέχον Κωδικός Πρόσβασης</label>
                                                <input type="password" class="form-control" id="inputPassword4" required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Νέος Κωδικός Πρόσβασης</label>
                                                <input type="password" class="form-control" id="inputPassword4" required>
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
                            <!--Αλλαγή Κωδικού Πρόσβασης-->

                        </div>
                        <!--Ασφάλεια-->


                        <div class="tab-pane fade" id="v-pills-profile_kid" role="tabpanel" aria-labelledby="v-pills-profile_kid-tab">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" aria-controls="profile" aria-selected="false">Προφίλ</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="activities-tab" data-bs-toggle="tab" data-bs-target="#activities" type="button" aria-controls="activities" aria-selected="false">Επεξεργασία</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="card-box ">
                                        <div class="card-body">
                                            <p class="text-muted font-13"><strong>Όνομα: </strong>
                                                <span class="m-l-15">
                                                    <?php
                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "eathlete";

                                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    }
                                                    $sql = "SELECT kid.name,kid.sex_id,kid.b_date,sex.sex FROM kid INNER JOIN sex ON kid.sex_id=sex.sex_id  WHERE kid_id=1";
                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo $row['name'];


                                                            echo '</span></p>';
                                                            echo '<hr>  <p class="text-muted font-13"><strong>Φύλο: </strong><span class="m-l-15">';

                                                            echo $row['sex'];
                                                            echo '</span></p>
                                            <hr>
                                            <p class="text-muted font-13"><strong>Ημερομηνία Γέννησης: </strong><span class="m-l-15">';
                                                            echo $row['b_date'];
                                                        }
                                                    } else {
                                                        echo "0 results";
                                                    } $conn->close();
                                                    ?>
                                                </span></p>
                                            <hr>
                                            <br>
                                            <h5>Δραστηριότητες</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="images/bala.jpg" class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Card title</h5>
                                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        </div>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">Άθλημα</li>
                                                            <li class="list-group-item">Περιοχή</li>
                                                        </ul>
                                                        <div class="card-body">
                                                            <a href="#" class="btn btn-link">link</a>
                                                        </div>
                                                    </div>
                                                </div>   
                                                <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="images/bala.jpg" class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Card title</h5>
                                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        </div>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">Άθλημα</li>
                                                            <li class="list-group-item">Περιοχή</li>
                                                        </ul>
                                                        <div class="card-body">
                                                            <a href="#" class="btn btn-link">link</a>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="images/bala.jpg" class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Card title</h5>
                                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        </div>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">Άθλημα</li>
                                                            <li class="list-group-item">Περιοχή</li>
                                                        </ul>
                                                        <div class="card-body">
                                                            <a href="#" class="btn btn-link">link</a>
                                                        </div>
                                                    </div>
                                                </div> 


                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="activities" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="card-body">



                                        <form action = "update.php" method = "post" id = "nameform">
                                            <div class = "row">

                                                <div class = "col-md-6">
                                                    <label for = "inputKidName" class = "form-label">Όνομα: </label>
                                                    <input type = "text" name="kid_name" id="kid_name"class = "form-control"  required>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="inputSex" class="form-label">Φύλο</label>
                                                    <select class="form-control" name="kid_sex" id="kid_sex" required >
                                                        <option selected>Επίλεξε φύλο</option>
                                                        <option value="1">Άνδρας</option>
                                                        <option value="2">Γυναίκα</option>
                                                    </select>
                                                </div>



                                                <div class = "col-md-6">
                                                    <label for = "inputDate" class = "form-label">Ημερομηνία Γέννησης: </label>
                                                    <input type = "date" name="kid_date" class = "form-control" id = "kid_date" required>
                                                </div>


                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <!--Submit Button-->
                                            <div class = "d-grid gap-2 d-md-flex justify-content-md-end">
                                                <button type = "submit"  value = "Submit" class = "btn btn-success">Αποθήκευση</button>
                                            </div>
                                            <!--Submit Button-->

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>





                </div>
            </div>
            <br>



        </div>







        <br>
        <?php
        if (isset($_POST['chat_button'])) {
            include('./chat.php');
        }
        ?>
        <form name="chat" action="profil_xristi.php" method="post">
            <button type=submit name="chat_button" class="open_button" >Live Chat</button>

        </form>

        <!-- Footer -->
        <?php
        include('./php/footer.php');
        ?>
        <!-- Footer -->

        <!--Optional JavaScript;
        choose one of the two!-->

        <!--Option 1: Bootstrap Bundle with Popper -->
        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity = "sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin = "anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
        -->
    </body>
</html>
