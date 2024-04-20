<!-- Header Section Begin -->
<header class="header-section-other">
    <div class="container-fluid">
        <div class="logo">
            <a href="./index.html"><img src="/customer/img/little-logo.png" alt=""></a>
        </div>
        <div class="nav-menu">
            <nav class="main-menu mobile-menu">
                <ul>
                    <li class="{{ Request::routeIs('customer.index') ? 'active' : '' }}"><a href="{{route('customer.index')}}">Trang chủ</a></li>
                    <li class="{{ Request::routeIs('customer.food') ? 'active' : '' }}"><a href="{{route('customer.food')}}">Món ăn</a></li>
                    <li><a href="">Liên lạc</a></li>
                </ul>
            </nav>
            <div class="nav-right search-switch">
                <i class="fa fa-search"></i>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->

<!-- Hero Search Section Begin -->
<div class="hero-search set-bg" data-setbg="/customer/img/search-bg.jpg">
    <div class="container">
        <div class="filter-table">
        </div>
    </div>
</div>
<!-- Hero Search Section End -->
