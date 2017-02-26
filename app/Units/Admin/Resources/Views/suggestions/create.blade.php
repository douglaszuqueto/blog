@extends('admin::layout')

@section('content')
    <div class="container">

        <h5>Cadastrar Sugestão</h5>

        <div class="row">
            <form class="col s12 l6 offset-l3" role="form" method="POST"
                  enctype="multipart/form-data" action="{{ route('admin.suggestions.store') }}">
                {{ csrf_field() }}

                <div class="row">
                    <div class="input-field col s12 l12">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" required>

                        @if ($errors->has('title'))
                            <strong>{{ $errors->first('title') }}</strong>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l12">
                        <textarea id="description" name="description" class="materialize-textarea" required></textarea>
                        <label for="description">Description</label>

                        @if ($errors->has('description'))
                            <strong>{{ $errors->first('description') }}</strong>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l12">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>

                        @if ($errors->has('name'))
                            <strong>{{ $errors->first('name') }}</strong>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l12">
                        <label for="email">Email</label>
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
        </div>
    </div>

@endsection