@extends('layout')

@section('title','Empresa')

@section('content')

<div class="container">
    <div class="card bg-dark text-white">
        <img src="/img/empresa.jpg" class="card-img" alt="empresa">
            <div class="card-img-overlay shadow rounded">
                <h1 class = "card-title fw-bolder text-center" >EMPRESA</h5>
                    <hr>
                    <img src="/img/logotipo.png" alt="seincoingenieria" class="img-fluid mx-auto d-block mb-5" width="250">
                        <h2 class="text-center fw-bolder">QUIENES SOMOS</h2>
                        <p class="lead  fst-italic">
                            Es una empresa dedicada a la industria de la construcción,
                            gestión y validación de proyectos. 
                            Iniciando nuestros proyectos desde la selección de las mejores ubicaciones,
                            cumpliendo con todos los estándares necesarios para la correcta construcción
                            del proyecto, contando con diseños y proyectos arquitectónicos innovadores siempre 
                            a la vanguardia, 
                            conformada por un equipo de profesionales enfocado a las necesidades de nuestros
                            clientes y en la calidad de nuestros servicios.
                        </p>
                        <div class="row">
                            <div class="col">
                            <h3 class="text-center fw-bolder">MISIÓN</h3>
                            <p class="lead fst-italic">
                                Ser la mejor opción en edificación del segmento habitacional, 
                                comercial, industrial e institucional, con los mejores tiempos
                                y costos del mercado, comprometidos con la calidad e inmersos
                                en un proceso de mejora continua.
                                </p>
                                
                            </div>
                            <div class="col">
                                <h3 class="text-center">VALORES</h3>
                                <p class="text-justify px-5" >
                                    <ul class="lead">
                                        <li >Compromiso</li>
                                        <li >Responsabilidad</li>
                                        <li >Honradez</li>
                                        <li >Buen ambiente laboral</li>
                                        <li >Trabajo en equipo</li>
                                        <li >Respeto</li>
                                    </ul>
                                </p> 
                            </div>
                        </div>
            </div>
    </div>
</div>
@endsection