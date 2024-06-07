<?php

$connection = mysqli_connect("localhost", "root", "1234", "adminpanel");

if (isset($_POST['registerbtn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    if ($password === $cpassword) {
        $query = "INSERT INTO register (username, email, password) VALUES ('$username' ,'$email','$password')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            $_SESSION['success'] = "Admin Profile Added";
            header('Location: register.php');
            exit(); // Make sure to exit after setting the header to avoid further execution of the script.
        } else {
            $_SESSION['status'] = "Admin Profile not added";
            header('Location: register.php');
            exit();
        }
    } else {
        $_SESSION['status'] = "Password and Confirm Password do not match";
        header('Location: register.php');
        exit();
    }
}
?>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
