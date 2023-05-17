<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce Store - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="icon" type="image/x-icon" href="/images/ecommerce.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body data-page-id="@yield('data-page-id')">

@yield('body')


<script src="/js/all.js"></script>
@yield('stripe-checkout')
@yield('paypal-checkout')
</body>
</html>