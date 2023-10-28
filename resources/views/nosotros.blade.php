@extends('layouts.app')
@section('title', 'Welcome')
@section('content')

<main class="container">
    <h1 class="fw-300 text-center">Conoce sobre Nosotros</h1>
    <br>
    <br>
    

    <div class="row contenido-nosotros">
        <div class="col-md-6">
            <img src="images/nosotros.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-md-6">
            <blockquote>7 Años de Experiencia</blockquote>
            <p>
                Piel de Lujo Online, es una tienda virtual con puntos de ventas presenciales en Manizales y La Cruz Nariño; todos estos productos son exportados de varias empresas belenitas situadas en el municipio de Belén al norte del Departamento de Nariño en el suroccidente Colombiano; Estas microempresas se dedican a la fabricación y comercialización de artículos y accesorios en cuero a nivel internacional. Los productos que ofrecemos son de calidad tipo aportación, cumpliendo rigurosamente estándares de calidad en su materia prima, herrajes y proceso productivo. Nuestros productos se focalizan para cualquier tipo de clientes y para clientes mayoristas a un costo realmente competitivo.
            </p>
        </div>
    </div>
</main>

<br>
<br>

<img src="" class="img-fluid mx-auto d-block">

<section class="container section">
    <br>
    <h2 class="fw-300 text-center">Más sobre nosotros</h2>
    <br>
    <br>
    <div class="row">
        <div class="col-md-4 icono">
            <img src="images/medalla.png" width="70" alt="">
            <h3>Info</h3>
            <p>Piel de Lujo es una microempresa dedicada a vender todo tipo de artículos hechos con cuero, con terminados impecables y a excelentes precios.</p>
        </div>
        <div class="col-md-4 icono">
            <img src="images/entrega.png" width="70" alt="">
            <h3>Envíos</h3>
            <p>Realizamos envíos a nivel nacional de todos y cada uno de nuestros artículos, garantizando la entrega en los tiempos oportunos.</p>
        </div>
        <div class="col-md-4 icono">
            <img src="images/marcador-de-posicion.png" width="70" alt="">
            <h3>Local</h3>
            <p>Ventas locales en Manizales y La Cruz Nariño, completamente seguras, surtido al por mayor.</p>
        </div>
    </div>
</section>

<br>
<br>


@endsection
   