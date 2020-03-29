<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand"><img src="<?= base_url('assets/unmul-logo.png') ?>" width="30" height="30"> Bebas Pustaka</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Admin/Verifikasi') ?>">Verifikasi
                        <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Auth/logout') ?>">Logout
                        <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>