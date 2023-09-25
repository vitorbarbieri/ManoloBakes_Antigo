<!-- Essential javascripts for application to work-->
<script src="<?= media() ?>/js/jquery-3.7.0.min.js"></script>
<script src="<?= media() ?>/js/bootstrap.min.js"></script>
<script src="<?= media() ?>/js/main.js"></script>
<script src="<?= media() ?>/js/fontawesome.js"></script>
<script src="<?= media() ?>/js/functions_admin.js"></script>

<?php if ($data['page_name'] == "Função") { ?>
    <script src="<?= media(); ?>/js/functions_funcao.js"></script>
<?php } ?>

</body>

</html>