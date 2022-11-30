<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.php">
                <img alt="image" src="assets/img/logo.png" class="header-logo"/>
            </a>
        </div>
        <ul class="sidebar-menu">
            <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
            <li class="dropdown <?= ($activePage == 'index') ? 'active' : ''; ?>">
                <a href="dashboard.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <li class="dropdown <?= ($activePage == 'reserve') ? 'active' : ''; ?>">
                <a href="reserve.php" class="nav-link"><i class="fas fa-paper-plane"></i><span>Reserve</span></a>
            </li>

            <li class="dropdown <?= ($activePage == 'ticket-history') ? 'active' : ''; ?>">
                <a href="ticket-history.php" class="nav-link"><i class="fas fa-history"></i><span>Reserved Tickets</span></a>
            </li>
        </ul>
    </aside>
</div>