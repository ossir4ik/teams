<?= $this->extend("layouts/default"); ?>

<?= $this->section("content"); ?>

<div class="container">
    <h1 class="text-center mb-4">Team Details</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <p class="card-text"><strong>Name:</strong> <?= esc($team->name) ?></p>
            <p class="card-text"><strong>Kind of Sport:</strong> <?= esc($team->kind_of_sport) ?></p>

            <?php if (session()->has('errors')): ?>
            <?php endif ?>


            <hr>
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

            <hr>

                <p class="card-text"><strong>Trainer name:</strong> <?= esc($trainer->name) ?></p>
                <p class="card-text"><strong>Trainer phone:</strong> <?= esc($trainer->phone_number) ?></p>
                <p class="card-text"><strong>Trainer email:</strong> <?= esc($trainer->email) ?></p>

            <hr>

                <p class="card-text"><strong>Training date:</strong> <?= substr(($training->date), 0, 10) ?></p>
                <p class="card-text"><strong>Start time:</strong> <?= substr(($training->start_time), 11, 5 ) ?></p>
                <p class="card-text"><strong>End time:</strong> <?= substr(($training->end_time),11,5) ?></p>



            <hr>


            <div class="d-flex justify-content-start">
                <a href="<?= site_url("/teams/edit/" . $team->id) ?>" class="btn btn-warning me-2">
                    <i class="bi bi-pencil-square"></i> Edit
                </a>

                <a onclick="return confirmDelete()" href="<?= site_url("/teams/delete/" . $team->id) ?>" class="btn btn-danger">
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
