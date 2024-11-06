<?= $this->extend("layouts/default"); ?>

<?= $this->section("content"); ?>

<div class="container">
    <h1 class="text-center mb-5"><?= esc($title)?></h1>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Status</th>
                <th scope="col">School id</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <th scope="row"><?= esc($user->id) ?></th>
                    <td><?= esc($user->first_name) ?></td>
                    <td><?= esc($user->last_name) ?></td>
                    <td><?= esc($user->username) ?></td>
                    <td><?= esc($user->email) ?></td>
                    <td><?= esc($user->phone_number) ?></td>
                    <td><?= esc($user->status) ?></td>
                    <td><?= esc($user->school_id) ?></td>
                    <td>
                        <a href="<?= site_url("/users/edit/" . $user->id) ?>" class="btn btn-warning btn-sm">Edit</a>

                        <a href="/users/delete/<?= $user->id?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>
