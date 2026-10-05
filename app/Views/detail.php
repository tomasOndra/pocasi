<h1><?= esc($název); ?></h1>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 mb-4">
            <h3>Mapa</h3>
            <img class="img-fluid rounded" src="<?= esc($mapa); ?>" alt="Mapa <?= esc($název); ?>" style="max-height: 400px; width: 100%; object-fit: contain;">
        </div>
        <div class="col-12 col-md-6 mb-4">
            <h3>Vlajka</h3>
            <img class="img-fluid rounded" src="<?= esc($vlajka); ?>" alt="Vlajka <?= esc($název); ?>" style="max-height: 400px; width: 100%; object-fit: contain;">
        </div>
    </div>
</div>