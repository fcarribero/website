<div class="container-fluid home">
    <div class="row home-top">
        <h1 class="home-title"><?= lang('home_title') ?></h1>
        <div class="home-subtitle"><?= lang('home_subtitle') ?> <span class="home-dd" data="<?= lang('msg_web_systems') ?>, <?= lang('msg_web_sites') ?>, <?= lang('msg_intranets') ?>, <?= lang('msg_extranets') ?>, <?= lang('msg_web_portals') ?>"></span></div>
        <div class="home-resume"><?= lang('home_legend') ?></div>
    </div>
    <div class="row home-bottom">
        <div class="home-dd-carrusel"><img src="<?= base_url('static/theme/img/carrusel-websystems.jpg') ?>" /></div>
        <div class="home-dd-carrusel"><img src="<?= base_url('static/theme/img/carrusel-websites.jpg') ?>" /></div>
        <div class="home-dd-carrusel"><img src="<?= base_url('static/theme/img/carrusel-intranet.jpg') ?>" /></div>
        <div class="home-dd-carrusel"><img src="<?= base_url('static/theme/img/carrusel-extranet.png') ?>" /></div>
        <div class="home-dd-carrusel"><img src="<?= base_url('static/theme/img/carrusel-webportal.jpg') ?>" /></div>
    </div>
</div>
<script>
    $(ddInit);
</script>
