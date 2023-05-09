@extends('layouts.app')

@section('title', 'Homepage')

@section('data-page-id', 'home')

@section('content')



    <div class="home"><br><br><br><br><br><br><br>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

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
