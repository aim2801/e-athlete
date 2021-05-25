
<?php

if (!isset($_SESSION["username"])) {
    echo "<div class=\"dropdown\">
    <button class=\"btn btn-outline-success dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
        Σύνδεση / Εγγραφή
    </button>
    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
        <li><a class=\"dropdown-item\" href=\"sindesi_egrafi_xristi.php\">Χρήστης</a></li>
        <li><a class=\"dropdown-item\" href=\"sindesi_epix.php\">Επιχείρηση</a></li>
    </ul>
</div>";
} else {
    $user = $_SESSION["username"];
    $q_users = "SELECT EXISTS (SELECT user_name FROM users WHERE user_name ='$user')";
    $q_comp_ysers = "SELECT EXISTS (SELECT user_name FROM comp_users WHERE user_name ='$user')";

    $res_users = mysqli_query($conn, $q_users);
    $res_comp_users = mysqli_query($conn, $q_comp_ysers);

    if (mysqli_num_rows($res_users) > 0) {
        $query1 = "SELECT user_name FROM users";
        $result1 = mysqli_query($conn, $query1);
        $new_user_check = mysqli_fetch_assoc($result1);
        if ($new_user_check['user_name'] === $user) {
            echo "<a href=\"profil_xristi.php\"><button type=\"button\" class=\"btn btn-success\" name=\"profile\" id=\"profile\">Προφιλ Χρήστη</button></a> &nbsp;";
        }
    }
    if (mysqli_num_rows($res_comp_users) > 0) {
        $query2 = "SELECT user_name FROM comp_users";
        $result2 = mysqli_query($conn, $query2);
        $new__comp_user_check = mysqli_fetch_assoc($result2);
        if ($new__comp_user_check['user_name'] === $user) {
            echo "<a href=\"profil_epix.php\"><button type=\"button\" class=\"btn btn-success\" name=\"profile\" id=\"profile\">Προφιλ Επιχείρησης</button></a> &nbsp;";
        }
    } echo "<button type=\"submit\" class=\"btn btn-success\" name=\"exit\" id=\"exit\">Έξοδος</button>";
}

