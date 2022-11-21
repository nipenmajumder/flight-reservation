<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">
                <img alt="image" src="assets/img/logo.png" class="header-logo"/>
                <span class="logo-name">FRS</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
            <li class="dropdown <?= ($activePage == 'index') ? 'active' : ''; ?>">
                <a href="index.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <?php
            $activeFlightDropdown = false;

            if ($activePage == 'flightList' || $activePage == 'flightListRouteWise' || $activePage == 'newFlight') {
                $activeFlightDropdown = true;
            }
            ?>
            <li class="dropdown <?= $activeFlightDropdown ? 'active' : ''; ?>">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="fa fa-plane"></i>
                    <span>Flight</span></a>
                <ul class="dropdown-menu">
                    <li class="<?= ($activePage == 'flightList') ? 'active' : ''; ?>">
                        <a class="nav-link" href="flightList.php">
                            All Flights
                        </a>
                    </li>
                        <li class="<?= ($activePage == 'newFlight') ? 'active' : ''; ?>">
                            <a class="nav-link" href="newFlight.php">
                                New Flight
                            </a>
                        </li>
                        <li class="<?= ($activePage == 'flightListRouteWise') ? 'active' : ''; ?>">
                            <a class="nav-link" href="flightListRouteWise.php">
                                Flight List Route Wise
                            </a>
                        </li>
                </ul>
            </li>

            <?php
            $activeTicketsDropdown = false;

            if ($activePage == 'ticketsInfo' || $activePage == 'dateWiseTickets' || $activePage == 'stateWiseTickets' || $activePage == 'newTicket' || $activePage == 'ticketsList') {
                $activeTicketsDropdown = true;
            }
            ?>
            <li class="dropdown <?= $activeTicketsDropdown ? 'active' : '' ?>">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="fa fa-ticket-alt"></i>
                    <span>Tickets</span></a>
                <ul class="dropdown-menu">
                    <li class="<?= ($activePage == 'ticketsList') ? 'active' : '' ?>">
                        <a class="nav-link" href="ticketsList.php">
                            All Tickets
                        </a>
                    </li>
                        <li class="<?= ($activePage == 'newTicket') ? 'active' : '' ?>">
                            <a class="nav-link" href="newTicket.php">
                                New Ticket
                            </a>
                        </li>
                        <li class="<?= ($activePage == 'dateWiseTickets') ? 'active' : '' ?>">
                            <a class="nav-link" href="dateWiseTickets.php">
                                Date Wise Tickets
                            </a>
                        </li>
<!--                        <li class="--><?//= ($activePage == 'stateWiseTickets') ? 'active' : '' ?><!--">-->
<!--                            <a class="nav-link" href="stateWiseTickets.php">-->
<!--                                State Wise Tickets-->
<!--                            </a>-->
<!--                        </li>-->
                </ul>
            </li>

            <?php
            $activePassengersDropdown = false;
            if ($activePage == 'routeWisePassengers' || $activePage == 'stateWisePassengers' || $activePage == 'flightPassengers' || $activePage == 'newPassenger' || $activePage == 'passengerList') {
                $activePassengersDropdown = true;
            }
            ?>
            <li class="dropdown <?= $activePassengersDropdown ? 'active' : '' ?>">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa fa-user-circle"></i>
                    <span>Passengers</span></a>
                <ul class="dropdown-menu">
                    <li class="<?= ($activePage == 'passengerList') ? 'active' : '' ?>">
                        <a class="nav-link" href="passengerList.php">
                            All Passengers
                        </a>
                    </li>
                    <li class="<?= ($activePage == 'newPassenger') ? 'active' : '' ?>">
                        <a class="nav-link" href="newPassenger.php">
                            New Passenger
                        </a>
                    </li>

                        <li class="<?= ($activePage == 'routeWisePassengers') ? 'active' : '' ?>">
                            <a class="nav-link" href="routeWisePassengers.php">
                                Route & Date Wise
                            </a>
                        </li>
<!--                        <li class="--><?//= ($activePage == 'stateWisePassengers') ? 'active' : '' ?><!--">-->
<!--                            <a class="nav-link" href="stateWisePassengers.php">-->
<!--                                State Wise-->
<!--                            </a>-->
<!--                        </li>-->
                        <li class="<?= ($activePage == 'flightPassengers') ? 'active' : '' ?>">
                            <a class="nav-link" href="flightPassengers.php">
                                Flight Wise
                            </a>
                        </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>