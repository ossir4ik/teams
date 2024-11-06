<?= $this->extend("layouts/default"); ?>

<?= $this->section("content"); ?>

<div class="container">
    <h1 class="text-center mb-4">School Details</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title">School ID: <?= esc($school->id) ?></h5>
            <p class="card-text"><strong>School Name:</strong> <?= esc($school->school_name) ?></p>
            <p class="card-text"><strong>Address:</strong> <?= esc($school->address) ?></p>
            <p class="card-text"><strong>Phone Number:</strong> <?= esc($school->phone_number) ?></p>

            <hr>

            <div class="d-flex justify-content-start">
                <a href="<?= site_url("/schools/edit/" . $school->id) ?>" class="btn btn-warning me-2">
                    <i class="bi bi-pencil-square"></i> Edit
                </a>
                <a onclick="return confirmDelete()" href="<?= site_url("/schools/delete/" . $school->id) ?>" class="btn btn-danger">
                    <i class="bi bi-trash"></i> Delete
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this school?");
    }
</script>

<?= $this->endSection(); ?>
