<?php
include 'includes/loginserv.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>System Login Page</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Main style for all gee 08/28/2022 -->
    <link href="css/login.css" rel="stylesheet">
</head>
<body class="body">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block login_img_content"></div>
                            <div class="col-lg-6">
                                <div class="p-5 login_div">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">AIRCON LOGIN PORTAL</h1>
                                    </div>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <select id="role" name="role" class="form-select form-select-lg mb-3 userLevel">
                                              <option selected value="user">USER</option>
                                              <option value="admin">ADMIN</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="username" name="username" class="form-control form-control-user"
                                                id="username" placeholder="Enter Username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="password" placeholder="Password">
                                        </div>
                                        <hr>
                                        <button type="submit" name="submit" class="btn btn-warning text-dark btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
