<header class="msa-header-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="msa-header_content">
                    <div class="msa-header_content_start">
                        <button class="sidebar-toggler">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>
                    <div class="msa-header_content_end">
                        <ul class="msa-header_item_list">
                            <li>
                                <a href="#" class="btn btn-dropdown" data-bs-toggle="dropdown">
                                    <i class="fa-solid fa-message"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-top">
                                        <h2>Messages</h2>
                                        <a href="#">Mark all as Read</a>
                                    </div>
                                    <ul class="dropdown-body">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="user-info">
                                                    <div class="user-img">
                                                        <img src="{{ asset('assets/images/user.png') }}" alt="user-img">
                                                    </div>
                                                    <div class="user-text">
                                                        <div class="user-text-top">
                                                            <h2>Adam Miller</h2>
                                                            <h4>Now</h4>
                                                        </div>
                                                        <p>Have you seens the claim from Rose?</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-bottom">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="btn btn-dropdown" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-regular fa-bell"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-top">
                                        <h2>notification</h2>
                                        <a href="#">Mark all as Read</a>
                                    </div>
                                    <ul class="dropdown-body">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="user-info">
                                                    <div class="user-img">
                                                        <img src="{{ asset('assets/images/user.png') }}" alt="user-img">
                                                    </div>
                                                    <div class="user-text">
                                                        <div class="user-text-top">
                                                            <h2>Deposite order</h2>
                                                            <h4>3 hours ago</h4>
                                                        </div>
                                                        <p>Your deposit order is placed</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-bottom">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="d-none">
                                <a href="#" class="btn btn-dropdown site-language" data-bs-toggle="dropdown">
                                    <img src="{{ asset('assets/images/us.png') }}" alt="icon">
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <img src="{{ asset('assets/images/us.png') }}" alt="icon">
                                            <span>English</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="btn btn-dropdown user-profile" data-bs-toggle="dropdown">
                                    <img src="{{ asset('assets/images/user.png') }}" alt="icon">
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}">
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
