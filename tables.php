<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "adminpanel";
$con = mysqli_connect($servername, $username, $password, $dbname);
if($con)
{
//echo "Connection successful";
}
else
{
echo "Connection failed"."mysqli_connnect_error";
} 

$imn = "SELECT * FROM vac";
$resultn = mysqli_query($con, $imn);
$rown = mysqli_fetch_assoc($resultn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Leave Applications</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <div class="sidebar">
                <div class="logo">
                    <img class="logo-img" src="images/images/logo.jpg" width="100" height="100">
                </div>
                <hr class="sidebar-divider my-0">
                <!-- Dashboard Link -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <hr class="sidebar-divider">
                <!-- Admin Profile Link -->
                <li class="nav-item">
                    <a class="nav-link" href="register.php">
                        <i class="fa fa-user"></i>
                        <span>Admin Profile</span>
                    </a>
                </li>
                <hr class="sidebar-divider">
                <!-- Leave Applications Link -->
                <li class="nav-item active">
                    <a class="nav-link" href="tables.html">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Leave Applications</span>
                    </a>
                </li>
                <hr class="sidebar-divider d-none d-md-block">
            </div>
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle Button -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- User Dropdown -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php //echo $_SESSION['username']; ?>
                                </span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- User Dropdown Menu -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!-- Profile Link -->
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <!-- Settings Link -->
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <!-- Activity Log Link -->
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <!-- Logout Link -->
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Leave Applications</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Reason for leave</th>
                                            <th>Employee ID</th>
                                            <th>Remaining leaves</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            while($rown = mysqli_fetch_assoc($resultn)) {
                                                echo "<tr>";
                                                $i=1;
                                                
                                                echo "<td>" . $rown['name'] . "</td>";
                                                echo "<td>" . $rown['reason'] . "</td>";
                                                echo "<td>" . $rown['Eid'] . "</td>";
                                                echo "<td>" . $rown['remaining'] . "</td>";
                                                echo "<td>" . $rown['sdate'] . "</td>";
                                                echo "<td>" . $rown['edate'] . "</td>";
                                                echo "<td>";
                                        ?>
                                                <form method="POST">
                                                    <button type="submit" name="then" class='btn btn-success' onclick='acceptRequest()'>Accept</button>
                                                    <button type="submit" name="then" class='btn btn-danger' onclick='rejectRequest()'>Reject</button>
                                                </form>
                                            
                                        <?php 
                                                if(isset($_POST['then'])){
                                                   $name=$rown['name'];
                                                    $query = "DELETE FROM vac WHERE name = '$name' ";
                                                
                                                    $result = mysqli_query($con,$query);
                                                    
                                                    
                                                }
                                                echo "</tr>";
                                            }
                                        ?>   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- ... Your existing scripts and closing tags ... -->

    <!-- Custom Script for Leave Request Actions -->
    <script>
        function acceptRequest(requestId) {
            // Make an AJAX request to your server to update the status
            let url = 'leave_requests.php'; // Update with the correct path
            sendAjaxRequest(url, { requestId: requestId, status: 'accepted' })
                .then(response => {
                    console.log('Leave request accepted:', response);
                    // You may want to update the UI or perform additional actions
                })
                .catch(error => {
                    console.error('Error accepting leave request:', error);
                });
        }

        function rejectRequest(requestId) {
            // Make an AJAX request to your server to update the status
            let url = 'leave_requests.php'; // Update with the correct path
            sendAjaxRequest(url, { requestId: requestId, status: 'rejected' })
                .then(response => {
                    console.log('Leave request rejected:', response);
                    // You may want to update the UI or perform additional actions
                })
                .catch(error => {
                    console.error('Error rejecting leave request:', error);
                });
        }

        // Placeholder function for making AJAX requests
        function sendAjaxRequest(url, data) {
            return fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data),
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            });
        }
    </script>

</body>

</html>
