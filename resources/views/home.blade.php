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

        <section class="display-products" id="root">
            <h2 style="padding-left: 10px">Featured Products</h2>
            <div class="cell medium-up-4" style="display: inline-block">
                <div class="small-12 cell" v-for="feature in featured">
                    <a :href="'/product/' + feature.id">
                        <div class="card" data-equalizer-watch>
                            <div class="card-section">
                                <img :src="'/' + feature.image_path" width="100%" height="200%">
                            </div>
                            <div class="card-section">
                                <p>
                                    @{{ feature.name }}
                                </p>
                                <a :href="'/product/' + feature.id" class="button more grid-x">
                                    See More
                                </a>
                                <a :href="'/product/' + feature.id" class="button cart grid-x">
                                    @{{ feature.price }} - Add to cart
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

    </div>

@stop
