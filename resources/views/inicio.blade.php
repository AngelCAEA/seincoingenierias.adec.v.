@extends('layout')

@section('title','Inicio')

@section('content')
<div class="container">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner rounded">
      <div class="carousel-item active">
        <img src="/img/banner1.jpeg" class="d-block w-100" style="height : 700px; object-fit:cover">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="display-6 fw-bolder">NUESTROS SERVICIOS</h5>
          <p class="fs-5 fw-normal">Conoce nuestros servicios que tenemos para ti</p>
          <a class="btn btn-primary fst-italic">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
            Mas información...
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/banner2.jpeg" class="d-block w-100" style="height : 700px; object-fit:cover">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="display-6 fw-bolder">EMPRESA DE CONSTRUCCIÓN</h5>
          <p class="fs-5 fw-normal"> Ubicada en Asunción Nochixtlan Oaxaca conocenos mas</p>
          <a class="btn btn-primary fst-italic">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
            Mas información...
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/banner3.jpeg" class="d-block w-100" style="height : 700px; object-fit:cover">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="display-6 fw-bolder">CATALOGO</h5>
          <p class="fs-5 fw-normal">Conoce nuestros catalogo de productos que te ofrecemos para ti</p>
          <a class="btn btn-primary fst-italic">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
            Mas información...
          </a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="p-3 mt-4 bg-primary text-white shadow rounded">       
        <h1 class="text-center">Proyectos</h1>
        <hr>
        <div class="row row-cols-1 row-cols-md-2 text-dark">
          <div class="col mb-4">
            <div id="carouselExampleFade1" class="carousel slide carousel-fade bg-white rounded" data-bs-ride="carousel">
              <div class="carousel-inner rounded">
                <div class="carousel-item active">
                  <img src="/img/projects/const1.jpeg" class="d-block w-100" style="height : 400px; object-fit:cover">
                </div>
                <div class="carousel-item">
                  <img src="/img/projects/const2.jpeg" class="d-block w-100" style="height : 400px; object-fit:cover">
                </div>
                <div class="carousel-item">
                  <img src="/img/projects/const3.jpeg" class="d-block w-100" style="height : 400px; object-fit:cover">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade1" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
              
            </div>
          </div>

          <div class="col mb-4">  
            <div id="carouselExampleFade2" class="carousel slide carousel-fade bg-white rounded" data-bs-ride="carousel">
              <div class="carousel-inner rounded">
                <div class="carousel-item active">
                  <img src="/img/projects/panel1.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="/img/projects/panel2.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="/img/projects/panell3.jpeg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <img src="/img/projects/project2.jpeg" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <img src="/img/projects/project5.jpeg" class="card-img-top" alt="...">
            </div>
          </div>
          <div class="col mb-4">
            <div id="carouselExampleFade3" class="carousel slide carousel-fade bg-white rounded" data-bs-ride="carousel">
              <div class="carousel-inner rounded">
                <div class="carousel-item active">
                  <img src="/img/projects/casa1.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="/img/projects/casa2.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="/img/projects/casa3.jpeg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade3" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade3" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection