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
        <title><?= lang('meta_title') ?></title>
        <meta name="Description" content="<?= lang('home_legend') ?>" />
        <meta name="Keywords" content="<?= lang('meta_keywords') ?>" />
        <meta name="Author" content="Francisco Tomás Carribero" />
        <meta property="og:title" content="Welcome to Cooshtee - the digital home of Cheltenham-based freelance web designer Chris Howard."/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="http://www.webneex.com/<?= lang('lang_code') ?>"/>
        <meta property="og:image" content="http://www.webneex.com/static/theme/img/mini_banner.jpg"/>
        <meta property="og:site_name" content="<?= lang('meta_title') ?>"/>
        <meta property="og:description" content="<?= lang('home_legend') ?>"/>
    </head>
    <body>
        <div class="container">
            <header class="row">
                <div class="col-md-12 languages">
                    <?php if (lang('code') == 'es'): ?><a href="<?= site_url('en/' . implode('/', array_slice($this->uri->segments, 1))); ?>"><img src="<?= base_url('static/theme/img/flags/en.png') ?>" /> English</a><?php endif; ?>
                    <?php if (lang('code') == 'en'): ?><a href="<?= site_url('es/' . implode('/', array_slice($this->uri->segments, 1))); ?>"><img src="<?= base_url('static/theme/img/flags/es.png') ?>" /> Español</a><?php endif; ?>
                </div>
                <div class="col-md-4 logo">
                    <a href="<?= site_url() ?>">{$FCarribero->GetDev()}</a>
                </div>
                <nav class="col-md-8">
                    <a href="<?= site_url(lang('code')) ?>"<?= $menu == 'home' ? ' class="selected"' : '' ?>><?= lang('title_home') ?></a>
                    <span>/</span>
                    <a href="<?= site_url(lang('code') . '/quien-soy') ?>"<?= $menu == 'quien-soy' ? ' class="selected"' : '' ?>><?= lang('title_who_am_i') ?></a>
                    <span>/</span>
                    <a href="<?= site_url(lang('code') . '/servicios') ?>"<?= $menu == 'servicios' ? ' class="selected"' : '' ?>><?= lang('title_services') ?></a>
                    <span>/</span>
                    <a href="<?= site_url(lang('code') . '/contactame') ?>"<?= $menu == 'contactame' ? ' class="selected"' : '' ?>><?= lang('title_contact') ?></a>
                </nav>
                <div class="clearfix"></div>
            </header>
            <main class="row">
                <?php $this->load->view($content); ?>
            </main>
            <footer class="row">
                Powered by <a href="http://www.codeigniter.com/" target="_blank">CodeIgniter</a> - <a href="https://github.com/fcarribero/website" target="_blank">Github.com</a>
            </footer>
        </div>
        <?php $this->load->view('analytics_view'); ?>
    </body>
</html>
