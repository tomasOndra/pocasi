<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>

<h1>Přehled spolkových zemí</h1>
<div class="row">
    <div class="col-12">
        <?php
        $table = new \CodeIgniter\View\Table();
        $table->setHeading("ID", "Zkratka", "Mapa a vlajka");

        foreach ($bundesland as $row) {
            $table->addRow(
                '<a href="' . base_url('stations/' . $row->id) . '">' . esc($row->name) . '</a>',
                esc($row->short_name),
                '<a href="' . base_url('bundesland/detail/' . $row->id) . '">Mapa a vlajka</a>'
            );
        }

        $template = array(
            'table_open' => '<table class="table table-bordered">',
            'thead_open' => '<thead>',
            'thead_close' => '</thead>',
            'heading_row_start' => '<tr>',
            'heading_row_end' => '</tr>',
            'heading_cell_start' => '<th>',
            'heading_cell_end' => '</th>',
            'row_start' => '<tr>',
            'row_end' => '</tr>',
            'cell_start' => '<td>',
            'cell_end' => '</td>',
            'row_alt_start' => '<tr>',
            'row_alt_end' => '</tr>',
            'cell_alt_start' => '<td>',
            'cell_alt_end' => '</td>',
            'table_close' => '</table>'
        );

        $table->setTemplate($template);

        echo $table->generate();
        ?>
    </div>
</div>

<?= $this->endSection(); ?>