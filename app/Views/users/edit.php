<?= $this->extend("layouts/default"); ?>

<?= $this->section("content"); ?>

<h1 class="text-center mb-4">User editing</h1>

<?php if (session()->has('errors')): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach (session('errors') as $item): ?>
                <li><?= $item ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif ?>

<?= form_open('users/update/'. $user->id ,['class' => 'needs-validation', 'novalidate' => 'novalidate']) ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" required value="<?= old('first_name',$user->first_name) ?>">
                <div class="invalid-feedback">Please enter your first name.</div>
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" required value="<?= old('last_name',$user->last_name) ?>">
                <div class="invalid-feedback">Please enter your last name.</div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" required value="<?= old('email',$user->email) ?>">
                <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="tel" name="phone_number" id="phone_number" class="form-control" required value="<?= old('phone_number',$user->phone_number) ?>">
                <div class="invalid-feedback">Please enter your phone number.</div>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="new" <?= ($user->status === 'new') ? 'selected' :'' ?>>NEW</option>
                    <option value="admin" <?= ($user->status ===  'admin') ? 'selected' :'' ?>>ADMIN</option>
                    <option value="user" <?= ($user->status === 'user') ? 'selected' :'' ?>>USER</option>
                </select>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Editing</button>
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
