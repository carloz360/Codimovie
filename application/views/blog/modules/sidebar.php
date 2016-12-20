<div class="col-md-3 sidebar hidden-sm-down">
    <div class="module-sidebar">
        <h3 class="sidebar-title text-muted">Categorias</h3>
        <ul>
            <?php foreach ($categorias as $categoria): ?>
                <li><a href="<?php echo base_url(); ?>blog/categoria/<?php echo $categoria['categoria_id']; ?>"><?php echo $categoria['categoria_nombre']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
