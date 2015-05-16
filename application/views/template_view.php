<html>
    <head>
        <script src="<?= base_url('static/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?= base_url('static/bootstrap-3.3.4-dist/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('static/js/main.js') ?>"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>

        <link rel="stylesheet" href="<?= base_url('static/bootstrap-3.3.4-dist/css/bootstrap.min.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('static/theme/css/style.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('static/font-awesome/css/font-awesome.min.css') ?>" />
        <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link rel="icon" type="image/png" href="<?= base_url('static/theme/img/fav.png') ?>" /> 
        <title><?= lang('meta_title') ?></title>
        <meta name="Description" content="<?= lang('home_legend') ?>" />
        <meta name="Keywords" content="<?= lang('meta_keywords') ?>" />
        <meta name="Author" content="Francisco Tomás Carribero" />
        <meta property="og:title" content="<?= lang('meta_title') ?>"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="http://www.webneex.com/<?= lang('lang_code') ?>"/>
        <meta property="og:image" content="<?= base_url('static/theme/img/mini_banner.jpg') ?>"/>
        <meta property="og:site_name" content="<?= lang('meta_title') ?>"/>
        <meta property="og:description" content="<?= lang('home_legend') ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 languages hidden-xs hidden-sm">
                        <?php if (lang('code') == 'es'): ?><a href="<?= site_url('en/' . implode('/', array_slice($this->uri->segments, 1))); ?>"><img src="<?= base_url('static/theme/img/flags/en.png') ?>" /> English</a><?php endif; ?>
                        <?php if (lang('code') == 'en'): ?><a href="<?= site_url('es/' . implode('/', array_slice($this->uri->segments, 1))); ?>"><img src="<?= base_url('static/theme/img/flags/es.png') ?>" /> Español</a><?php endif; ?>
                    </div>
                    <div class="col-md-4 logo">

                    </div>
                    <nav class="col-md-8">
                        <?php if (lang('code') == 'es'): ?><a href="<?= site_url('en/' . implode('/', array_slice($this->uri->segments, 1))); ?>" class="hidden-md hidden-lg"><img src="<?= base_url('static/theme/img/flags/en.png') ?>" /> English</a><?php endif; ?>
                        <?php if (lang('code') == 'en'): ?><a href="<?= site_url('es/' . implode('/', array_slice($this->uri->segments, 1))); ?>" class="hidden-md hidden-lg"><img src="<?= base_url('static/theme/img/flags/es.png') ?>" /> Español</a><?php endif; ?>
                        <a href="<?= site_url(lang('code')) ?>"<?= $menu == 'home' ? ' class="selected"' : '' ?>><?= lang('title_home') ?></a>
                        <a href="<?= site_url(lang('code') . '/contactame') ?>"<?= $menu == 'contactame' ? ' class="selected"' : '' ?>><?= lang('title_contact') ?></a>
                    </nav>
                    <div class="clearfix"></div>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <?php $this->load->view($content); ?>
            </div>
        </main>
        <footer>
            <div class="container">Powered by <a href="http://www.codeigniter.com/" target="_blank">CodeIgniter</a> - <a href="https://github.com/fcarribero/website" target="_blank">Github.com</a></div>
        </footer>
        <?php $this->load->view('analytics_view'); ?>
    </body>
</html>
