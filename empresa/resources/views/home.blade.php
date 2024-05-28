@extends('layouts.main')

@section('content')
<!-- Hero Section -->
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 class="display-4">Bienvenido a Empresa</h1>
        <p class="lead">Tu lugar para encontrar las mejores películas y disfrutar del cine como nunca.</p>
        <a class="btn btn-primary btn-lg" href="#peliculas-destacadas" role="button">Ver Películas Destacadas</a>
    </div>
</div>

<!-- Películas Destacadas -->
<div class="container" id="peliculas-destacadas">
    <h2 class="text-center my-4">Películas Destacadas</h2>
    <div class="row">
        <!-- Película 1 -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{asset('assets/img/padrino.webp')}}" class="card-img-top" alt="El Padrino">
                <div class="card-body">
                    <h5 class="card-title">El Padrino (1972)</h5>
            
                    <a href="#" class="btn btn-primary">Ver Más</a>
                </div>
            </div>
        </div>
        <!-- Película 2 -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{asset('assets/img/futuro.webp')}}" class="card-img-top" alt="Volver al Futuro">
                <div class="card-body">
                    <h5 class="card-title">Volver al Futuro (1985)</h5>
            
                    <a href="#" class="btn btn-primary">Ver Más</a>
                </div>
            </div>
        </div>
        <!-- Película 3 -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{asset('assets/img/lalaland.webp')}}" class="card-img-top" alt="La La Land">
                <div class="card-body">
                    <h5 class="card-title">La La Land (2016)</h5>
                
                    <a href="#" class="btn btn-primary">Ver Más</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection