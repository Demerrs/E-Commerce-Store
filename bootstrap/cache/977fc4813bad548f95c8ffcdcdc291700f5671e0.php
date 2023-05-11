<?php $__env->startSection('title', 'Your Shopping Cart'); ?>

<?php $__env->startSection('data-page-id', 'cart'); ?>

<?php $__env->startSection('content'); ?>

    <div class="shopping_cart" id="shopping_cart" style="padding: 6rem;">

        <div class="text-center">
            <img v-show="loading" src="/images/loading.gif">
        </div>

        <section class="items" v-if="loading == false">
            <div class="row">
                <div class="small-12">
                    <h2 v-if="fail" v-text="message"></h2>
                    <div v-else>
                        <h2>Your Cart</h2>
                        <table class="hover unstriped">
                            <thead class="text-left">
                            <tr style="height: 50px">
                                <th style="padding-left: 10px">#</th><th style="padding-left: 10px">Product Name</th>
                                <th style="padding-left: 10px">($) Unit Price</th><th style="padding-left: 10px">Qty</th><th style="padding-left: 10px">Total</th><th style="padding-left: 10px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="item in items">
                                <td class="text-center">
                                    <a :href="'/product/' + item.id">
                                        <img :src="'/' + item.image" height="60px" width="60px" alt="item.name">
                                    </a>
                                </td>

                                <td>
                                    <h5 style="padding-left: 10px">
                                        <a :href="'/product/' + item.id">{{ item.name }}</a>
                                        <br>Status: <span v-if="item.stock > 1" style="color: #00AA00;">In Stock</span>
                                        <span v-else style="color: #ff0000;">Out of Stock</span>
                                    </h5>
                                </td>
                                <td style="padding-left: 10px">
                                    {{ item.price }}
                                </td>
                                <td style="padding-left: 10px">
                                    {{ item.quantity }}
                                </td>
                                <td style="padding-left: 10px">
                                    {{ item.total }}
                                </td>
                                <td class="text-center">
                                    <button>
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <table>

                        </table>
                    </div>
                </div>
            </div>
        </section>


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>