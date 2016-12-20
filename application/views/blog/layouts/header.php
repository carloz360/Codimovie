<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo !empty($page_title) ? $page_title : 'Sin titulo'; ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/frontend.css">
</head>

<body>

    <header class="header">
        <nav class="navbar navbar-dark">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
                <div class="collapse navbar-toggleable-md" id="navbarResponsive">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">Cineplus</a>
                    <?php echo form_open('blog/buscar', array('class' => 'form-inline float-lg-right', 'method' => 'get')); ?>
                        <input class="form-control" type="text" name="query" placeholder="Buscar titulo..">
                        <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </nav>
    </header>
    <!-- container -->
