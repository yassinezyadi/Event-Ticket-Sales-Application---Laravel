<nav class="vertical_nav">
    <div class="left_section menu_left" id="js-menu">
        <div class="left_section">
            <ul>
                <li class="menu--item">
                    <a href="{{url('/dashbord')}}" class="menu--link" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-gauge menu--icon"></i>
                        <span class="menu--label">Dashboard</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="{{url('/events')}}" class="menu--link" title="Events" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-calendar-days menu--icon"></i>
                        <span class="menu--label">Events</span>
                    </a>
                </li>
{{--                 <li class="menu--item">
                    <a href="my_organisation_dashboard_promotion.html" class="menu--link" title="Promotion" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-rectangle-ad menu--icon"></i>
                        <span class="menu--label">Promotion</span>
                    </a>
                </li> --}}
                <li class="menu--item">
                    <a href="{{url('/vente')}}" class="menu--link" title="Contact List" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-regular fa-address-card menu--icon"></i>
                        <span class="menu--label">Vente</span>
                    </a>
                </li>
{{--                 <li class="menu--item">
                    <a href="my_organisation_dashboard_payout.html" class="menu--link" title="Payouts" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-credit-card menu--icon"></i>
                        <span class="menu--label">Payouts</span>
                    </a>
                </li> --}}
{{--                 <li class="menu--item">
                    <a href="my_organisation_dashboard_reports.html" class="menu--link" title="Reports" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-solid fa-chart-pie menu--icon"></i>
                        <span class="menu--label">Reports</span>
                    </a>
                </li> --}}
           
                <li class="menu--item">
                    <a href="{{url('/my_teams')}}" class="menu--link team-lock" title="My Team" data-bs-toggle="tooltip" data-bs-placement="right"> 
                        <i class="fa-solid fa-user-group menu--icon"></i>
                        <span class="menu--label">My Team</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>