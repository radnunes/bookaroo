
    <nav class="topnav navbar navbar-light">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
            <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>
        <!--<form class="form-inline mr-auto searchform text-muted" method="GET" action="{{ route('books.index') }}">
            <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted"
                   type="search"
                   name="search"
            placeholder="Type something..."
            aria-label="Search"
            value="#"
            onkeyup="submitForm(event)">
        </form>-->
        <ul class="nav">

            <li class="nav-item">
                <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
                    <i class="fe fe-sun fe-16"></i>
                </a>
            </li>

                @guest()
                <div class="mt-2">
                    <a href="{{ route('login') }}">
                        <button type="button" class="btn mb-2 btn-outline-primary mr-2">Login</button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button type="button" class="btn mb-2 btn-outline-secondary">Sign Up</button>
                    </a>
                </div>
                @endguest
                @auth()
                <div class="mt-2">
                    <a href="#">
                        <button type="button" class="btn mb-2 btn-outline-secondary mr-2">Profile</button>
                    </a>
                </div>
                @role('admin')
                <div class="mt-2">
                    <form method="POST" action="{{route('admin.logout')}}">
                        @csrf
                        <button type="submit" class="btn mb-2 btn-outline-primary mr-2">Logout</button>
                    </form>
                </div>
                @endrole
                @role('client')
                <div class="mt-2">
                    <form method="POST" action="{{route('client.logout')}}">
                        @csrf
                        <button type="submit" class="btn mb-2 btn-outline-primary mr-2">Logout</button>
                    </form>
                </div>
                @endrole
            @endauth


            <!--
            <li class="nav-item">
                <a class="nav-link text-muted my-2" href="#" data-toggle="modal" data-target=".modal-shortcut">
                    <span class="fe fe-grid fe-16"></span>
                </a>
            </li>
            <li class="nav-item nav-notif">
                <a class="nav-link text-muted my-2" href="#" data-toggle="modal" data-target=".modal-notif">
                    <span class="fe fe-bell fe-16"></span>
                    <span class="dot dot-md bg-success"></span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="avatar avatar-sm mt-2">
                    <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activities</a>
                </div>

            </li>-->
        </ul>
    </nav>


