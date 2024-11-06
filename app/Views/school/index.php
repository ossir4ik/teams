<?= $this->extend("layouts/default"); ?>

<?= $this->section("content"); ?>

<?php if (session()->has('success')): ?>
    <div class="alert alert-info">
        <p><?= session('success')?></p>
    </div>
<?php endif ?>

<div class="container">
    <h1 class="text-center mb-5">List of Schools</h1>

    <div class="row">
        <?php foreach($schools as $school): ?>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?= site_url("/schools/" . $school->id) ?>" class="text-decoration-none">
                                <?= esc($school->school_name) ?>
                            </a>
                        </h5>
                        <p class="card-text"><strong>Address:</strong> <?= esc($school->address) ?></p>
                        <p class="card-text"><strong>Phone:</strong> <?= esc($school->phone_number) ?></p>
                        <a href="<?= site_url("/schools/" . $school->id) ?>" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?= $this->endSection(); ?>
