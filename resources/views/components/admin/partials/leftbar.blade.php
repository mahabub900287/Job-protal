    <!-- ic_student_menubar start -->
    <div class="ic_student_menubar ">
        <!-- ic_logo_details -->
        <div class="ic_logo_details">

            <a class="ic-logo-wrapper" href="{{ route('home') }}">
                <img class="img-fluid ic_logo" src="{{ asset('') }}img/logo/logo.png" alt="">
            </a>
        </div>

        <div class="ic-all-nav-list">

            <div class="ic-nav-list-wrapper">
                <h5 class="ic-nav-title">General</h5>
                <ul class="ic-nav-list">
                    <li class="ic-nav-item-wrapper ">
                        <a class="ic_menubar_item {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}"
                            href="{{ route('admin.dashboard') }}">
                            <svg class="ic_icon" width="20" height="21" viewBox="0 0 20 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.3333 11.3325V17.1667C18.3333 17.6269 17.9602 18 17.5 18H10.8333V11.3325H18.3333ZM9.16663 11.3325V18H2.49996C2.03973 18 1.66663 17.6269 1.66663 17.1667V11.3325H9.16663ZM9.16663 3V9.66583H1.66663V3.83333C1.66663 3.3731 2.03973 3 2.49996 3H9.16663ZM17.5 3C17.9602 3 18.3333 3.3731 18.3333 3.83333V9.66583H10.8333V3H17.5Z"
                                    fill="#90ADD9" />
                            </svg>
                            <span class="links_name">Dashboard</span>
                        </a>
                    </li>
                    <li class="ic-nav-item-wrapper ">
                        <a class="ic_menubar_item {{ Request::routeIs('admin.roles.index') || Request::routeIs('admin.roles.create') ? 'active' : '' }}"
                            href="{{ route('admin.users.index') }}">
                            <svg class="ic_icon" width="25" height="21" viewBox="0 0 20 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.33337 18.8333C3.33337 17.0652 4.03575 15.3695 5.286 14.1193C6.53624 12.869 8.23193 12.1667 10 12.1667C11.7682 12.1667 13.4638 12.869 14.7141 14.1193C15.9643 15.3695 16.6667 17.0652 16.6667 18.8333H15C15 17.5072 14.4733 16.2355 13.5356 15.2978C12.5979 14.3601 11.3261 13.8333 10 13.8333C8.67396 13.8333 7.40219 14.3601 6.46451 15.2978C5.52682 16.2355 5.00004 17.5072 5.00004 18.8333H3.33337ZM10 11.3333C7.23754 11.3333 5.00004 9.09583 5.00004 6.33333C5.00004 3.57083 7.23754 1.33333 10 1.33333C12.7625 1.33333 15 3.57083 15 6.33333C15 9.09583 12.7625 11.3333 10 11.3333ZM10 9.66667C11.8417 9.66667 13.3334 8.175 13.3334 6.33333C13.3334 4.49167 11.8417 3 10 3C8.15837 3 6.66671 4.49167 6.66671 6.33333C6.66671 8.175 8.15837 9.66667 10 9.66667Z"
                                    fill="#91ADD9" />
                            </svg>
                            <span class="links_name">User</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ic_student_menubar end -->
