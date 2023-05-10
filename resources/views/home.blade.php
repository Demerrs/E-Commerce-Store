@extends('layouts.app')

@section('title', 'Homepage')

@section('data-page-id', 'home')

@section('content')



    <div class="home">

        <section class="hero">
            <div class="hero-slider">
                <div><img src="/images/sliders/slide_1.jpg" alt="MyStore"></div>
                <div><img src="/images/sliders/slide_2.jpg" alt="MyStore"></div>
                <div><img src="/images/sliders/slide_3.jpg" alt="MyStore"></div>
            </div>
        </section>

        <section class="display-products" data-token="{{ $token }}" id="root">
            <h2 style="padding-left: 10px">Featured Products</h2>
            <div class="row medium-up-2 large-up-4 grid-x grid-padding-x">
                <div class="cell small-12" v-cloak v-for="feature in featured">
                    <a :href="'/product/' + feature.id">
                        <div class="card"  data-equalizer-watch>
                            <div class="card-section">
                                <img :src="'/' + feature.image_path" width="100%" height="200%">
                            </div>
                            <div class="card-section">
                                <p>
                                    @{{ stringLimit(feature.name, 30) }}
                                </p>
                                <a :href="'/product/' + feature.id" class="button more grid-x">
                                    See More
                                </a>
                                <button @click.prevent="addToCart(feature.id)" class="button cart grid-x">
                                    $@{{ feature.price }} - Add to cart
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <h2 style="padding-left: 10px">Products Picks</h2>
            <div class="row medium-up-2 large-up-4 grid-x grid-padding-x">
                <div class="cell small-12" v-cloak v-for="product in products">
                    <a :href="'/product/' + product.id">
                        <div class="card"  data-equalizer-watch>
                            <div class="card-section">
                                <img :src="'/' + product.image_path" width="100%" height="200%">
                            </div>
                            <div class="card-section">
                                <p>
                                    @{{ stringLimit(product.name, 29) }}
                                </p>
                                <a :href="'/product/' + product.id" class="button more grid-x">
                                    See More
                                </a>
                                <button @click.prevent="addToCart(product.id)" class="button cart grid-x">
                                    $@{{ product.price }} - Add to cart
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="text-center">
                <img v-show="loading" src="/images/loading.gif" style="padding-bottom: 3rem;
                position: fixed; top: 60%; bottom: 20%;">
            </div>

        </section>

    </div>

@stop
