@extends("layouts.app")

@section("title","Login")

@section("content")
  <div class="container">
    <div class="box-container">
      <div class="input">
        <i class="icon-envelope ic-one"></i>
        <input type="email" placeholder="Digite o seu e-mail para pesquisar" class="search">
      </div>
      <button class="btn-s">Pesquisar</button>
      <div class="container-btn">
        <div class="redes">
          <a href="#"><img src="{{asset('./icons/Facebook.svg')}}"></a>
          <a href="#"><img src="{{asset('./icons/apple.svg')}}"></a>
          <a href="#"><img src="{{asset('./icons/google.svg')}}"></a>
        </div>
      </div>
    </div>
  </div>
@endsection