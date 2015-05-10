<div class="container-fluid profile">
    <article class="row">
        <div class="col-md-12 profile-title"><?= lang('title_who_am_i') ?></div>
        <figure class="col-md-3 profile-photo">
            <img src="<?= base_url('static/theme/img/profile_photo.jpg') ?>" />
        </figure>
        <div class="col-md-9">
            <h1 class="profile-name">Francisco Carribero<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
                <script type="IN/MemberProfile" data-id="https://www.linkedin.com/pub/francisco-carribero/2a/a26/560" data-format="click" data-related="false"></script></h1>
            <h2 class="profile-job"><?= lang('cv_title') ?></h2>
            <div class="profile-extract"><?= lang('cv_extract') ?></div>
        </div>
    </article>
    <div class="row">
        <div class="col-md-12 profile-title"><?= lang('title_what_i_do') ?></div>
        <div class="col-md-10 col-md-push-2"><?= lang('cv_what_i_do_extract') ?></div>
    </div>
    <div class="row">
        <div class="col-md-12 profile-title"><?= lang('title_skills') ?></div>
        <div class="col-md-11 col-md-push-1">
            <ul>
                <?php foreach (lang('cv_skills') as $skill): ?>
                    <li><?= $skill ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 profile-title"><?= lang('title_featured_projects') ?></div>
        <?php foreach (lang('cv_featured_projects') as $project): ?>
            <section class="row profile-portfolio">
                <div class="col-md-10">
                    <div class="profile-portfolio-title"><?= $project['title'] ?></div>
                    <div class="profile-portfolio-description"><?= $project['content'] ?></div>
                </div>
                <?php if ($project['image']): ?>
                    <div class="col-md-2">
                        <img src="<?= base_url('static/theme/img/' . $project['image']) ?>" style="max-height:200px;" class="maximize" />
                    </div>
                <?php endif; ?>
            </section>
        <?php endforeach; ?>
        <div class="row"><?= lang('cv_footer') ?></div>
    </div>
</div>