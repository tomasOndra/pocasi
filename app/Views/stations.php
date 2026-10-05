<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>

<h1>Přehled meteorologických stanic ve spolkové zemi: <?= esc($bundesland->name); ?></h1>

<div class="row">
    <?php foreach ($stations as $station): ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="<?= base_url('station_data/' . $station->S_ID); ?>">
                            <?= esc($station->place); ?>
                        </a>
                    </h5>
                    <p class="card-text">
                        <strong>Šířka:</strong> <?= esc($station->geo_latitude); ?><br>
                        <strong>Délka:</strong> <?= esc($station->geo_longtitude); ?><br>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>