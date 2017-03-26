@extends('admin::layout')

<style>
  .dashboard .card-panel {
    height: 120px;
  }

  .artigos .row {
    margin-bottom: 5px;
  }

  .article-title {
    margin-top: -20px;
    margin-bottom: -10px;
  }
</style>

@section('content')
  <div class="container dashboard">
    <div class="row">
      <div class="col s12 m4 l4">
        <div class="card-panel" style="height: 200px">
          <div class="row">
            <div class="col l12 article-title">
              <h5 class="center-align">Artigos</h5>
            </div>
          </div>
          <div class="col l12 artigos">
            <div class="row">
              <div class="col l3">
                <i class="material-icons green-text">edit</i>
              </div>
              <div class="col l5">
                <h6 class="left-align">Pendentes</h6>
              </div>
              <div class="col l4">
                <h6 class="left-align">{{$articles['pending']}}</h6>
              </div>
            </div>

            <div class="row">
              <div class="col l3">
                <i class="material-icons green-text">edit</i>
              </div>
              <div class="col l5">
                <h6 class="left-align">Previews</h6>
              </div>
              <div class="col l4">
                <h6 class="left-align">{{$articles['preview']}}</h6>
              </div>
            </div>

            <div class="row">
              <div class="col l3">
                <i class="material-icons green-text">edit</i>
              </div>
              <div class="col l5">
                <h6 class="left-align">Agendados</h6>
              </div>
              <div class="col l4">
                <h6 class="left-align">{{$articles['scheduled']}}</h6>
              </div>
            </div>

            <div class="row">
              <div class="col l3">
                <i class="material-icons green-text">edit</i>
              </div>
              <div class="col l5">
                <h6 class="left-align">Publicados</h6>
              </div>
              <div class="col l4">
                <h6 class="left-align">{{$articles['published']}}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m4 l3">
        <div class="card-panel ">
          <p class="center-align" style="margin-top: -20px">
            <a href="{{route('admin.contact.index')}}">
              <i class="material-icons medium green-text" title="Caixa de Entrada">email</i>
            </a>
          </p>
          <h4 class="center-align">{{$contacts}}</h4>
        </div>
      </div>
      <div class="col s12 m4 l3">
        <div class="card-panel ">
          <p class="center-align" style="margin-top: -20px">
            <a href="{{route('admin.suggestions.index')}}">
              <i class="material-icons medium blue-text" title="Sugestões">speaker_notes</i>
            </a>
          </p>
          <h4 class="center-align">{{$suggestions}}</h4>
        </div>
      </div>
      <div class="col s12 m4 l3">
        <div class="card-panel ">
          <p class="center-align" style="margin-top: -20px">
            <a href="{{route('admin.subscribers.index')}}">
              <i class="material-icons medium yellow-text" title="Newsletter">person_pin</i>
            </a>
          </p>
          <h4 class="center-align">{{$subscribers}}</h4>
        </div>
      </div>
    </div>
  </div>

@endsection
