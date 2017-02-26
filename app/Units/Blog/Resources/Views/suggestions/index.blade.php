@extends('blog::layout')

@section('content')
  <div class="container contact">
    <div class="row">
      <section class="col s12 l6 offset-l3 contact-item">
        <h5 class="center">
          Fábrica de Artigos: Deixe uma sugestão
        </h5>

        @if (session('message'))
          <div class="col s12">
            <p>{{ session('message') }}</p>
          </div>
        @endif

        <form class="col s12 m10 l12" method="POST" action="{{route('blog.suggestions.send')}}">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="row">
            <div class="input-field col s12 l12">
              <label for="title">Título</label>
              <input type="text" id="title" name="title" required>

              @if ($errors->has('title'))
                <strong>{{ $errors->first('title') }}</strong>
              @endif
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12 l12">
                            <textarea id="description" name="description" class="materialize-textarea"
                                      required></textarea>
              <label for="description">Descrição</label>

              @if ($errors->has('description'))
                <strong>{{ $errors->first('description') }}</strong>
              @endif
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12 l12">
              <label for="name">Seu nome</label>
              <input type="text" id="name" name="name" required>

              @if ($errors->has('name'))
                <strong>{{ $errors->first('name') }}</strong>
              @endif
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12 l12">
              <label for="email">Seu email</label>
              <input type="email" id="email" name="email">

              @if ($errors->has('email'))
                <strong>{{ $errors->first('email') }}</strong>
              @endif
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12 l12 ">
              <button type="submit" class="waves-effect waves-light btn right green">
                <i class="material-icons right">cloud</i>Cadastrar
              </button>
            </div>
          </div>
        </form>
      </section>
    </div>

  </div>

@endsection