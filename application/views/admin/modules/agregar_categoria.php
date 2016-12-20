<div class="container-fluid">
    <div class="row">
        <?php include 'sidebar.php'; ?>
        <div class="col-xs-10 col-sm-11 col-lg-11 col-xl-10 right-side">
            <h1 class="dash-title"><i class="fa fa-plus-circle" aria-hidden="true"></i> Nueva categoria</h1>
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger" role="alert" style="text-align:center">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-muted">Informacion general</h6>
                </div>
                <div class="card-block">
                    <?php echo form_open('admin/agregar_categoria'); ?>
                        <div class="form-group">
                            <label for="ct">Nombre</label>
                            <p class="text-muted"><small>Nombre de la categoria</small></p>
                            <input type="text" name="categoria_nombre" id="ct" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cd">Descripcion</label>
                            <p class="text-muted"><small>Agrega una descripcion</small></p>
                            <textarea name="categoria_descripcion" id="cd" rows="8" cols="80" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-margin">Publicar</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <!--\.right-side-->
    </div>
    <!--\.row-->
</div>
<!--\.container-->
