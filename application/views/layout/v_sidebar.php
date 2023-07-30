
<div class="sidebar" style="background-color: #d4d4d4; font-weight: 500;">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="<?= base_url() ?>public/image/agentred.png" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block"><?= $this->session->userdata('nama') ?></a>
    </div>
    </div>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="<?= base_url() ?>dashboard" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p style="color: black;"> Dashboard </p>
                </a>
            </li>

            <?php if($this->session->userdata('level') == 'Admin'){ ?>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-briefcase"></i>
                    <p>Master Data <i class="fas fa-angle-left right"></i> </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item"> 
                        <a href="<?= base_url() ?>wilayah" class="nav-link"> <i class="far fa-circle nav-icon"></i>
                            <p style="color: black;">Data Wilayah</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url() ?>type" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p style="color: black;"> Data Type </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>kategori" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p style="color: black;"> Data Kategori </p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item"> 
                <a href="<?= base_url() ?>pelanggan" class="nav-link"> <i class="nav-icon fas fa-users"></i>
                    <p style="color: black;">Data Pelanggan</p>
                </a>
            </li>

            
            <li class="nav-item">
                <a href="<?= base_url() ?>pengaduan" class="nav-link">
                    <i class="nav-icon fas fa-ticket-alt"></i>
                    <p style="color: black;"> Data Tiket </p>
                </a>
            </li>

            <?php }else{ ?>

                <li class="nav-item">
                    <a href="<?= base_url() ?>pengaduan/add" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p style="color: black;"> New Tiket </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url() ?>pengaduan" class="nav-link">
                        <i class="nav-icon fas fa-ticket-alt"></i>
                        <p style="color: black;"> Data Tiket </p>
                    </a>
                </li>

            <?php } ?>

            <li class="nav-item">
                <a href="<?= base_url() ?>login/logout" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p style="color: black;"> Logout </p>
                </a>
            </li>
        </ul>
    </nav>
</div>