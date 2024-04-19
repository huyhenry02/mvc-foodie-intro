<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yummy | Template</title>

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

@include('customer.layouts.header')

@yield('content')

@include('customer.layouts.footer')
<!-- Js Plugins -->
<script src="/customer/js/jquery-3.3.1.min.js"></script>
<script src="/customer/js/bootstrap.min.js"></script>
<script src="/customer/js/jquery.slicknav.js"></script>
<script src="/customer/js/jquery.nice-select.min.js"></script>
<script src="/customer/js/mixitup.min.js"></script>
<script src="/customer/js/main.js"></script>
</body>

</html>
