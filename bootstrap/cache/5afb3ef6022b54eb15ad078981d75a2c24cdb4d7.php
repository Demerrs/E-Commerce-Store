<?php $__env->startSection('title', 'Homepage'); ?>

<?php $__env->startSection('data-page-id', 'home'); ?>

<?php $__env->startSection('content'); ?>



    <div class="home"><br><br><br><br><br><br><br>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <section>
            <div id="root">
                {{ message }}
            </div>
        </section>


    </div>

    <script>
        const app = Vue.createApp({
            data() {
                return {
                    message: 'This is short intro VueJS.'
                }
            }
        })
        app.mount('#root')
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>