    <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <img src="<?= BASE_URL ?>/assets/images/logo.svg" alt="" srcset="">
            </div>
            <div class="sidebar-menu">
                <ul class="menu">


                    <li class='sidebar-title'>Home</li>
                    <li class="sidebar-item <?= (basename($_SERVER['REQUEST_URI']) == 'dashboard') ? 'active' : ''; ?>">
                        <a href="<?= BASE_URL ?>/pendaftar/dashboard" class='sidebar-link'>
                            <i data-feather="info" width="20"></i>
                            <span>Info PPDB</span>
                        </a>
                    </li>

                    <li class='sidebar-title'>Menu</li>
                    <li class="sidebar-item <?= (basename($_SERVER['REQUEST_URI']) == 'pendaftaran') ? 'active' : ''; ?>">
                        <a href="<?= BASE_URL ?>/pendaftar/pendaftaran" class='sidebar-link'>
                            <i data-feather="book-open" width="20"></i>
                            <span>Pendaftaran</span>
                        </a>

                    </li>
                    <li class="sidebar-item <?= (basename($_SERVER['REQUEST_URI']) == 'ortu') ? 'active' : ''; ?>">
                        <a href="<?= BASE_URL ?>/pendaftar/ortu" class='sidebar-link'>
                            <i data-feather="book-open" width="20"></i>
                            <span>Pendaftaran Ortu</span>
                        </a>

                    </li>
                    <li class="sidebar-item <?= (basename($_SERVER['REQUEST_URI']) == 'berkas') ? 'active' : ''; ?>">
                        <a href="<?= BASE_URL ?>/pendaftar/berkas" class='sidebar-link'>
                            <i data-feather="upload-cloud" width="20"></i>
                            <span>Upload Berkas</span>
                        </a>

                    </li>
                    <li class="sidebar-item <?= (basename($_SERVER['REQUEST_URI']) == 'pembayaran') ? 'active' : ''; ?>">
                        <a href="<?= BASE_URL ?>/pendaftar/pembayaran" class='sidebar-link'>
                            <i data-feather="dollar-sign" width="20"></i>
                            <span>Pembayaran</span>
                        </a>

                    </li>
                    <li class="sidebar-item <?= (basename($_SERVER['REQUEST_URI']) == 'contact') ? 'active' : ''; ?>">
                        <a href="<?= BASE_URL ?>/pendaftar/contact" class='sidebar-link'>
                            <i data-feather="phone-call" width="20"></i>
                            <span>Contact</span>
                        </a>

                    </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
