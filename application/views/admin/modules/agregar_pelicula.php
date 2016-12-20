<div class="container-fluid">
    <div class="row">
        <?php include 'sidebar.php'; ?>
        <div class="col-xs-10 col-sm-11 col-lg-11 col-xl-10 right-side">
            <h1 class="dash-title"><i class="fa fa-plus-circle" aria-hidden="true"></i> Nueva pelicula</h1>
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger" role="alert" style="text-align:center">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
            <?php echo form_open_multipart('admin/agregar_pelicula'); ?>
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title text-muted">Informacion general</h6>
                    </div>
                    <div class="card-block">
                        <div class="form-group">
                            <label for="t">Titulo</label>
                            <p class="text-muted"><small>Agrega un titulo</small></p>
                            <input type="text" name="pelicula_titulo" class="form-control" id="t">
                        </div>
                        <div class="form-group">
                            <div class="custom-label">
                                <label>Imagen</label>
                                <p class="text-muted"><small>Agrega una imagen</small></p>
                                <input type="file" name="userfile" size="20">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="s">Sinopsis</label>
                            <p class="text-muted"><small>Agrega una sinopsis</small></p>
                            <textarea name="pelicula_sinopsis" id="s" class="form-control" rows="10" cols="80"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="e">Estreno</label>
                            <p class="text-muted"><small>Fecha de estreno</small></p>
                            <input type="text" name="pelicula_estreno" class="form-control" id="e">
                        </div>
                        <div class="form-group">
                            <label for="p">Puntuacion</label>
                            <p class="text-muted"><small>Agrega una puntuacion</small></p>
                            <input type="text" name="pelicula_puntuacion" class="form-control" id="p">
                        </div>
                        <div class="form-group">
                            <label for="di">Director</label>
                            <p class="text-muted"><small>Nombre del director</small></p>
                            <input type="text" name="pelicula_director" class="form-control" id="di">
                        </div>
                        <div class="form-group">
                            <label for="du">Duracion</label>
                            <p class="text-muted"><small>Duracion de la pelicula</small></p>
                            <input type="text" name="pelicula_duracion" class="form-control" id="du">
                        </div>
                        <div class="form-group">
                            <label for="pa">Pais</label>
                            <p class="text-muted"><small>Agrega el pais</small></p>
                            <input type="text" name="pelicula_pais" class="form-control" id="pa">
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
                            <textarea name="pelicula_enlace" id="s" class="form-control" rows="4" cols="80"></textarea>
                        </div>
                    </div>
                </div>
                <div class="button-submit">
                    <button type="submit" class="btn btn-primary">Publicar</button>
                </div>
            <?php echo form_close(); ?>
        </div>
        <!--\.right-side-->
    </div>
    <!--\.row-->
</div>
<!--\.container-->
