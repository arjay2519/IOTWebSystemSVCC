<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Control Panel</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Main style for all gee 08/28/2022 -->
    <link href="css/main.css" rel="stylesheet">
    <!-- ALERTIFY CSS -->
    <link rel="stylesheet" href="js/alertify/css/alertify.css" />
    <link rel="stylesheet" href="js/alertify/css/themes/default.min.css" />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon img-fluid">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <?php if ($_SESSION['role'] == 'admin') {?>
                <li class="nav-item active">
                <a class="nav-link" href="user_register.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>User Register</span></a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="instructor_register.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Instructor Register</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="instructor_list.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Instructor List</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="maintenance.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Maintenance</span></a>
                </li>
            <?php } ?>
        

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <?php
            
            include_once('components.php')
            ?>
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
                    <a class="nav-link hamburger" aria-current="page" href="#"><img src="img/list.svg"></a>
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-lg-inline text-white-600 small">
                                        <?php echo $_SESSION['username']; ?>
                                    </span>
                                    <img class="img-profile rounded-circle"
                                        src="img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                </nav>
                
                <!-- End of Topbar -->