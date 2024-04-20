<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yummy</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/customer/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/customer/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/customer/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/customer/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/customer/css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container">
        <div class="logo">
            <a href="./index.html"><img src="/customer/img/logo.png" alt=""></a>
        </div>
        <div class="nav-menu">
            <nav class="main-menu mobile-menu">
                <ul>
                    <li class="{{ Request::routeIs('customer.index') ? 'active' : '' }}"><a
                            href="{{route('customer.index')}}">Trang chủ</a></li>
                    <li class="{{ Request::routeIs('customer.food') ? 'active' : '' }}"><a
                            href="{{route('customer.food')}}">Món ăn</a></li>
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

<!-- Page Top Recipe Section Begin -->
<section class="page-top-recipe">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-2">
                <div class="pt-recipe-item large-item">
                    <div class="pt-recipe-img set-bg" data-setbg="/customer/img/recipe-3.jpg">
                        <i class="fa fa-plus"></i>
                    </div>
                    <div class="pt-recipe-text">
                        <span>March 10, 2019</span>
                        <h3>Món 1</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 order-lg-1">
                <div class="pt-recipe-item">
                    <div class="pt-recipe-img set-bg" data-setbg="/customer/img/recipe-1.jpg">
                        <i class="fa fa-plus"></i>
                    </div>
                    <div class="pt-recipe-text">
                        <h4>Món 2</h4>
                    </div>
                </div>
                <div class="pt-recipe-item">
                    <div class="pt-recipe-img set-bg" data-setbg="/customer/img/recipe-2.jpg">
                        <i class="fa fa-plus"></i>
                    </div>
                    <div class="pt-recipe-text">
                        <h4>Món 3</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 order-lg-3">
                <div class="pt-recipe-item">
                    <div class="pt-recipe-img set-bg" data-setbg="/customer/img/recipe-4.jpg">
                        <i class="fa fa-plus"></i>
                    </div>
                    <div class="pt-recipe-text">
                        <h4>Món 4</h4>
                    </div>
                </div>
                <div class="pt-recipe-item">
                    <div class="pt-recipe-img set-bg" data-setbg="/customer/img/recipe-5.jpg">
                        <i class="fa fa-plus"></i>
                    </div>
                    <div class="pt-recipe-text">
                        <h4>Món 5</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Top Recipe Section End -->

<!-- Top Recipe Section Begin -->
<section class="top-recipe spad">
    <div class="section-title">
        <h5>Công thức tốt nhất</h5>
    </div>
    <div class="container po-relative">
        <div class="plus-icon">
            <i class="fa fa-plus"></i>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="top-recipe-item large-item">
                    <div class="top-recipe-img set-bg" data-setbg="/customer/img/top-recipe/recipe-1.jpg">
                        <i class="fa fa-plus"></i>
                    </div>
                    <div class="top-recipe-text">
                        <div class="cat-name">{{$firstFood->categoryFood->name ?? ''}}</div>
                        <a href="#">
                            <h4>{{$firstFood->name ?? ''}}</h4>
                        </a>
                        <p>{{$firstFood->description ?? ''}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                @foreach($foods as $food)
                    <div class="top-recipe-item">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="top-recipe-img set-bg" data-setbg="/customer/img/top-recipe/recipe-2.jpg">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="top-recipe-text">
                                    <div class="cat-name">{{$food->categoryFood->name ?? ''}}</div>
                                    <a href="#">
                                        <h4>{{$food->name ?? ''}}</h4>
                                    </a>
                                    <p>{{$food->description ?? ''}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Top Recipe Section End -->

<!-- Categories Filter Section Begin -->
<div class="categories-filter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="filter-item">
                    <ul>
                        @foreach($categories as $category)
                            <li>{{$category->name ?? ''}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Categories Filter Section End -->

<!-- Feature Recipe Section Begin -->
<section class="feature-recipe">
</section>
<!-- Feature Recipe Section End -->

<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="fs-left">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="/customer/img/footer-logo.png" alt="">
                        </a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                        viverra maecenas accumsan lacus vel facilisis.</p>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <form action="#" class="subscribe-form">
                    <h3>Để lại lời nhắn của bạn</h3>
                    <input type="email" placeholder="Your e-mail">
                    <button type="submit">Subscribe</button>
                </form>
                <div class="social-links">
                    <a href="#"><i class="fa fa-instagram"></i><span>Instagram</span></a>
                    <a href="#"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>
                    <a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                    <a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                    <a href="#"><i class="fa fa-youtube"></i><span>Youtube</span></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search model -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="/customer/js/jquery-3.3.1.min.js"></script>
<script src="/customer/js/bootstrap.min.js"></script>
<script src="/customer/js/jquery.slicknav.js"></script>
<script src="/customer/js/jquery.nice-select.min.js"></script>
<script src="/customer/js/mixitup.min.js"></script>
<script src="/customer/js/main.js"></script>
</body>

</html>
