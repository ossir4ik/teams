<?= $this->extend("layouts/default"); ?>

<?= $this->section("content"); ?>

<?php if (session()->has('success')): ?>
    <div class="alert alert-info">
        <p><?= session('success')?></p>
    </div>
<?php endif ?>

<div class="container">
    <h1 class="text-center mb-5">List of Teams</h1>

    <div class="row">
        <?php foreach($teams as $team): ?>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?= site_url("/teams/" . $team->id) ?>" class="text-decoration-none">
                                <?= esc($team->name) ?>
                            </a>
                        </h5>
                        <p class="card-text"><strong>Name:</strong> <?= esc($team->name) ?></p>
                        <p class="card-text"><strong>Kind of Sport:</strong> <?= esc($team->kind_of_sport) ?></p>
                        <a href="<?= site_url("/teams/" . $team->id) ?>" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?= $this->endSection(); ?>
