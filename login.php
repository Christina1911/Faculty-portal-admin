<?php
session_start();
include('includes/header.php');

include('includes/scripts.php');

?>

<style>
    .background-image {
        background-image: url('images/images/fcrit.png');
        background-size: cover;
        background-position: center;
        height: 100vh;
        margin: 0; /* Remove default margin */
        padding: 0; /* Remove default padding */
    }

    .card {
        background: none;
        border: none;
        box-shadow: none;
    }

    .outer-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .inner-container {
        max-width: 400px;
        width: 100%;
        padding: 20px;
    }
</style>

<div class="container-fluid background-image">
    <div class="outer-container">
        <div class="inner-container">
            <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Login Here!</h1>
<?php
if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
    echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
    unset($_SESSION['status']);
}
?>





                            </div>





                            <form class="user" action ="code.php" method="POST">
                                <div class="form-group">
                                    <input type="email" name ="email" class="form-control form-control-user"
                                     
                                        placeholder="Enter Email Address...">
                                </div>
                                <div class="form-group">
                                    <input type="password" name ="password" class="form-control form-control-user"
                               placeholder="Password">
                                </div>
                               
                                <button type="submit" name ="login_btn" class="btn btn-primary btn-user btn-block">
                                    Login
                                </a>
                              <hr>
</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

<?php
include('includes/scripts.php');

?>