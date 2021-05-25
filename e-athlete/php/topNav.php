<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="images/logo1.png" class="d-inline-block align-top"alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Αρχική</a>
                </li> 
               <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="gia_emas.php">Για εμάς</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="athlimata.php">Αθλήματα</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="epikoinonia.php">Επικοινωνία</a>
                </li>
            </ul>
            <form class="d-flex" action="athlimata.php" method="post">
                <input class="form-control me-2" name="search_something" type="search" placeholder="περιοχή ή άθλημα" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" name="search">Αναζήτηση</button>
            </form>
            &nbsp;
            <form id="exit_form" name="exit_form" action="egrafi_xristi.php" method="post">
                <?php
                include_once ('./php/buttons.php');
                ?>
            </form>
        </div>
    </div>
</nav>