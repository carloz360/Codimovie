<div class="container-fluid registro">
    <?php echo form_open('', array('class' => 'form-user')); ?>
    <h3 class="form-title">Pagina de registro</h3>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-id-badge" aria-hidden="true"></i></div>
            <input type="text" name="usuario_nombre" placeholder="Nombre completo" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
            <input type="text" name="usuario_usuario" placeholder="usuario" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></div>
            <input type="password" name="usuario_password" placeholder="Password" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></div>
            <input type="password" name="usuario_repassword" placeholder="Repetir password" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-success">Registrar</button>
    <?php echo form_close(); ?>
</div>
<!--\.container-->
