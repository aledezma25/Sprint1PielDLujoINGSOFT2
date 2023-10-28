@extends('layouts.app')
@section('title', 'Welcome')
@section('content')

<!-- start hero section -->
<div class="hero-image">
    <div class="hero-content">
        <div class="col-md-4 hero-text" >
            <span class="badge badge-light" style="font-size: 200%">
                Bienvenidos a Piel de Lujo
            </span>
            <h3 >Tienda Online sobre productos artesanales de 100% cuero.</h3>
            <a class="btn btn-secondary" href="shop">Comprar</a>
            <a class="btn btn-dark" href="contacto">Contáctanos</a>
        </div>
    </div>
</div>
<!-- end hero section -->
<!-- start page content -->
<div class="container">
    {{-- <div class="content-head">
        <h2 style="text-align:center; font-weight: bold">Piel de Lujo</h2>
        <p style="text-align: center">Aquí encontrarás todos nuestros productos disponibles, desde correras para caballeros hasta bolsos para damas.</h2>
    </div> --}}
    <h2 class="header text-center">Nuestros productos</h2>
    <!-- start products row -->
    <div class="row">
        @foreach ($products as $product)
            <!-- start single product -->
            <div class="col-md-6 col-sm-12 col-lg-4 product">
                <a href="{{ route('shop.show', $product->slug) }}" class="custom-card">
                    <div class="card view overlay zoom">
                        {{-- Se quita "class="card-img-top img-fluid"" para que todas las imagenes tengan un mismo tamaño --}}
                        <img src="{{ productImage($product->image) }}"  height="250px" width="250px" alt="..."> 
                        <div class="card-body">
                            <h6 style="color: rgb(7, 67, 186)">{{ $product->name }}</h6>
                            <h5 class="float-left">$ {{ format($product->price) }}</h5>
                            {{-- <h5 class="card-title">{{ $product->name }}<span class="float-right">$ {{ format($product->price) }}</span></h5> --}}
                            {{-- <div class="product-actions" style="display: flex; align-items: center; justify-content: center">
                                <a class="cart" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fas fa-cart-plus"></i></a>
                                <a class="like" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fa fa-thumbs-up"></i></a>
                                <a class="heart" href="#"><i style="color:blue; font-size: 1.3em" class="fa fa-heart-o"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single product -->
        @endforeach
    </div>
    <!-- end products row -->
    <div class="show-more">
        <a href="{{ route('shop.index') }}">
            <button class="btn custom-border-n">Ver mas</button>
        </a>
    </div>
    <hr>
    
    <!-- end products row -->
</div>
<!-- end page content -->


@endsection
