<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="">
                    <a href=""><i class="menu-icon fa fa-laptop"></i>Quản lý </a>
                </li>
                <li class="menu-item-has-children dropdown {{ Request::is('admin/category*') ? 'active' : '' }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Loại món ăn</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-id-badge"></i><a href="{{route('admin.category_food.create')}}">Tạo mới</a></li>
                        <li><i class="fa fa-bars"></i><a href="{{route('admin.category_food.index')}}">Danh sách</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown {{ Request::is('admin/food*') ? 'active' : '' }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Món ăn</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-id-badge"></i><a href="{{route('admin.food.create')}}">Tạo mới</a></li>
                        <li><i class="fa fa-bars"></i><a href="{{route('admin.food.index')}}">Danh sách</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown {{ Request::is('admin/review*') ? 'active' : '' }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Review</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-bars"></i><a href="{{route('admin.review.index')}}">Danh sách</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown {{ Request::is('admin/user*') ? 'active' : '' }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Nhân viên quản lý</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-id-badge"></i><a href="{{route('admin.user.create')}}">Tạo mới</a></li>
                        <li><i class="fa fa-bars"></i><a href="{{route('admin.user.index')}}">Danh sách</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</aside>
