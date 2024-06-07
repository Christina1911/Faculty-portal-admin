<?php
include( 'security.php'); 
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