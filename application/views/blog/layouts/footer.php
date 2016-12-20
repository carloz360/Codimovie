<footer class="footer">
    <div class="container">
        <?php $importante = new Peliculas_Model(); echo $importante->funcionImportante(); ?>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
</body>

</html>
