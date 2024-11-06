<?= $this->extend("layouts/default"); ?>

<?= $this->section("content"); ?>

<h1 class="text-center mb-4">User authorization</h1>

<?php   if (session()->has('errors')): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach (session('errors') as $item): ?>
                <li><?= $item ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif ?>

<?= form_open('login/store', ['class' => 'needs-validation', 'novalidate' => 'novalidate']) ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" required value="<?= old('username') ?>">
                <div class="invalid-feedback">Please enter a username.</div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
                <div class="invalid-feedback">Please provide a password.</div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Login</button>
            </div>
            <div class="text-center mt-3">
                <a href="<?= site_url("/") ?>" class="btn btn-link">Back to Home</a>
            </div>
        </div>
    </div>
</div>

<?= form_close() ?>

<script>
    (function () {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>


<?= $this->endSection(); ?>
