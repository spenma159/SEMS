<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #4e6c78;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <?php if (in_groups('admin')) : ?>
        <!-- Heading -->
        <div class="sidebar-heading">
            User Access
        </div>

        <!-- Nav Item - List Guru -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/admin">
                <i class="fas fa-users"></i>
                <span>Users</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/Admin/tables">
                <i class="fas fa-fw fa-table"></i>
                <span>Events management</span></a>
        </li>
    <?php else : ?>

        <!-- Heading -->
        <div class="sidebar-heading">
            User Access
        </div>


        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/user">
                <i class="fas fa-fw fa-table"></i>
                <span>Absensi & Hasil</span></a>
        </li>

    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Log Out -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>/logout">
            <i class="fas fa-sign-out-alt"></i>
            <span>Log Out</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>