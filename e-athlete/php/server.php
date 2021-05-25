<?php

session_start();

$username = "";
$email = "";
$password_1 = "";
$password_2 = "";

$errors = array();


//σύνδεση στην βάση
$conn = mysqli_connect('localhost', 'root', '', 'eathlete') or die("δεν συνδέθηκες στην βάση");


// Εγγραφή Χρήστη

if (isset($_POST['register_user_button'])) {


    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $zip = mysqli_real_escape_string($conn, $_POST['zip']);
    $sex = mysqli_real_escape_string($conn, $_POST['sex']);
    $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);

    $username = mysqli_real_escape_string($conn, $_POST['username']);

    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);


    // Επικύρωση φόρμας
    if (empty($first_name)) {
        array_push($errors, "Υποχρεωτικό Όνομα Χρήστη.");
    }
    if (empty($last_name)) {
        array_push($errors, "Υποχρεωτικό Όνομα Χρήστη.");
    }
    if (empty($zip)) {
        array_push($errors, "Υποχρεωτικό Όνομα Χρήστη.");
    }
    if (empty($sex)) {
        array_push($errors, "Υποχρεωτικό Όνομα Χρήστη.");
    }
    if (empty($birthday)) {
        array_push($errors, "Υποχρεωτικό Όνομα Χρήστη.");
    }
    if (empty($email)) {
        array_push($errors, "Υποχρεωτικό Email.");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Λάθος σύνταξή email, πρέπει να είναι της μορφής example@example.com.");
    }

    if (empty($username)) {
        array_push($errors, "Υποχρεωτικό Όνομα Χρήστη.");
    }

    if (empty($password_1)) {
        array_push($errors, "Υποχρεωτικός Κωδικός Χρήστη.");
    }
    if (empty($password_2)) {
        array_push($errors, "Υποχρεωτική Επανάληψη Κωδικού Χρήστη.");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "Οι κωδικοί δεν ταιριάζουν, προσπάθησε ξανά.");
    }


    $number = preg_match('@[0-9]@', $password_1);
    $uppercase = preg_match('@[A-Z]@', $password_1);
    $lowercase = preg_match('@[a-z]@', $password_1);


    if (!$uppercase || !$lowercase || !$number || strlen($password_1) < 8) {
        array_push($errors, "Ο κωδικός πρέπει να αποτελείτε από 8 τουλάχιστον χαρακτήρες και να περιέχει τουλάχιστον ένα κεφαλαίο χαρακτήρα, ένα πεζό χαρακτήρα και έναν αριθμό.");
    }


    // έλεγχος εάν υπάρχει ήδη χρήστης με αυτό το user name

    $user_check_query = "SELECT users.user_name,user.email FROM users INNER JOIN user ON users.users_id=user.users_id "
            . "WHERE users.user_name='$username' OR user.email = '$email'";
    $result = mysqli_query($conn, $user_check_query);
    $user_check = mysqli_fetch_assoc($result);

    if ($user_check) {
        if ($user_check['user_name'] === $username) {
            array_push($errors, "Το συγκεκριμένο Όνομα Χρήστη υπάρχει ήδη, επέλεξε ένα διαφορετικό.");
        }
        if ($user_check['email'] === $email) {
            array_push($errors, "Το συγκεκριμένο Email υπάρχει ήδη, επέλεξε ένα διαφορετικό.");
        }
    }


    // Εγγραφή χρήστη 

    if (count($errors) == 0) {
        $password = $password_1;
        $query = "INSERT INTO users (user_name,password) VALUES ('$username','$password')";
        mysqli_query($conn, $query);

        $query2 = "INSERT INTO user (first_name,last_name,email,zip,sex_id,b_date,users_id) "
                . "VALUES ('$first_name','$last_name','$email','$zip','$sex','$birthday', "
                . "(SELECT users_id FROM users WHERE user_name = '$username')) ";

        mysqli_query($conn, $query2);


        header('location: olokl_ergrafis.php');
    }
}





// Σύνδεση χρήστη
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Επικύρωση φόρμας
    if (empty($username)) {
        array_push($errors, "Συμπλήρωσε το Όνομα Χρήστη.");
    }
    if (empty($password)) {
        array_push($errors, "Συμπλήρωσε τον Κωδικό Χρήστη.");
    }
    if (count($errors) == 0) {
//        $password = md5($password);
        $query = "SELECT user_name,password FROM users WHERE user_name='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);

        if (mysqli_num_rows($results) > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Επιτυχής Σύνδεση.";

            header('location: olokl_ergrafis.php');
        } else {
            array_push($errors, "Λάθος εισαγωγή στοιχείων. Προσπάθησε ξανά.");
        }
    }
}

// Σύνδεση χρήστη επιχείρησης
if (isset($_POST['login_user_comp'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username_comp']);
    $password = mysqli_real_escape_string($conn, $_POST['password_comp']);

    // Επικύρωση φόρμας
    if (empty($username)) {
        array_push($errors, "Συμπλήρωσε το Όνομα Χρήστη.");
    }
    if (empty($password)) {
        array_push($errors, "Συμπλήρωσε τον Κωδικό Χρήστη.");
    }
    if (count($errors) == 0) {
//        $password = md5($password);
        $query = "SELECT user_name,password FROM comp_users WHERE user_name='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);

        if (mysqli_num_rows($results) > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Επιτυχής Σύνδεση.";

            header('location: olokl_ergrafis.php');
        } else {
            array_push($errors, "Λάθος εισαγωγή στοιχείων. Προσπάθησε ξανά.");
        }
    }
}





// Έξοδος χρήστη
if (isset($_SESSION['username'])) {
    if (isset($_POST['exit'])) {
        unset($_SESSION['username']);
        unset($_SESSION['success']);
        
        echo "<script>alert(\"Αποσύνδεση επιτυχής.\")</script>";
        header('location: index.php');
    }
}