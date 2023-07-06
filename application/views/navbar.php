<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><?php echo $this->session->userdata('email'); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo (site_url() . '/Welcome/index'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo (site_url() . '/Welcome/surveidata'); ?>">Data Survei</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo (site_url() . '/Welcome/surveilist'); ?>">Survei</a>
                </li>
            </ul>
            <?php if ($this->session->userdata('logged_in')) : ?>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo (site_url() . '/Welcome/logout'); ?>">
                            Logout <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>