<div class="container">
    <header class="d-flex align-items-center justify-content-between py-3 mb-4 border-bottom">
        <div class="d-flex align-items-center">
            <a href="http://localhost/teams/index" class="d-inline-flex link-body-emphasis text-decoration-none">
                <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="ms-2 h4">American schools team</span>
            </a>
        </div>

        <div class="d-flex justify-content-center">
            <ul class="nav">
                <?php if(session('user_status') == 'admin'): ?>
                    <li class="nav-item">
                        <a href="<?= site_url("/schools/index")?>" class="nav-link px-3">Schools</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url("/schools/new")?>" class="nav-link px-3">Add School</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url("/users")?>" class="nav-link px-3">Users</a>
                    </li>
                <?php endif;?>



                <li class="nav-item">
                    <a href="<?= site_url("/teams/index")?>" class="nav-link px-3">Teams</a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url("/teams/new")?>" class="nav-link px-3">Add team</a>
                </li>
            </ul>
        </div>

        <div class="d-flex align-items-center">
            <?php if(session()->has('user_id')): ?>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" aria-expanded="false" onclick="toggleDropdown()">
                        <?= esc(session('user_first_name')) ?> <?= esc(session('user_last_name')) ?>
                    </a>
                    <ul class="dropdown-menu" id="dropdownMenu" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="#">Options</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= site_url('/logout') ?>">Exit</a></li>
                    </ul>
                </div>
            <?php else: ?>
                <button type="button" class="btn btn-outline-primary me-2" onclick="window.location.href='http://localhost/login/login-form';">Login</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='http://localhost/signup/new';">Sign-up</button>
            <?php endif; ?>
        </div>
    </header>
</div>

<script>
    function toggleDropdown() {
        var dropdownMenu = document.getElementById('dropdownMenu');
        dropdownMenu.classList.toggle('show');
    }

    document.addEventListener('click', function(event) {
        var dropdown = document.getElementById('userDropdown');
        var dropdownMenu = document.getElementById('dropdownMenu');
        if (!dropdown.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.remove('show');
        }
    });
</script>

<style>
    .dropdown-menu.show {
        display: block;
    }
</style>
