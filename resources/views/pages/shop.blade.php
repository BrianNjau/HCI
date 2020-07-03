<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/_shop.css')}}">
</head>
<body>
    <div class="app">
    @include('inc.navbar')
        <div class="container-shop">
            <header>
                <h1>Shop</h1>
            </header>
           
            <div class="sidebar">
                <h3>Categories</h3>
                <ul>
                    @foreach ($categories as $category)
                        <li><a href="#">{{$category->name}}</a></li> 
                    @endforeach
                </ul>
            </div>
            <main class="py-4">
                @foreach ($products as $product)
                    <div class="product">
                        <a href="#"><img src="{{asset('img/products/'.$product->slug.'.jpg')}}" alt="product"></a>
                        <div class="product-bottom">
                            <a href="#"><span class="product-name">{{$product->name}}</span></a>
                            <div class="product-price">Price:Ksh {{$product->price}}</div>  
                        </div> 
                    </div>          
                @endforeach
            </main>
            <footer><h3>This is the footer</h3></footer>
        </div>
    </div>
</body>