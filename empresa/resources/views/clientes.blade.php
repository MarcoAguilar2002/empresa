@extends('layouts.main')

@section('content')
<!-- Clientes -->
<div class="container my-5" id="clientes">
    <h2 class="text-center my-4">Nuestros Clientes</h2>
    <div class="row">
        <!-- Cliente Alicia -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{asset('assets/img/cliente1.jpg')}}" class="card-img-top" alt="Cliente Alicia">
                <div class="card-body">
                    <h5 class="card-title">Alicia</h5>
                    <p class="card-text">Recomiendo esta empresa como una excelente opción para alquilar películas. Su servicio al cliente es excepcional y siempre se esfuerzan por brindar la mejor experiencia posible.</p>
                </div>
                <div class="text-center mb-3">
                    <a href="#" class="btn btn-primary btn-sl">Ver Más</a>
                </div>
            </div>
        </div>
        <!-- Cliente Carlos -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{asset('assets/img/cliente2.jpg')}}" class="card-img-top" alt="Cliente Carlos">
                <div class="card-body">
                    <h5 class="card-title">Carlos</h5>
                    <p class="card-text">Considero esta empresa como una opción confiable y eficiente en el sector del entretenimiento. Su servicio de alquiler de películas es altamente valorado por sus clientes.</p>
                </div>
                <div class="text-center mb-3">
                    <a href="#" class="btn btn-primary btn-sl">Ver Más</a>
                </div>
            </div>
        </div>
        <!-- Cliente María -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{asset('assets/img/cliente3.jpg')}}" class="card-img-top" alt="Cliente María">
                <div class="card-body">
                    <h5 class="card-title">María</h5>
                    <p class="card-text">Recomiendo esta empresa por su amplia selección de películas, así como por su atención al cliente y la calidad de su servicio.</p>
                </div>
                <div class="text-center mb-3">
                    <a href="#" class="btn btn-primary btn-sl">Ver Más</a>
                </div>
            </div>
        </div>
        <!-- Cliente Juan -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{asset('assets/img/cliente4.jpg')}}" class="card-img-top" alt="Cliente Juan">
                <div class="card-body">
                    <h5 class="card-title">Juan</h5>
                    <p class="card-text">Aprecio esta empresa por la variedad de películas disponibles y por la facilidad de uso de su servicio de alquiler en línea.</p>
                </div>
                <div class="text-center mb-3">
                    <a href="#" class="btn btn-primary btn-sl">Ver Más</a>
                </div>
            </div>
        </div>
        <!-- Cliente Sofía -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{asset('assets/img/cliente5.jpg')}}" class="card-img-top" alt="Cliente Sofía">
                <div class="card-body">
                    <h5 class="card-title">Sofía</h5>
                    <p class="card-text">He recibido recomendaciones positivas de esta empresa por la rapidez en la entrega de los pedidos y la calidad de las películas.</p>
                </div>
                <div class="text-center mb-3">
                    <a href="#" class="btn btn-primary btn-sl">Ver Más</a>
                </div>
            </div>
        </div>
        <!-- Cliente Pedro -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{asset('assets/img/cliente6.jpg')}}" class="card-img-top" alt="Cliente Pedro">
                <div class="card-body">
                    <h5 class="card-title">Pedro</h5>
                    <p class="card-text">Elogio el servicio al cliente de esta empresa, siempre están dispuestos a ayudar y resolver cualquier problema de manera rápida y eficiente.</p>
                </div>
                <div class="text-center mb-3">
                    <a href="#" class="btn btn-primary btn-sl">Ver Más</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection