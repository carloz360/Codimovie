<div class="container-fluid">
    <div class="row">
        <?php include 'sidebar.php'; ?>
        <div class="col-xs-10 col-sm-11 col-lg-11 col-xl-10 right-side">
            <h1 class="dash-title"><i class="fa fa-plus-circle" aria-hidden="true"></i> Actualizar pelicula</h1>
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger" role="alert" style="text-align:center">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
            <div class="alert alert-warning alert-dismissible" id="carlos-gonzalez" role="alert">
                <button type="button" class="close"><span>&times;</span></button>
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                <strong>Nota:</strong> Tienes que volver a actualizar la imagen y la categoria.
            </div>
            <?php echo form_open_multipart(); ?>
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title text-muted">Informacion general</h6>
                    </div>
                    <div class="card-block">
                        <div class="form-group">
                            <label for="t">Titulo</label>
                            <p class="text-muted"><small>Agrega un titulo</small></p>
                            <input type="text" name="pelicula_titulo" class="form-control" id="t" value="<?php echo $pelicula['pelicula_titulo']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Imagen</label>
                            <p class="text-muted"><small>seleccionar la imagen</small></p>
                            <input type="file" id="file" name="userfile">
                        </div>
                        <div class="form-group">
                            <label for="s">Sinopsis</label>
                            <p class="text-muted"><small>Agrega una sinopsis</small></p>
                            <textarea name="pelicula_sinopsis" id="s" class="form-control" rows="10" cols="80"><?php echo $pelicula['pelicula_sinopsis']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="e">Estreno</label>
                            <p class="text-muted"><small>Fecha de estreno</small></p>
                            <input type="text" name="pelicula_estreno" class="form-control" id="e" value="<?php echo $pelicula['pelicula_estreno']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="p">Puntuacion</label>
                            <p class="text-muted"><small>Agrega una puntuacion</small></p>
                            <input type="text" name="pelicula_puntuacion" class="form-control" id="p" value="<?php echo $pelicula['pelicula_puntuacion']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="di">Director</label>
                            <p class="text-muted"><small>Nombre del director</small></p>
                            <input type="text" name="pelicula_director" class="form-control" id="di" value="<?php echo $pelicula['pelicula_director']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="du">Duracion</label>
                            <p class="text-muted"><small>Duracion de la pelicula</small></p>
                            <input type="text" name="pelicula_duracion" class="form-control" id="du" value="<?php echo $pelicula['pelicula_duracion']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="pa">Pais</label>
                            <p class="text-muted"><small>Agrega el pais</small></p>
                            <input type="text" name="pelicula_pais" class="form-control" id="pa" value="<?php echo $pelicula['pelicula_pais']; ?>">
                        </div>
                        <div class="form-group">
                            <label>seleciona una categoria</label>
                            <select class="form-control" name="categoria_id">
                                <?php foreach ($categorias as $categoria): ?>
                                    <option value="<?php echo $categoria['categoria_id']; ?>">
                                        <?php echo $categoria['categoria_nombre']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- \card -->
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title text-muted">Bloque de enlaces</h6>
                    </div>
                    <div class="card-block">
                        <div class="form-group">
                            <label for="s">Enlace 1</label>
                            <p class="text-muted"><small>Agregar url del iframe jemplo <strong>"https://www.youtube.com/embed/rmC3ZhIHHi4"</strong> sin comillas.</small></p>
                            <textarea name="pelicula_enlace" id="s" class="form-control" rows="4" cols="80"><?php echo $pelicula['pelicula_enlace']; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="button-submit">
                    <input type="hidden" name="id" value="<?php echo $pelicula['pelicula_id']; ?>">
                    <button type="submit" class="btn btn-info">Actualizar</button>
                </div>
            <?php echo form_close(); ?>
        </div>
        <!--\.right-side-->
    </div>
    <!--\.row-->
</div>
<!--\.container-->
