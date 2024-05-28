@extends('layouts.main')

@section('content')
<!-- Proyectos -->
<div class="container my-5" id="proyectos">
    <h2 class="text-center my-4">Nuestros Proyectos</h2>
    <div class="row">
        <!-- Proyecto 1 -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{asset('assets/img/clasico.webp')}}" class="card-img-top" alt="Restauración de Clásicos" style="width: 355px; height: 250px;">
                <div class="card-body">
                    <h5 class="card-title">Restauración de Clásicos</h5>
                    <p class="card-text">Trabajamos en la restauración y digitalización de películas clásicas, preservando la historia del cine para futuras generaciones.</p>
                </div>
                <div class="text-center mb-3">
                    <a href="#" class="btn btn-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
        <!-- Proyecto 2 -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{asset('assets/img/cine.webp')}}" class="card-img-top" alt="Cine Comunitario" style="width: 355px; height: 250px;">
                <div class="card-body">
                    <h5 class="card-title">Cine Comunitario</h5>
                    <p class="card-text">Organizamos proyecciones de cine al aire libre y eventos comunitarios para fomentar la cultura cinematográfica en nuestra localidad.</p>
                </div>
                <div class="text-center mb-3">
                    <a href="#" class="btn btn-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
        <!-- Proyecto 3 -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{asset('assets/img/taller.webp')}}" class="card-img-top" alt="Talleres de Cine" style="width: 355px; height: 250px;">
                <div class="card-body">
                    <h5 class="card-title">Talleres de Cine</h5>
                    <p class="card-text">Ofrecemos talleres y cursos de cine para jóvenes talentos, ayudándolos a desarrollar sus habilidades y conocimientos.</p>
                </div>
                <div class="text-center mb-3">
                    <a href="#" class="btn btn-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Proyecto 4 -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{asset('assets/img/corto.webp')}}" class="card-img-top" alt="Festival de Cortometrajes" style="width: 355px; height: 250px;">
                <div class="card-body">
                    <h5 class="card-title">Festival de Cortometrajes</h5>
                    <p class="card-text">Organizamos un festival anual de cortometrajes, donde cineastas emergentes tienen la oportunidad de mostrar su trabajo a una audiencia más amplia.</p>
                </div>
                <div class="text-center mb-3">
                    <a href="#" class="btn btn-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
        <!-- Proyecto 5 -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{asset('assets/img/cola.webp')}}" class="card-img-top" alt="Colaboraciones Internacionales" style="width: 355px; height: 250px;">
                <div class="card-body">
                    <h5 class="card-title">Colaboraciones Internacionales</h5>
                    <p class="card-text">Participamos en proyectos de colaboración internacional para coproducciones y distribución de películas, ampliando horizontes y creando nuevas oportunidades.</p>
                </div>
                <div class="text-center mb-3">
                    <a href="#" class="btn btn-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
        <!-- Proyecto 6 -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{asset('assets/img/archi.webp')}}" class="card-img-top" alt="Archivo Fílmico" style="width: 355px; height: 250px;">
                <div class="card-body">
                    <h5 class="card-title">Archivo Fílmico</h5>
                    <p class="card-text">Estamos construyendo un archivo fílmico que preserve películas y documentos importantes de la historia del cine, accesible para investigadores y entusiastas del cine.</p>
                </div>
                <div class="text-center mb-3">
                    <a href="#" class="btn btn-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection