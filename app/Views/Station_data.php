<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>

<h1>Data pro stanici: <?= esc($station->place); ?></h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Datum</th>
            <th>Minimální teplota (5cm)</th>
            <th>Minimální teplota (2m)</th>
            <th>Maximální teplota (2m)</th>
            <th>Vítr (střední)</th>
            <th>Srážky</th>
            <th>Tlak</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pocasi_data as $row): ?>
            <tr>
                <td><?= esc($row->date); ?></td>
                <td><?= esc($row->min_5cm); ?></td>
                <td><?= esc($row->min_2m); ?></td>
                <td><?= esc($row->max_2m); ?></td>
                <td><?= esc($row->mid_wind); ?></td>
                <td><?= esc($row->precipitation); ?></td>
                <td><?= esc($row->mid_air_pressure); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection(); ?>