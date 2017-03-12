<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
  <a class="btn-floating btn-large blue">
    <i class="large material-icons">settings</i>
  </a>
  <ul>
    @foreach($btns as $btn)
      <li>
        <a href="{{$btn['href']}}" class="btn-floating {{$btn['color']}}">
          <i class="material-icons">{{$btn['icon']}}</i>
        </a>
      </li>
    @endforeach

  </ul>
</div>
