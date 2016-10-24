@extends('home::layout')

@section('content')
    <div class="container contact">
        <div class="row">
            <div class="col s12 l12">
                <h5>Formulário de Contato</h5>

                <form class="col s12 m10 l8" method="POST" action="{{route('blog.contact.send')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <input id="icon_prefix" type="text" name="name" class="validate">
                            <label for="icon_prefix">Nome</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input id="icon_telephone" type="email" name="email" class="validate">
                            <label for="icon_telephone">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="icon_prefix" type="text" name="subject" class="validate">
                            <label for="icon_prefix">Assunto</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
                            <label for="textarea1">Mensagem</label>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Enviar" class="btn green right">
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection