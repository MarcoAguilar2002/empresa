@extends('layouts.main')

@section('content')
<!-- Servicios -->
<div class="container my-5" id="servicios">
    <h2 class="text-center my-4">Nuestros Servicios</h2>
    <div class="row text-center">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Alquiler de Películas</h5>
                    <p class="card-text">Disfruta de nuestra extensa colección de películas en alquiler. Desde clásicos hasta los últimos estrenos, tenemos algo para todos.</p>
                </div>
                <div class="text-center mb-3">
                    <a href="#" class="btn btn-primary btn-sl">Ver Más</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Venta de Películas</h5>
                    <p class="card-text">Compra tus películas favoritas y añádelas a tu colección personal. Ofrecemos precios competitivos y una gran selección.</p>
                </div>
                <div class="text-center mb-3">
                    <a href="#" class="btn btn-primary btn-sl">Ver Más</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Eventos de Cine</h5>
                    <p class="card-text">Únete a nuestros eventos especiales de cine, incluyendo proyecciones temáticas, noches de estreno y mucho más.</p>
                </div>
                <div class="text-center mb-3">
                    <a href="#" class="btn btn-primary btn-sl">Ver Más</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection