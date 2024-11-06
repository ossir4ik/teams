<?= $this->extend("layouts/default"); ?>

<?= $this->section("content"); ?>

<h1 class="text-center mb-4">User Registration</h1>

<?php if (session()->has('errors')): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach (session('errors') as $item): ?>
                <li><?= $item ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif ?>

<?= form_open('signup/store', ['class' => 'needs-validation', 'novalidate' => 'novalidate']) ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" required value="<?= old('first_name') ?>">
                <div class="invalid-feedback">Please enter your first name.</div>
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" required value="<?= old('last_name') ?>">
                <div class="invalid-feedback">Please enter your last name.</div>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" required value="<?= old('username') ?>">
                <div class="invalid-feedback">Please enter a username.</div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" required value="<?= old('email') ?>">
                <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="tel" name="phone_number" id="phone_number" class="form-control" required value="<?= old('phone_number') ?>">
                <div class="invalid-feedback">Please enter your phone number.</div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
                <div class="invalid-feedback">Please provide a password.</div>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Password Confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                <div class="invalid-feedback">Please confirm your password.</div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Register</button>
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
