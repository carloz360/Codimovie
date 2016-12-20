<div class="container-fluid registro">
    <?php echo form_open('', array('class' => 'form-user')); ?>
        <h3 class="form-title">Pagina de sesion</h3>
        <?php
        if (!empty($error))
        { ?>
            <p style="color:red;text-align:center"><?php echo $error; ?></p>
        <?php }
        ?>
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
        <button type="submit" class="btn btn-primary">Login</button>
    <?php echo form_close(); ?>
</div>
<!--\.container-->
