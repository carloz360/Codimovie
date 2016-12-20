</div><!--\.wrapper-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/funciones.js"></script>
<script type="text/javascript">
//funcion que llama los tooltips
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
// cerrar alertas
$(document).ready(function(){
    $(".close").click(function(){
        $("#carlos-gonzalez").alert("close");
    });
});

</script>
</body>

</html>
