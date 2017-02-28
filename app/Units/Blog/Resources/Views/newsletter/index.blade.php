@extends('blog::layout')

@section('content')
  <div class="container">
    <div class="row">
      <section class="col s12 l6 offset-l3">
        <h5 class="center">
          Assine nossa Newsletter para ficar por dentro das novidades
        </h5>

        @if (session('message'))
          <div class="col s12">
            <p>{{ session('message') }}</p>
          </div>
        @endif

        <form class="col s12 m10 l12" method="POST" action="{{route('blog.newsletter.send')}}">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="row">
            <div class="input-field col s12 m6 l12">
              <input id="name" type="text" name="name" class="validate">
              <label for="name">Nome</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l12">
              <input id="email" type="email" name="email" class="validate" required>
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <input type="submit" value="Enviar" class="btn green right">
          </div>
        </form>
      </section>
    </div>
  </div>

@endsection