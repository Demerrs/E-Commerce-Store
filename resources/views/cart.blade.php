@extends('layouts.app')

@section('title', 'Your Shopping Cart')

@section('data-page-id', 'cart')

@section('content')

    <div class="shopping_cart" id="shopping_cart">

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
                                        <a :href="'/product/' + item.id">@{{ item.name }}</a>
                                        <br>Status: <span v-if="item.stock > 1" style="color: #00AA00;">In Stock</span>
                                        <span v-else style="color: #ff0000;">Out of Stock</span>
                                    </h5>
                                </td>
                                <td style="padding-left: 10px">
                                    @{{ item.price }}
                                </td>
                                <td style="padding-left: 10px">
                                    @{{ item.quantity }}
                                    <button v-if="item.stock > item.quantity" @click="updateQuantity(item.id, '+')" class="success" style="cursor: pointer; color: #00AA00">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                    </button>
                                    <button v-if="item.quantity > 1" @click="updateQuantity(item.id, '-')" class="warning" style="cursor: pointer; color: #ff0000">
                                        <i class="fa fa-minus-square" aria-hidden="true"></i>
                                    </button>
                                </td>
                                <td style="padding-left: 10px">
                                    @{{ item.total }}
                                </td>
                                <td class="text-center">
                                    <button @click="removeItem(item.index)">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <table>
                            <tr>
                                <td valign="top">
                                    <div class="input-group" style="padding: 10px">
                                        <input type="text" name="coupon" class="input-group-field" placeholder="coupon code">
                                        <div class="input-group-button">
                                            <button class="button" style="border: hidden">Apply</button>
                                        </div>
                                    </div>
                                </td>
                                <td style="padding: 10px">
                                    <table class="unstriped">
                                        <tr>
                                            <td style="padding: 10px;">
                                                <h6>Subtotal:</h6>
                                            </td>
                                            <td class="text-right" style="padding: 10px">
                                                <h6>$@{{ cartTotal }}</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px;">
                                                <h6>Discount Amount:</h6>
                                            </td>
                                            <td class="text-right" style="padding: 10px;">
                                                <h6>$0.00</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px;">
                                                <h6>Tax:</h6>
                                            </td>
                                            <td class="text-right" style="padding: 10px;">
                                                <h6>$0.00</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px;">
                                                <h6>Total:</h6>
                                            </td>
                                            <td class="text-right" style="padding: 10px;">
                                                <h6>$@{{ cartTotal }}</h6>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <div class="text-try-align" >
                            <button @click="clearItems" class="button alert" >Clear Cart</button>
                            <button v-if="authenticated" class="button success" style="float: right; margin-left: 10px">
                                Checkout &nbsp;<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                            </button>
                            <span v-else>
                                <a href="/login" class="button success" style="float: right; margin-left: 10px">
                                    Checkout &nbsp;<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                </a>
                            </span>
                            <span id="properties" class="hide" data-customer-email="{{ user()->email }}"
                                  data-stripe-key="{{ \App\classes\Session::get('publishable_key') }}"></span>

                            <a href="/" class="button secondary" style="float: right; margin-right: 10px">
                                Continue Shopping &nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
        </section>


    </div>

@stop
