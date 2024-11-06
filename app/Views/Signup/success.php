<?= $this->extend("layouts/default"); ?>

<?= $this->section("content"); ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-6">
        <div class="card shadow-lg">
            <div class="card-body text-center p-5">
                <h1 class="display-4 text-success mb-3">Registration Successful!</h1>
                <p class="lead mb-4">You have successfully registered. Welcome aboard!</p>
                <a href="<?= site_url("login/login-form") ?>" class="btn btn-primary btn-lg mt-3">Go to Homepage</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
