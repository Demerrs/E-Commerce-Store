<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce Store - <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="icon" type="image/x-icon" href="/images/ecommerce.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body data-page-id="<?php echo $__env->yieldContent('data-page-id'); ?>">

<?php echo $__env->yieldContent('body'); ?>


<script src="/js/all.js"></script>
<?php echo $__env->yieldContent('stripe-checkout'); ?>
<?php echo $__env->yieldContent('paypal-checkout'); ?>
</body>
</html>