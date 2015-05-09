<div class="container-fluid services">
    <?php foreach (lang('services') as $service): ?>
        <div class="row">
            <div class="col-md-12 services-item">
                <div class="services-title"><?= $service['title'] ?></div>
                <div class="services-list">
                    <?php foreach ($service['items'] as $item): ?>
                        <div class="services-list-item"><?= $item ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
