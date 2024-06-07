<?php
include( 'includes/header.php'); 
 include( 'includes/navbar.php'); ?>

<!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

             

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                       
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Registered Admin</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                           
                                                $connection = mysqli_connect("localhost","root","1234","adminpanel");
                                                $query = "SELECT id FROM register ORDER BY id";
                                                $query_run =mysqli_query($connection,$query);
                                                $row = mysqli_num_rows( $query_run);
                                                echo '<h4>'.$row.'</h4>'
                                                ?>
                                         


                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add this form at the beginning of your container-fluid -->
                        <div class="row">
                            <div class="col-md-12">
                                <form method="post" action="publish_notification.php">
                                    <div class="form-group">
                                        <label for="notificationTitle">Notification Title:</label>
                                        <input type="text" class="form-control" id="notificationTitle" name="notificationTitle" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="notificationContent">Notification Content:</label>
                                        <textarea class="form-control" id="notificationContent" name="notificationContent" rows="3" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Publish Notification</button>
                                </form>
                            </div>
                        </div>

                    </div>

                  

                        
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        <!-- End of Content Wrapper -->
        
<?php include('includes/scripts.php');
   ?>