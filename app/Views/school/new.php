<?= $this->extend("layouts/default"); ?>

<?= $this->section("content"); ?>

<div class="container">
    <h1 class="text-center mb-4">Add New School</h1>

    <?php if (session()->has('errors')): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php foreach (session('errors') as $item): ?>
                    <li><?= esc($item) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif ?>

    <?= form_open('schools/store', ['class' => 'needs-validation', 'novalidate' => 'novalidate']) ?>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="school_name" class="form-label">School Name</label>
                <input type="text" name="school_name" id="school_name" class="form-control" required value="<?= old('school_name', isset($data['school_name']) ? $data['school_name'] : '') ?>">
                <div class="invalid-feedback">Please enter the school name.</div>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" id="address" class="form-control" required value="<?= old('address', isset($data['address']) ? $data['address'] : '') ?>">
                <div class="invalid-feedback">Please enter the address.</div>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" required value="<?= old('phone_number', isset($data['phone_number']) ? $data['phone_number'] : '') ?>">
                <div class="invalid-feedback">Please enter the phone number.</div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Add School</button>
            </div>
        </div>
    </div>

    <?= form_close() ?>

</div>

<script>
    // Bootstrap form validation script
    (function () {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>

<?= $this->endSection(); ?>
