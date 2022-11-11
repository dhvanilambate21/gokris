@guest
                            @if (Route::has('login'))

                            @endif

                            @if (Route::has('register'))
                            @endif
                        @else
<header class="navbar navbar-expand-lg header__adm">
        <div class="container">
       
            <a class="navbar-brand" href="#">GoKrish</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
               
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#"><img src="{{ asset('backend/images/Avatar@3x.svg') }}" alt="" /></a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('backend/images/Avatar@3x.png') }}" alt="" width="50" height="50" class="profile_image" />
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('profile') }}"><img src="{{ asset('backend/images/account@3x.svg') }}"
                                        alt="" />Account
                                    settings</a>
                            </li>
                            <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    <img src="{{ asset('backend/images/Log out@3x.svg') }}"
                                        alt="" />
                                    </a>
                                 </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    @endguest
