<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.php">
                <img alt="image" src="assets/img/logo.png" class="header-logo"/>
<!--                <span class="logo-name">FRS</span>-->
            </a>
        </div>
        <ul class="sidebar-menu">
            <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
            <li class="dropdown <?= ($activePage == 'index') ? 'active' : ''; ?>">
                <a href="index.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
        </ul>
    </aside>
</div>