<?php $categories = \App\models\Category::with('subCategories')->get(); ?>

<header class="navigation">
    <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle="main-menu"></button>
        <div class="title-bar-title"><a href="/">Ecommerce Store</a> </div>
    </div>

    <div class="top-bar" id="main-menu">
        <div class="top-bar-left">
            <ul class="dropdown menu fixx" data-dropdown-menu data-click-open="true" data-disable-hover="true" data-close-on-click-inside="false">
                <li class="menu-text logo" onclick="location.href='/'"></li>
                <li><a href="/products" class="small-12 cell">EStore Products</a></li>
                @if(count($categories))
                    <li>
                        <a href="#">Categories</a>
                        <ul class="menu vertical dropdown">
                            @foreach($categories as $category)
                                <li>
                                    <a href="#">{{ $category->name }}</a>
                                    @if(count($category->subCategories))
                                        <ul class="menu vertical">
                                            @foreach($category->subCategories as $subCategory)
                                                <li>
                                                    <a href="$">
                                                        {{ $subCategory->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="dropdown menu vertical medium-horizontal">
                @if(isAuthenticated())
                    <li><a href="#">{{ user()->username }}</a> </li>
                    <li>
                        <a href="/cart">Cart &nbsp; <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="/logout">Logout</a> </li>
                    @else
                    <li><a href="/login">Sign In</a> </li>
                    <li><a href="/register">Register</a> </li>
                    <li>
                        <a href="/cart">Cart &nbsp; <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</header>
