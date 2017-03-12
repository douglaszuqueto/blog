@extends('blog::layout')

@section('content')
  <div class="container contact">
    <div class="row">
      <section class="col s12 l6 offset-l3 contact-item">
        <h5 class="center">
          Alguma dúvida, reclamação ou sugestão? Entre já em contato conosco :P
        </h5>

        @if (session('message'))
          <div class="col s12">
            <p>{{ session('message') }}</p>
          </div>
        @endif

        <form class="col s12 m10 l12" method="POST" action="{{route('blog.contact.send')}}">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <input id="name" type="text" name="name" class="validate" required>
              <label for="name">Nome</label>
            </div>
            <div class="input-field col s12 m6 l6">
              <input id="email" type="email" name="email" class="validate" required>
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="subject" type="text" name="subject" class="validate" required>
              <label for="subject">Assunto</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
                            <textarea id="message" name="message" class="materialize-textarea validate"
                                      required></textarea>
              <label for="message">Mensagem</label>
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
