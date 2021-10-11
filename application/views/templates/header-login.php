<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stroom-storing</title>

    <link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ckupdateor.com/4.16.0/standard/ckupdateor.js"></script>
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/style.css" />
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.0/chart.min.js"></script>


    <!-- Custom styles for this template-->
    <link href="<?php echo site_url(); ?>assets/css/admin.min.css" rel="stylesheet">
    <link href="<?php echo site_url(); ?>assets/css/style.css" rel="stylesheet">
</head>

<body id="login">
    <!-- Page Wrapper -->
    <?php if($this->session->userdata('logged_in')) : ?>
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon">
                    <img src="<?php echo site_url(); ?>assets/img/stroom-storing-icon.png" style="max-width: 50px;"/>
                </div>
                <div class="sidebar-brand-text mx-3">Dashboard <sup>1.5</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Service
            </div>

            <!-- Nav Item - Clients Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-users"></i>
                    <span>Klanten</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo site_url(); ?>clients/"><i class="fas  fa-eye fa-sm"></i> Overzicht klanten</a>
                        <a class="collapse-item" href="<?php echo site_url(); ?>clients_notes"><i class="fas  fa-note fa-sm"></i> Notities</a>
                        <a class="collapse-item" href="<?php echo site_url(); ?>clients/create/"><i class="fas  fa-plus fa-sm"></i> Toevoegen</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Appointments Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-calendar-plus"></i>
                    <span>Afspraken</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo site_url(); ?>appointments/"><i class="fas  fa-eye fa-sm"></i> Overzicht</a>
                        <a class="collapse-item" href="<?php echo site_url(); ?>appointments/create"><i class="fas  fa-plus fa-sm"></i> Toevoegen</a>
                        <a class="collapse-item" href="<?php echo site_url(); ?>fullcalendar/"><i class="fas fa-calendar"></i> Agenda</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Finance Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTasks"
                    aria-expanded="true" aria-controls="collapseTasks">
                    <i class="far fa-check-square"></i> <span>Taken</span>
                </a>
                <div id="collapseTasks" class="collapse" aria-labelledby="headingTasks"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo site_url(); ?>tasks/">Overzicht</a>
                        <a class="collapse-item" href="<?php echo site_url(); ?>tasks/create">Toevoegen</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Finance Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFinance"
                    aria-expanded="true" aria-controls="collapseFinance">
                    <i class="fas fa-university"></i>
                    <span>Financiën</span>
                </a>
                <div id="collapseFinance" class="collapse" aria-labelledby="headingFinance"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo site_url(); ?>invoices/">Overzicht</a>
                        <a class="collapse-item" href="<?php echo site_url(); ?>finance/create">Toevoegen</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Finance Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
                    aria-expanded="true" aria-controls="collapseUsers">
                    <i class="fas fa-user-tie"></i>
                    <span>Gebruikers</span>
                </a>
                <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo site_url(); ?>users/">Overzicht</a>
                        <a class="collapse-item" href="<?php echo site_url(); ?>users/create">Toevoegen</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Finance Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePosts"
                    aria-expanded="true" aria-controls="collapsePosts">
                    <i class="fas fa-user-tie"></i>
                    <span>Blog</span>
                </a>
                <div id="collapsePosts" class="collapse" aria-labelledby="headingPosts"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/posts/">Overzicht</a>
                        <a class="collapse-item" href="/posts/create">Toevoegen</a>
                    </div>
                </div>
            </li> -->

        </ul>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3  col-2">
                            <i class="fa fa-bars"></i>
                        </button> -->
                        <!-- <a href="clients/create/" class="btn btn-info col-3 my-2 my-md-0 mw-100">
                            Afspraak maken <i class="fas fa-chevron-circle-right"></i>
                        </a> -->
                        <!-- Topbar Search -->
                        <!-- <form class="d-none d-sm-inline-block form-inline mr-auto col-4 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                    aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form> -->
                        <!-- Topbar Search -->

                            <a href="/fullcalendar/" class="col my-2 my-md-0 mw-100">
                                <i class="fas fa-calendar"></i> Agenda
                            </a>
                            <a href="/users/register" class="col my-2 my-md-0 mw-100">
                                <i class="fas fa-user"></i> Gebruiker toevoegen
                            </a>
                            <a href="/users/logout" class="col my-2 my-md-0 mw-100">
                                <i class="fas fa-user"></i> Logout
                            </a>
                </nav>
                <?php endif; ?>
                <script>
                $(document).ready( function () {
                    $('#dataTable').DataTable();
                } );
                </script>


                <!-- End of Topbar -->
                <div class="container-fluid">
                      <?php if($this->session->flashdata('post_created')): ?>
                        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
                      <?php endif; ?>

                      <?php if($this->session->flashdata('post_updated')): ?>
                        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
                      <?php endif; ?>

                      <?php if($this->session->flashdata('category_created')): ?>
                        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
                      <?php endif; ?>

                      <?php if($this->session->flashdata('post_deleted')): ?>
                        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
                      <?php endif; ?>

                      <?php if($this->session->flashdata('login_failed')): ?>
                        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
                      <?php endif; ?>

                      <?php if($this->session->flashdata('user_loggedin')): ?>
                        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
                      <?php endif; ?>

                       <?php if($this->session->flashdata('user_loggedout')): ?>
                        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
                      <?php endif; ?>

                      <?php if($this->session->flashdata('category_deleted')): ?>
                        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
                      <?php endif; ?>
