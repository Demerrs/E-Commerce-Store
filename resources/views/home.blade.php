@extends('layouts.app')

@section('title', 'Homepage')

@section('data-page-id', 'home')

@section('content')



    <div class="home">
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <section class="hero">
            <div class="hero-slider">
                <div><img src="/images/sliders/slide_1.jpg" alt="MyStore"></div>
                <div><img src="/images/sliders/slide_2.jpg" alt="MyStore"></div>
                <div><img src="/images/sliders/slide_3.jpg" alt="MyStore"></div>
            </div>
        </section>

        <section>
            <div id="root">
                @{{ message }}
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

@stop
