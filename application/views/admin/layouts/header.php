<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo !empty($page_title) ? $page_title : 'sin titulo'; ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/backend.css">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <nav class="navbar navbar-dark">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
                <div class="collapse navbar-toggleable-md" id="navbarResponsive">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>admin">Dashboard</a>
                    <?php if ($this->session->userdata('logged_in')): ?>
                        <ul class="nav navbar-nav float-lg-right">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="responsiveNavbarDropdown">
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>"><i class="fa fa-globe" aria-hidden="true"></i> sitio</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>admin/salir"><i class="fa fa-sign-out" aria-hidden="true"></i> salir</a>
                                </div>
                            </li>
                        </ul>
                    <?php endif; ?>
                </div>
            </nav>
        </header>
