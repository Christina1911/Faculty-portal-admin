<?php
$server_name = "localhost";
$db_username = "root";
$db_password = "1234";
$db_name = "adminpanel";

$connection = mysqli_connect($server_name, $db_username, $db_password, $db_name);
$connection_status = true; // Assume the connection is successful by default

if (!$connection) {
    $connection_status = false;
}

// Rest of your code...

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Your HTML head content here -->
</head>

<body>

    <?php
    // Check if the connection failed and display an error message
    if (!$connection_status) {
        echo "<div class='container'>
            <div class='row'>
                <div class='col-md-8 mr-auto ml-auto text-center py-5 mt-5'>
                    <div class='card'>
                        <div class='card-body'>
                            <h1 class='card-title bg-danger text-white'> Database Connection Failed </h1>
                            <h2 class='card-title'> Database Failure</h2>
                            <p class='card-text'> Please Check Your Database Connection.</p>
                            <a href='#' class='btn btn-primary'>:( </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }
    ?>

    <!-- Your HTML body content here -->

</body>

</html>

