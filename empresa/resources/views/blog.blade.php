@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-6">
            <div class="widget widget-blog">
                <div class="widget-blog-cover">
                    <img src="{{asset('assets/img/padrino.webp')}}" alt="">
                </div>
                <div class="widget-blog-author">
                    <div class="widget-blog-author-image">
                        <img src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                    </div>
                    <div class="widget-blog-author-info">
                        <h5 class="m-t-0 m-b-1">El Padrino (1972)</h5>
                        <p class="text-muted m-0 f-s-11">Género: Crimen, Drama</p>
                    </div>
                </div>
                <div class="widget-blog-content">
                    <p>
                        Sinopsis:
Sumérgete en la épica historia de la familia Corleone en "El Padrino". Esta obra maestra del cine nos presenta a Vito Corleone, el patriarca de una de las familias mafiosas más poderosas de Nueva York. A medida que su hijo Michael se ve involucrado en el mundo del crimen organizado, la película explora temas de poder, lealtad y traición. Con actuaciones icónicas de Marlon Brando y Al Pacino, "El Padrino" es un clásico que no puedes dejar de ver.


                    </p>
                </div>
            </div>
        </div>
        <!-- Repite esta estructura para los otros elementos -->
        <div class="col-md-6">
            <div class="widget widget-blog">
                <div class="widget-blog-cover">
                    <img src="{{asset('assets/img/futuro.webp')}}"  alt="">
                </div>
                <div class="widget-blog-author">
                    <div class="widget-blog-author-image">
                        <img src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                    </div>
                    <div class="widget-blog-author-info">
                        <h5 class="m-t-0 m-b-1">Volver al Futuro (1985)</h5>
                        <p class="text-muted m-0 f-s-11">Género: Ciencia Ficción, Aventura</p>
                    </div>
                </div>
                <div class="widget-blog-content">
                    	<p>
                            Sinopsis:
Acompaña a Marty McFly en una increíble aventura en "Volver al Futuro". Este adolescente de 1985, interpretado por Michael J. Fox, se encuentra accidentalmente viajando al año 1955 gracias a la máquina del tiempo creada por el excéntrico científico Doc Brown. Mientras intenta regresar a su propio tiempo, Marty debe asegurarse de que sus padres adolescentes se enamoren para no alterar el futuro. Con una mezcla perfecta de humor, acción y nostalgia.
                        </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="widget widget-blog">
                <div class="widget-blog-cover">
                    <img src="{{asset('assets/img/lalaland.webp')}}"  alt="">
                </div>
                <div class="widget-blog-author">
                    <div class="widget-blog-author-image">
                        <img src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                    </div>
                    <div class="widget-blog-author-info">
                        <h5 class="m-t-0 m-b-1"> La La Land (2016)</h5>
                        <p class="text-muted m-0 f-s-11">Género: Musical, Romance</p>
                    </div>
                </div>
                <div class="widget-blog-content">
                    <p>
                        Sinopsis:
"La La Land" es una celebración del amor y los sueños ambientada en Los Ángeles. Emma Stone y Ryan Gosling interpretan a Mia y Sebastian, dos artistas que luchan por alcanzar el éxito en la industria del entretenimiento mientras navegan por su relación romántica. Con deslumbrantes números musicales, una cinematografía vibrante y una historia emotiva, esta película es una carta de amor al cine clásico y una reflexión sobre los sacrificios necesarios para seguir nuestros sueños.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="widget widget-blog">
                <div class="widget-blog-cover">
                    <img src="{{asset('assets/img/batman.webp')}}" alt="">
                </div>
                <div class="widget-blog-author">
                    <div class="widget-blog-author-image">
                        <img src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                    </div>
                    <div class="widget-blog-author-info">
                        <h5 class="m-t-0 m-b-1">El Caballero Oscuro (2008)</h5>
                        <p class="text-muted m-0 f-s-11">Género: Acción, Crimen, Drama</p>
                    </div>
                </div>
                <div class="widget-blog-content">
                    <p>
                        Sinopsis:
Explora el mundo oscuro y complejo de Gotham en "El Caballero Oscuro". Batman, interpretado por Christian Bale, se enfrenta a su némesis más formidable, el Joker, interpretado magistralmente por Heath Ledger. Mientras el Joker siembra el caos en la ciudad, Batman debe confrontar sus propios límites y principios para restaurar el orden. Con una trama intensa, actuaciones poderosas y dirección magistral, esta película redefinió el género de los superhéroes y se convirtió en un fenómeno cultural.


                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection