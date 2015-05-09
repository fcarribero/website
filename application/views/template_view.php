<html>
    <head>
        <script src="<?= base_url('static/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?= base_url('static/bootstrap-3.3.4-dist/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('static/js/main.js') ?>"></script>

        <link rel="stylesheet" href="<?= base_url('static/bootstrap-3.3.4-dist/css/bootstrap.min.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('static/theme/css/style.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('static/font-awesome/css/font-awesome.min.css') ?>" />
        <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="container">
            <div class="row site-header">
                <div class="col-md-4 site-header-logo">
                    <a href="<?= site_url() ?>">{$FCarribero->GetDev()}</a>
                </div>
                <div class="col-md-8 site-header-menu">
                    <a href="<?= site_url() ?>"<?= $menu == 'home' ? ' class="selected"' : '' ?>>Home</a>
                    <span>/</span>
                    <a href="<?= site_url('quien-soy') ?>"<?= $menu == 'quien-soy' ? ' class="selected"' : '' ?>>¿Quién soy?</a>
                    <span>/</span>
                    <a href="<?= site_url('servicios') ?>"<?= $menu == 'servicios' ? ' class="selected"' : '' ?>>Servicios</a>
                    <span>/</span>
                    <a href="<?= site_url('contactame') ?>"<?= $menu == 'contactame' ? ' class="selected"' : '' ?>>Contáctame</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row site-body">
                <?php $this->load->view($content); ?>
            </div>
        </div>
        <?php $this->load->view('analytics_view'); ?>
    </body>
</html>
