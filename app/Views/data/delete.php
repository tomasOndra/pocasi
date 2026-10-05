<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="row justify-content-center py-5">

    <div class="col-md-7 col-lg-6">

        <div class="card shadow border-0">

            <div class="card-body p-4">

                <h1 class="text-center mb-2">
                    Mazání naměřených dat
                </h1>

                <p class="text-center text-muted mb-4">
                    Vyberte stanici, rok a měsíc.
                </p>

                <?php if (session()->getFlashdata('message')): ?>

                    <div class="alert alert-success">
                        <?= session()->getFlashdata('message') ?>
                    </div>

                <?php endif; ?>

                <form method="post" action="<?= base_url('data/deleteMonth') ?>">

                    <div class="mb-3">
                        <label for="station" class="form-label">
                            ID stanice
                        </label>

                        <input
                            type="number"
                            class="form-control"
                            id="station"
                            name="station"
                            placeholder="Např. 123"
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label for="year" class="form-label">
                            Rok
                        </label>

                        <input
                            type="number"
                            class="form-control"
                            id="year"
                            name="year"
                            placeholder="Např. 2015"
                            required
                        >
                    </div>

                    <div class="mb-4">
                        <label for="month" class="form-label">
                            Měsíc
                        </label>

                        <select
                            class="form-select"
                            id="month"
                            name="month"
                        >
                            <option value="1">Leden</option>
                            <option value="2">Únor</option>
                            <option value="3">Březen</option>
                            <option value="4">Duben</option>
                            <option value="5">Květen</option>
                            <option value="6">Červen</option>
                            <option value="7">Červenec</option>
                            <option value="8">Srpen</option>
                            <option value="9">Září</option>
                            <option value="10">Říjen</option>
                            <option value="11">Listopad</option>
                            <option value="12">Prosinec</option>
                        </select>
                    </div>

                    <div class="alert alert-warning">
                        <strong>Upozornění:</strong>
                        Vybraná data budou soft-deletována.
                    </div>

                    <button
                        type="submit"
                        class="btn btn-danger w-100"
                        onclick="return confirm('Opravdu chcete soft-deletovat vybraná data?')"
                    >
                        Smazat data
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ?>