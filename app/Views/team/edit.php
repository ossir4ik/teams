<?= $this->extend("layouts/default"); ?>

<?= $this->section("content"); ?>

<div class="container">
    <h1 class="text-center mb-4">Edit Team</h1>

    <?= form_open('teams/update/'.$team->id, ['class' => 'needs-validation', 'novalidate' => 'novalidate']) ?>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="name" class="form-label">Team Name</label>
                <input type="text" name="name" id="name" class="form-control" required value="<?= old('name', isset($team->name) ? $team->name : '') ?>">
                <div class="invalid-feedback">Please enter the school name.</div>
            </div>

            <div class="mb-3">
                <label for="kind_of_sport" class="form-label">Kind of sport</label>
                <input type="text" name="kind_of_sport" id="kind_of_sport" class="form-control" required value="<?= old('kind_of_sport', isset($data['kind_of_sport']) ? $data['kind_of_sport'] : '') ?>">
                <div class="invalid-feedback">Please enter the kind of sport.</div>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">School</label>
                <select name="school_id" id="school_id" class="form-control">
                    <?php foreach ($schools as $school):?>
                        <option value="<?= $school->id ?>" <?= (isset($data['school_id']) === $school->id) ? 'selected' :'' ?>><?= $school->school_name?></option>
                    <?php endforeach;?>
                </select>
            </div>

            <div class="mb-3">
                <label for="trainer_id" class="form-label">Trainer</label>
                <select name="trainer_id" id="trainer_id" class="form-control">
                    <?php foreach ($trainers as $trainer):?>
                        <option value="<?= $trainer->id ?>" <?= (isset($data['trainer_id']) === $trainer->id) ? 'selected' :'' ?>><?= $trainer->name?></option>
                    <?php endforeach;?>
                </select>
            </div>

            <div class="mb-3">
                <label for="training_id" class="form-label">Set training</label>
                <select name="training_id" id="training_id" class="form-control">
                    <?php foreach ($trainings as $training):?>
                        <option value="<?= $training->id ?>" <?= (isset($data['training_id']) === $training->id) ? 'selected' :'' ?>><?= substr(($training->date), 0, 10)?></option>
                    <?php endforeach;?>
                </select>
            </div>


            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Update School</button>
            </div>
        </div>
    </div>

    <?= form_close() ?>

</div>

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
