<div class="home">
	<div class="row home-top text-center">
		<div class="home-resume"><?= lang('home_legend') ?></div>
		<div class="home-subtitle hidden-sm hidden-xs hidden-md"><?= lang('home_subtitle') ?> <span class="home-dd"
																									data="<?= lang('msg_web_systems') ?>, <?= lang('msg_web_sites') ?>, <?= lang('msg_intranets') ?>, <?= lang('msg_extranets') ?>, <?= lang('msg_web_portals') ?>"></span>
		</div>
		<h1 class="home-title"><?= lang('cv_title') ?></h1>
	</div>
	<div class="profile">
		<article class="row">
			<div class="col-md-12 profile-title"><?= lang('title_who_am_i') ?></div>
			<figure class="col-md-3 profile-photo">
				<img src="<?= base_url('static/theme/img/profile_photo.jpg') ?>"/>
			</figure>
			<div class="col-md-9">
				<h2 class="profile-name">Francisco Carribero</h2>

				<div class="profile-extract"><?= lang('cv_extract') ?></div>
				<div class="profile-social">
					<a href="https://ar.linkedin.com/pub/francisco-carribero/2a/a26/560" target="_blank"><img
							src="<?= base_url('static/theme/img/banner-linkedin.png') ?>"/></a>
					<a href="https://www.freelancer.com/u/fcarribero.html" target="_blank"><img
							src="<?= base_url('static/theme/img/banner-freelancer.png') ?>"/></a>
					<a href="https://github.com/fcarribero" target="_blank"><img
							src="<?= base_url('static/theme/img/banner-github.png') ?>"/></a>
				</div>
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
			<div class="col-md-12 text-center">
				<a class='btn btn-primary btn-lg'
				   href="<?= site_url(lang('code') . '/contactame') ?>"><?= lang('label_have_any_project') ?></a>
			</div>
		</div>
		<div class="row services">
			<div class="col-md-12 profile-title"><?= lang('title_services') ?></div>
			<?php foreach (lang('services') as $service): ?>
				<section class="row">
					<div class="col-md-12 services-item">
						<div class="services-title text-center"><?= $service['title'] ?></div>
						<ul class="services-list">
							<?php foreach ($service['items'] as $item): ?>
								<li class="services-list-item"><?= $item ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</section>
			<?php endforeach; ?>
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
							<img src="<?= base_url('static/theme/img/' . $project['image']) ?>"
								 style="max-height:200px;" class="maximize"/>
						</div>
					<?php endif; ?>
				</section>
			<?php endforeach; ?>
			<div class="row"><?= lang('cv_footer') ?></div>
		</div>
	</div>
</div>
<script>
	$(ddInit);
</script>
