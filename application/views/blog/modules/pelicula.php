<!--  -->
<?php if (!empty($pelicula['pelicula_enlace'])): ?>
<div class="container">
    <div class="embed-responsive embed-responsive-21by9  video-pelicula">
        <!-- Agregar url del iframe -->
        <iframe src="<?php echo $pelicula['pelicula_enlace']; ?>"></iframe>
    </div>
</div>
<?php endif; ?>
<div class="container">
    <div class="module-container">
        <div class="row">
            <?php include 'sidebar.php'; ?>
            <div class="col-md-9 holder">
                <div class="module-holder">
                    <div class="row">
                        <div class="col-xs-5 col-sm-4 col-md-3">
                            <div class="movie-thumb">
                                <img src="<?php echo base_url(); ?>public/img/<?php echo $pelicula['pelicula_caratula']; ?>" alt="<?php echo $pelicula['pelicula_titulo']; ?>" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-xs-7 col-sm-8 col-md-9">
                            <div class="movie-info">
                                <h1 class="single-title"><?php echo $pelicula['pelicula_titulo']; ?></h1>
                                <div class="span-group">
                                    <span class="info-title"><strong>Estreno:</strong></span>
                                    <span class="info-text text-muted"><?php echo $pelicula['pelicula_estreno']; ?></span>
                                </div>
                                <div class="span-group">
                                    <span class="info-title"><strong>Director:</strong></span>
                                    <span class="info-text text-muted"><?php echo $pelicula['pelicula_director']; ?></span>
                                </div>
                                <div class="span-group">
                                    <span class="info-title"><strong>Pais:</strong></span>
                                    <span class="info-text text-muted"><?php echo $pelicula['pelicula_pais']; ?></span>
                                </div>
                                <div class="span-group">
                                    <span class="info-title"><strong>Duracion:</strong></span>
                                    <span class="info-text text-muted"><?php echo $pelicula['pelicula_duracion']; ?></span>
                                </div>
                                <div class="span-group">
                                    <span class="info-title"><strong>Puntuacion:</strong></span>
                                    <span class="info-text text-muted"><?php echo $pelicula['pelicula_puntuacion']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 movie-plot">
                            <p><?php echo $pelicula['pelicula_sinopsis']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
