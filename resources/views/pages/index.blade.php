@extends("layouts.app")

@section("title","Login")

@section("content")
  <div class="box">
    <div class="container-left">
      <h1 class="logo">LOGO</h1>
    </div>
    <div class="container-right">
      <div class="container-form">
        <h1>Entrar</h1>
        <h2>Se você não tem uma conta cadastre-se<br>
          Você pode <span class="marca">Registrar-se</span> aqui!</h2>

        <div class="content-form">
          <h4>E-mail</h4>
          <div class="input">
            <i class="icon-envelope ic-one"></i>
            <input type="email" placeholder="Digite seu endereço de e-mail" class="input-camp">
          </div>
          <h4 class="title-4">Senha</h4>

          <div class="input">
            <i class="icon-lock ic-one"></i>
            <input type="email" placeholder="Coloque sua senha" class="input-camp">
          </div>

          <div class="container-bottom">
            <div class="cb">
              <input type="checkbox" id="che">
              <label for="che">Lembre de mim</label>
            </div>
            <p><a href="{{ route("pages.forgot") }}" class="marca">Esqueceu sua senha?</a></p>
          </div>

          <div class="container-btn">
            <button class="btn">Entrar</button>
            <p>Ou continuar com</p>
            <div class="redes">
              <a href="#"><img src="{{asset('./icons/Facebook.svg')}}"></a>
              <a href="#"><img src="{{asset('./icons/apple.svg')}}"></a>
              <a href="#"><img src="{{asset('./icons/google.svg')}}"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection