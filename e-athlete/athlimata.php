<?php
include('./php/server.php');
if (isset($_POST['show'])) {

    $_SESSION['show'] = $_POST['comp_id'];
    //echo "<script>window.location = 'book.php'</script>";
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
        <!--????????????????-->
        <div class="container">
            <h2 class="h1-responsive font-weight-bold text-center my-4">????????????????</h2>
            <!--??????????????????-->
            <div class="row">
                <div class="col-3">

                    <!-- Navbar section -->
                    <nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom"> 


                        <input class="form-control me-2" type="search" placeholder="?????????????? ????????????????????" aria-label="Search">
                        &nbsp;
                        <!--Submit Button-->
                        <button type="submit" form="list-filter" value="Submit" class="btn btn-outline-success">??????????????????</button>
                        <!--Submit Button-->



                    </nav>
                    <!-- Navbar section -->

                    <!--????????????-????????????????-->
                    <form action="/action_page.php" method="get" id="list-filter"> 

                        <div class="py-2 border-bottom ml-3">
                            <h6 class="font-weight-bold">????????????</h6>
                            <div id="orange"><span class="fa fa-minus"></span></div>
                            <form>
                                <div class="form-group"> <input type="checkbox" id="tea"> <label for="tea">3 - 5 ????????</label> </div>
                                <div class="form-group"> <input type="checkbox" id="cookies"> <label for="cookies">6 - 10 ????????</label> </div>
                                <div class="form-group"> <input type="checkbox" id="pastries"> <label for="pastries">11 - 14 ????????</label> </div>
                                <div class="form-group"> <input type="checkbox" id="choco"> <label for="choco">15 ???????? ?????? ????????</label> </div>
                            </form>                          
                        </div>

                        <div class="py-2 border-bottom ml-3">
                            <h6 class="font-weight-bold">????????????</h6>
                            <div id="orange"><span class="fa fa-minus"></span></div>
                            <form>
                                <div class="form-group"> <input type="checkbox" id="region_name"> <label for="region_name">????????????????????</label> </div>
                                <div class="form-group"> <input type="checkbox" id="region_name"> <label for="region_name">??????????????</label> </div>
                                <div class="form-group"> <input type="checkbox" id="region_name"> <label for="region_name">??????????</label> </div>
                                <div class="form-group"> <input type="checkbox" id="region_name"> <label for="region_name">??????????????</label> </div>
                                <div class="form-group"> <input type="checkbox" id="region_name"> <label for="region_name">??????????</label> </div>
                                <div class="form-group"> <input type="checkbox" id="region_name"> <label for="region_name">??????????????????</label> </div>
                                <div class="form-group"> <input type="checkbox" id="region_name"> <label for="region_name">??????????</label> </div>
                            </form>
                        </div>

                        <div class="py-2 border-bottom ml-3">
                            <h6 class="font-weight-bold">????????????????</h6>
                            <div id="orange"><span class="fa fa-minus"></span></div>
                            <form>
                                <div class="form-group"> <input type="checkbox" id="tea"> <label for="tea">?????? 100</label> </div>
                                <div class="form-group"> <input type="checkbox" id="cookies"> <label for="cookies">100 - 250</label> </div>
                                <div class="form-group"> <input type="checkbox" id="choco"> <label for="choco">250 ?????? ????????</label> </div>
                            </form>                          
                        </div>

                        <div class="py-2 ml-3">
                            <section class="mb-4">
                                <h6 class="font-weight-bold">?????????? ?????????? ?????? ????????</h6>
                                <div class="slider-price d-flex align-items-center my-4">
                                    <span class="font-weight-normal small text-muted mr-2">0???</span>
                                    <form class="multi-range w-4 mb-4">
                                        <input id="multi" class="multi-range" type="range" />
                                    </form>
                                    <span class="font-weight-normal small text-muted ml-2">500???</span>
                                </div>
                            </section>
                        </div>

                    </form>
                    <!--????????????-????????????????-->

                </div>

                <!--????????????????????????-->
                <div class="col-md-8">
                    <section id="products">
                        <div class="container">

                            <!--????????????????????-->
                            <div class="nav justify-content-end">
                                <div class="text-muted m-2" id="res">???????????????????????? ???????????????????? 44</div>

                            </div>
                            <!--????????????????????-->

                            <div class="row">

                                <!--????????????????-->
                                <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">


                                    <?php
                                    $a = "";
                                    $search = "";
                                    $search_area = "";
                                    $search_athlima = "";
                                    if (isset($_POST['search'])) {

                                        $search = $_POST['search_something'];
                                        $a = "WHERE company.area LIKE '%$search%' OR company_sp.sport LIKE '%$search%'";
                                    }
                                    if (isset($_POST['search_d'])) {

                                        $search_area = $_POST['search_area'];
                                        $search_athlima = $_POST['search_athlima'];
                                        $a = "WHERE company.area LIKE '%$search%' AND company_sp.sport LIKE '%$search%'";
                                    }

                                    $sq = "SELECT company_sp.sport,company_sp.photo,company.name,company.comp_id,company.area FROM company_sp "
                                            . "INNER JOIN company ON company_sp.comp_id=company.comp_id "
                                            . "$a";

                                    $result = $conn->query($sq);

                                    if ($result->num_rows > 0) {

                                        while ($row = $result->fetch_assoc()) {

                                            echo "<div class=\"card\" style=\"width: 18rem;\">
                                                <form action=\"athlimata.php\" method=\"post\">
                                        <img src=\"" . $row['photo'] . "\" class=\"card-img-top\" alt=\"...\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title\">" . $row['name'] . "</h5>
                                            
                                        </div>
                                        <ul class=\"list-group list-group-flush\">
                                            <li class=\"list-group-item\">" . $row['sport'] . "</li>
                                            <li class=\"list-group-item\">" . $row['area'] . "</li>
                                            
                                        </ul>
                                        <div class=\"card-body\">
                                            <button type=\"submit\" class=\"btn btn-success\" name=\"show\">??????????????</button>
                                        </div>
                                        <input type='hidden' name=\"comp_id\" value=\"" . $row['comp_id'] . "\">
                                        </form>
                                    </div>";
                                        }
                                    } else {
                                        echo '<div class="col-lg-12"><h5>???????????????????????? ???????????????????? 0.</h5><br></div>';
                                    }
                                    ?>

                                </div>






                            </div>
                            <!--????????????????-->

                        </div>
                        <br>

                        <!--???????????????? ??????????????-->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                        <!--???????????????? ??????????????-->

                    </section>
                </div>
                <!--????????????????????????-->

            </div>
            <!--??????????????????-->

        </div>
        <!--????????????????-->


        <br>
        <?php
        if (isset($_POST['chat_button'])) {
            include('./chat.php');
        }
        ?>
        <form name="chat" action="athlimata.php" method="post">
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
