<div class="container-fluid">
    <div class="row">
        <?php include 'sidebar.php'; ?>
        <div class="col-xs-10 col-sm-11 col-lg-11 col-xl-10 right-side">
            <h1 class="dash-title"><i class="fa fa-tags" aria-hidden="true"></i> Categorias</h1>
            <div class="row">
                <div class="col-xs-12">
                    <?php echo form_open('admin/buscar_categoria', array('class' => 'form-inline float-xs-right search', 'method' => 'get')); ?>
                        <input class="form-control" type="text" name="query" placeholder="Buscar categoria...">
                        <button class="btn btn-outline-info" type="submit">Buscar</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-muted">Todas las categorias</h6>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripsion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($categorias as $categoria): ?>
                                    <tr>
                                        <td><?php echo $categoria['categoria_nombre']; ?></td>
                                        <td><?php echo $categoria['categoria_descripcion']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>/admin/actualizar_categoria/<?php echo $categoria['categoria_id']; ?>" class="btn btn-outline-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a href="javascript:void(0);" onclick="eliminar('<?php echo base_url(); ?>admin/eliminar_categoria/<?php echo $categoria['categoria_id']; ?>')" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
