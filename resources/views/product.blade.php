@extends('layouts.app')
@section('title', $product->name)
@section('content')

<div class="container">

    <div class="row" style="margin-bottom: 3em">
        <div class="col-md-4 product-image">
            <div>
                <img src="{{ productImage($product->image) }}" width="100%" height="100%" id="current-image">
            </div>
            <div class="image-thumbnails">
                @if ($images)
                    <img src="{{ productImage($product->image) }}" class="image-thumbnail active">
                    @foreach ($images as $image)
                        <div>
                            <img src="{{ productImage($image) }}" class="image-thumbnail">
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="product-details col-md-5 offset-md-1">
            <h2 class="lead" style="margin-top:1em">{{ $product->name }}</h2>
            {{-- Condicional para mostrar en rojo = agotado, amarillo = pocas unidades y verde = en stock el stockLevel --}}
            @if ($stockLevel == 'Agotado')
                <span class="badge badge-danger" style="font-size: 1em">{{ $stockLevel }}</span>
            @elseif ($stockLevel == 'Pocas unidades')
                <span class="badge badge-warning" style="font-size: 1em">{{ $stockLevel }}</span>            
            @else
                <span class="badge badge-success" style="font-size: 1em">{{ $stockLevel }}</span>            
            @endif
            
            <p class="light-text">{{ $product->details }}</p>
            <h3 class="lead">$ {{ format($product->price) }}</h3>
            <p class="light-text">{!! $product->description !!}</p>
            @if ($product->quantity > 0)
                <button type="submit" class="btn custom-border-n">Añadir al carrito</button>
            @endif
        </div>
    </div>
    <!-- <hr> -->
</div>
@include('partials.might-like')
<!-- contenido de la página final -->
@endsection

@section('scripts')

    <script>
        $(document).ready(function () {
            //forzamos que la altura sea tan larga como el ancho
            var w = $('#current-image').width();
            $('#current-image').css({'height': w + 'px'});
            //cuando se haga click en una imagen, se cambia la imagen principal
            $('.image-thumbnail').on('click', (e) => {
                $('.image-thumbnail').removeClass('active');
                $(e.currentTarget).addClass('active');
                if($(e.currentTarget).attr('src') != $('#current-image').attr('src')) {
                    $(e.currentTarget).addClass('active');
                    $('#current-image').animate({'opacity' : 0}, 300, function() {
                        $('#current-image').attr('src', $(e.currentTarget).attr('src'));
                        $('#current-image').animate({'opacity' : 1}, 400);
                    })
                }
            });

        });
    </script>

@endsection
