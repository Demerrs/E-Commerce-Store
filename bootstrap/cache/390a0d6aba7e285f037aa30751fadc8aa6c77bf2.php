<?php $__env->startSection('title', 'Login to Your Account'); ?>

<?php $__env->startSection('data-page-id', 'auth'); ?>

<?php $__env->startSection('content'); ?>

    <div class="auth" id="auth" style="padding: 6rem;">

        <section class="login_form">
            <div class="cell medium-6 grid-x">
                <div class="small-12 medium-7 medium-centered">
                    <h2 class="text-center">Login</h2>
                    <?php echo $__env->make('includes.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <form action="/login" method="post">
                        <input type="text" name="username" placeholder="Your Username"
                               value="<?php echo e(\App\classes\Request::old('post', 'username')); ?>">

                        <input type="text" name="password" placeholder="Your Password">
                        <input type="hidden" name="token" value="<?php echo e(\App\classes\CSRFToken::_token()); ?>">
                        <button class="button float-right">Login</button>
                    </form>
                    <p>Not yet a member? <a href="/register">Register Here</a> </p>
                </div>
            </div>
        </section>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>