<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="ENGERTEC">
        <meta name="keywords" content="energia solar, solar, energia">
        <meta name="author" content="Smart Net">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <title>ENGERTEC</title>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="{{url('/')}}">ENGERTEC</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="textoNavbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}"><i class="fas fa-home"></i>&nbsp;Home <span class="sr-only">(Página atual)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('funcionamento')}}"><i class="fas fa-tools"></i>&nbsp;Como funciona?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="far fa-clipboard"></i>&nbsp;Orçamento</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="{{url('sobrenos')}}"><i class="fas fa-users"></i>&nbsp;Sobre Nós</a>
            </li>
          </ul>
        </div>
      </nav>
      @yield('content')
      
      <footer class="bg-dark text-white text-center text-lg-start">
        <form action="{{route('newsletter')}}" method="GET">
          <div class="row newsletter content">
            <div class="col">
              <label class="label_newsletter">Deseja receber nosso newsletter?</label>
            </div>
            <div class="col">
              <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off">
            </div>
            <button class="btn btn-primary">INSCREVER</button>
            </div>
          </div>
        </form>
        <div class="container p-4">
          <div class="row">
            <div class="col">
              <ul class="list-unstyled mb-0 text-left">
                <li>
                  <i class="fas fa-map-marker-alt"></i>&nbsp;Rua São João 457, 
                  São josé - RECIFE/PE<br/>
                  CEP: 50.020-150
                </li>
                <li>
                  <i class="fas fa-envelope"></i>&nbsp;engertecpe@gmail.com
                </li>
                <li>
                  <i class="fas fa-phone-square"></i>&nbsp;(81) 981098833
                </li>
              </ul>
            </div>
            <div class="col">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.2877413338183!2d-34.885492039187255!3d-8.072106601337843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18b61426a5e3%3A0xeee2a5ba4d920e5!2zUi4gU8OjbyBKb8OjbywgNDU3IC0gU8OjbyBKb3PDqSwgUmVjaWZlIC0gUEUsIDU1MTUyLTAwNQ!5e0!3m2!1spt-PT!2sbr!4v1632280678520!5m2!1spt-PT!2sbr" width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
        <div >
          © Copyright 2021
          <a class="text-white">ENGERTEC All Rights Reserved.</a>
        </div>
      </footer>
      <script src="{{ asset('js/app.js') }}" defer></script>
      @if (Session::has('message'))
      <script type="text/javascript" >
          alert("Quase lá!"  +"\n"
          +"Enviamos-lhe um e-mail para finalizar sua inscrição." +"\n");
      </script>
      @endif
    </body>
</html>
