<div class="container">
    <div class="module-container">
        <div class="row">
            <!-- aplicacion por Carlos Gonzalez -->
            <?php include 'sidebar.php'; ?>
            <div class="col-md-9 holder">
                <h3 class="text-muted holder-title">Peliculas agregadas</h3>
                <div class="module-holder">
                    <div class="row">
                        <!-- peliculas -->
                        <?php foreach ($peliculas as $pelicula): ?>
                            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 movie">
                                <div class="cat-title">
                                    <span><?php echo $pelicula['categoria_nombre']; ?></span>
                                </div>
                                <span class="rating"><i class="fa fa-star" aria-hidden="true"></i> <?php echo $pelicula['pelicula_puntuacion']; ?></span>
                                <a href="<?php echo base_url(); ?>blog/pelicula/<?php echo $pelicula['pelicula_id']; ?>">
                                    <img src="<?php echo base_url(); ?>public/img/<?php echo $pelicula['pelicula_caratula']; ?>" alt="" class="img-fluid rounded">
                                </a>
                                <div class="movie-meta">
                                    <h2 class="text-muted"><?php echo $pelicula['pelicula_titulo']; ?></h2>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- ./peliculas aplicacion desarrollada por Carlos Gonzalez -->
                    </div>
                </div>
                <nav>
                    <?php echo $pages; ?>
                </nav>
            </div>
        </div>
    </div>
    <!-- Porfavor de no lucrar con esta aplicacion ya que fue totalmente desarrollada por mi -->
</div>
