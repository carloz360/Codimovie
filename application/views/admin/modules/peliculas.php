<div class="container-fluid">
    <div class="row">
        <?php include 'sidebar.php'; ?>
        <div class="col-xs-10 col-sm-11 col-lg-11 col-xl-10 right-side">
            <h1 class="dash-title"><i class="fa fa-film" aria-hidden="true"></i> Peliculas</h1>
            <div class="row">
                <div class="col-xs-12">
                    <?php echo form_open('admin/buscar_pelicula', array('class' => 'form-inline float-xs-right search', 'method' => 'get')); ?>
                        <input class="form-control" type="text" name="query" placeholder="Buscar titulo...">
                        <button class="btn btn-outline-info" type="submit">Buscar</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-muted">Todas las peliculas</h6>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Categoria</th>
                                    <th>Imagen</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($peliculas as $pelicula): ?>
                                    <tr>
                                        <td><?php echo $pelicula['pelicula_titulo']; ?></td>
                                        <td><?php echo $pelicula['categoria_nombre']; ?></td>
                                        <td>
                                            <img src="<?php echo base_url(); ?>public/img/<?php echo $pelicula['pelicula_caratula']; ?>" alt="<?php echo $pelicula['pelicula_titulo']; ?>" class="table-thumb">
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>/admin/actualizar_pelicula/<?php echo $pelicula['pelicula_id']; ?>" class="btn btn-outline-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a href="javascript:void(0);" onclick="eliminar('<?php echo base_url(); ?>admin/eliminar_pelicula/<?php echo $pelicula['pelicula_id']; ?>')" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="...">
                        <?php echo $pages; ?>
                    </nav>
                </div>
            </div>
        </div>
        <!--\.right-side-->
    </div>
    <!--\.row-->
</div>
<!--\.container-->
