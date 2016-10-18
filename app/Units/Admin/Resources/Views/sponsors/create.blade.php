@extends('admin::layout')

@section('content')
    <div class="container">

        <h5>Cadastrar Patrocinador</h5>

        <div class="row">
            <form class="col s12 l6 offset-l3" role="form" method="POST" enctype="multipart/form-data" action="{{ route('admin.sponsors.store') }}">
                {{ csrf_field() }}

                <div class="row">
                    <div class="input-field col s12 l12">

                        <label for="sponsor">Patrocinador</label>

                        <input type="text" id="sponsor" name="sponsor" required>

                        @if ($errors->has('sponsor'))
                            <strong>{{ $errors->first('sponsor') }}</strong>
                        @endif

                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l12">

                        <label for="url">Url</label>

                        <input type="url" id="url" name="url" required>

                        @if ($errors->has('url'))
                            <strong>{{ $errors->first('url') }}</strong>
                        @endif

                    </div>
                </div>
                <div class="file-field input-field s12 l12">

                    <div class="btn btn-flat right">
                        <span>Imagem</span>
                        <input type="file" id="image" name="image">
                    </div>
                    <div class="file-path-wrapper">
                        <input type="text"  placeholder="Image">
                    </div>


                    @if ($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                    @endif

                </div>

                <div class="row">
                    <div class="input-field col s12 l12 ">
                        <button type="submit" class="waves-effect waves-light btn right">
                            <i class="material-icons right">cloud</i>Cadastrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection