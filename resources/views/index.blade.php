@extends('layout')
@section('content')
 <div class="jumbotron">
 <p class="h1 text-center py-4"> Vem conhecer o luan </p >
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Apenas para amantes da lenda!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
 </div>
 <div class="container py-4" >
 <div class="row" >
 <div class="col-md-6">
 <p class=" h1 text-center"> Lado esquerdo da tela </p >
 </div >
 <div class="col-md-6">
 <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('storage/imagem/Luan-Santana-plagio-Morena.webp')}}" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('storage/imagem/luan-santana-fortuna-divulgada.jpeg')}} alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('storage/imagem/luan-santana-fortuna-divulgada.jpeg')}} alt="Terceiro Slide">
    </div>
  </div>
  
</div>
</div>
<div class ="col-md-6 ">
 <a class =" btn btn - primary" href =" {{ route ( 'pagina2') }} ">
Link para página 2 </a > 
</div>
 </div>
 </div>
 @endsection