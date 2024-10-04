<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <!--
        <div class="navbar-brand mx-auto mt-2 flex-fill text-center">
            <a  href="{{ url('/') }}">
                <img src="{{ asset('book_brand.svg') }}" class="navbar-brand-img brand-md" alt="Brand Logo">
            </a>
            <h2 class="flex-fill ml-3 mt-3 mb-0">Bookaroo</h2>
            <p class="flex-fill ml-3 mt-0">With a book for you</p>
        </div>
        -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                <img src="{{ asset('book_color.svg') }}" class="logo" alt="Brand Logo">
            </a>
            <div class="logo-text">
                <h2 class="flex-fill ml-3 mt-3 mb-0">Bookaroo</h2>
                <p class="flex-fill ml-3 mt-0">With a book for you</p>
            </div>

        </div>

        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="{{ route('home') }}" aria-expanded="false" class="nav-link">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Home</span><span class="sr-only">(current)</span>
                </a>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Explore</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#books" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-book-open fe-16"></i>
                    <span class="ml-3 item-text">Books</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="books">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('books.genres') }}"><span class="ml-1 item-text">Genres</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('books.decades') }}"><span class="ml-1 item-text">Decades</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./ui-icons.html"><span class="ml-1 item-text">Language</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./ui-notification.html"><span class="ml-1 item-text">Format</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./ui-notification.html"><span class="ml-1 item-text">Length</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./ui-notification.html"><span class="ml-1 item-text">Ratings</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./ui-notification.html"><span class="ml-1 item-text">Publisher</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#authors" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-users fe-16"></i>
                    <span class="ml-3 item-text">Authors</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="authors">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./ui-typograpy.html"><span class="ml-1 item-text">Nationality</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./ui-icons.html"><span class="ml-1 item-text">Era</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./ui-notification.html"><span class="ml-1 item-text">Awards</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./ui-modals.html"><span class="ml-1 item-text">Gender</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./ui-tabs-accordion.html"><span class="ml-1 item-text">Literary Movements</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#lists" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-list fe-16"></i>
                    <span class="ml-3 item-text">Lists</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="lists">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./form_elements.html"><span class="ml-1 item-text">from the Community</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./form_advanced.html"><span class="ml-1 item-text">Curated</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./form_validation.html"><span class="ml-1 item-text">Reading Challenges</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#community" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-globe fe-16"></i>
                    <span class="ml-3 item-text">Community</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="community">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./chart-inline.html"><span class="ml-1 item-text">People</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./chart-chartjs.html"><span class="ml-1 item-text">Groups</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./chart-apexcharts.html"><span class="ml-1 item-text">Giveaways</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#news" data-toggle="collapse" aria-expanded="false" class="nav-link">
                    <i class="fe fe-tv fe-16"></i>
                    <span class="ml-3 item-text">News</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="News">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./table_basic.html"><span class="ml-1 item-text">Basic Tables</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./table_advanced.html"><span class="ml-1 item-text">Advanced Tables</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./table_datatables.html"><span class="ml-1 item-text">Data Tables</span></a>
                    </li>
                </ul>
            </li>

        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Discover</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="calendar.html">
                    <i class="fe fe-calendar fe-16"></i>
                    <span class="ml-3 item-text">Events</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-map fe-16"></i>
                    <span class="ml-3 item-text">Near You</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="contact">
                    <a class="nav-link pl-3" href="./contacts-list.html"><span class="ml-1">Book Shops</span></a>
                    <a class="nav-link pl-3" href="./contacts-grid.html"><span class="ml-1">Book Fairs</span></a>
                    <a class="nav-link pl-3" href="./contacts-new.html"><span class="ml-1">Libraries</span></a>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#profile" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-user fe-16"></i>
                    <span class="ml-3 item-text">Profile</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="profile">
                    <a class="nav-link pl-3" href="./profile.html"><span class="ml-1">Overview</span></a>
                    <a class="nav-link pl-3" href="./profile-settings.html"><span class="ml-1">Settings</span></a>
                    <a class="nav-link pl-3" href="./profile-security.html"><span class="ml-1">Security</span></a>
                    <a class="nav-link pl-3" href="./profile-notification.html"><span class="ml-1">Notifications</span></a>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#fileman" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-folder fe-16"></i>
                    <span class="ml-3 item-text">File Manager</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="fileman">
                    <a class="nav-link pl-3" href="./files-list.html"><span class="ml-1">Files List</span></a>
                    <a class="nav-link pl-3" href="./files-grid.html"><span class="ml-1">Files Grid</span></a>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#support" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-compass fe-16"></i>
                    <span class="ml-3 item-text">Help Desk</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="support">
                    <a class="nav-link pl-3" href="./support-center.html"><span class="ml-1">Home</span></a>
                    <a class="nav-link pl-3" href="./support-tickets.html"><span class="ml-1">Tickets</span></a>
                    <a class="nav-link pl-3" href="./support-ticket-detail.html"><span class="ml-1">Ticket Detail</span></a>
                    <a class="nav-link pl-3" href="./support-faqs.html"><span class="ml-1">FAQs</span></a>
                </ul>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Help</span>
        </p>
        <ul class="navbar-nav flex-fill w-100">
            <li class="nav-item w-100">
                <a class="nav-link" href="../docs/index.html">
                    <i class="fe fe-help-circle fe-16"></i>
                    <span class="ml-3 item-text">Getting Start</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#pages" data-toggle="collapse" aria-expanded="false" class="nav-link">
                    <i class="fe fe-file fe-16"></i>
                    <span class="ml-3 item-text">Contact</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#auth" data-toggle="collapse" aria-expanded="false" class="nav-link">
                    <i class="fe fe-shield fe-16"></i>
                    <span class="ml-3 item-text">Admin</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
