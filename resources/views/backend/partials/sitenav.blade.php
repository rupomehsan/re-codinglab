<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand"><img src="{{asset('assets/images/logoicon.png')}}"
                        alt="" style="height: 30px;">
                    <h2 class="brand-text">Admin Panel</h2>
                </a></li>
        </ul>
    </div>
    <hr>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content custom_scroll">
        <!---->
        <div>
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

                <li class="nav-item">
                    <a href="{{url('admin/dashboard')}}" class="d-flex align-items-center"><i class="fa fa-home"></i>
                        <span class="menu-title text-truncate">Dashboard</span>
                        <!---->
                    </a>

                </li>
                <li class="nav-item has-sub open"><a class="d-flex align-items-center"><i class="fa fa-users"></i> <span
                            class="menu-title text-truncate">Category</span>
                        <!---->
                    </a>
                    <ul class="menu-content">
                        <li><a href="{{route('admin.category')}}"
                                class=" mb-1 d-flex align-items-center nav_link_item {{request()->is('admin/category') ? 'active' : '' }}"><i
                                    class="far fa-circle {{request()->is('admin/category') ? 'bg-danger' : '' }} rounded"></i>
                                <span class="menu-item text-truncate">
                                    All Category
                                </span></a></li>

                    </ul>
                </li>
                <li class="nav-item has-sub open"><a href="#" class="d-flex align-items-center"><i
                            class="fa fa-users"></i> <span class="menu-title text-truncate">Blog</span>
                        <!---->
                    </a>
                    <ul class="menu-content">
                        <li><a href="{{url('admin/blogs')}}"
                                class="d-flex align-items-center nav_link_item {{request()->is('admin/blogs') ? 'active' : '' }}"><i
                                    class="far fa-circle"></i> <span class="menu-item text-truncate">
                                    All Blogs
                                </span></a></li>
                        <li><a href="{{url('admin/blogs/create')}}"
                                class="d-flex align-items-center nav_link_item {{request()->is('admin/blogs/create') ? 'active' : '' }}"><i
                                    class="far fa-circle"></i> <span class="menu-item text-truncate">
                                    Create Blog
                                </span></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="d-flex align-items-center"><i class="fa-solid fa-power-off"></i>
                        <span class="menu-title text-truncate">Logout</span></a></li>
            </ul>
            <div class="watch">
                <div class="title">left time</div>:
                <div class="min ms-3">12</div>:
                <div class="sec">04</div>
                <div class="meridian">min</div>
            </div>
        </div>
        <!---->
        <!---->
    </div>
</div>