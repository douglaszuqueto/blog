<style>
  .login-page {
    position: relative;
    opacity: 0.9;
    margin-top: 5%;
  }

  .login-header {
    margin-top: 3%;
  }

  .title {
    color: #009BC9;
  }

  .theme-color:hover {
    background-color: #ffffff;
    border: none;
    cursor: pointer;
  }

  .theme-color:focus {
    background-color: #ffffff;
    border: none;
    cursor: pointer;
  }
</style>
@extends('auth::layout')

@section('content')
  <div class="login">
    <div class="container">
      <div class="row login-page">
        <div class="col s12 m8 l6 offset-l3 offset-m2 card-panel">

          <!--Login Header-->
          <div class="login-header row">
            <div class="col s12 m12 l12 center">
              <h4 class="title">@douglaszuqueto</h4>
            </div>
          </div>

          <!--Login Form-->
          <div class="row">
            <div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1">
              <form method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="row">
                  <div class="input-field col s12">
                    <input type="email" name="email" required
                           tabindex="1" value="{{old('email')}}">
                    <label class="active">E-mail</label>
                  </div>
                  @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                  @endif
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input type="password" name="password" required
                           tabindex="2">
                    <label class="active">Password</label>
                  </div>
                  @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                  @endif
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input type="checkbox" id="remember" name="remember"/>
                    <label for="remember">Remember-me</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <button type="submit" class="btn green col s12" tabindex="4">Login</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
