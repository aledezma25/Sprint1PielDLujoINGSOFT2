@extends('layouts.app')
@section('title', 'Cart')
@section('content')

<!-- start page content -->
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="alert alert-info">
                <h4 class="lead">Aqui va el carrito (sprint 2) <br><a class="btn custom-border-n" href="{{ route('shop.index') }}">Volver a los productos</a></h4>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')

@endsection