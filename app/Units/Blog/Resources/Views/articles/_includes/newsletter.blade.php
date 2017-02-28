<form action="{{route('blog.newsletter.send')}}" method="POST">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="input-field">
    <input id="name" type="text" name="name" class="validate">
    <label for="name">Nome</label>
  </div>
  <div class="input-field">
    <input id="email" type="email" name="email" class="validate" required>
    <label for="email">Email</label>
  </div>
  <div class="input-field">
    <button class="waves-effect waves-teal btn-flat right" type="submit" name="action">
      Cadastrar email
      <i class="material-icons right">send</i>
    </button>
  </div>
</form>

