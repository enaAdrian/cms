@if (Session::has('success'))

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading"></h4>
  <p>Sukces!!!</p> {{Session::get('success')}}
  <p class="mb-0">cos wiecej</p>
</div>

@endif

{{--  @if(count($errors) >0)

<div class="alert alert-primary|secondary|success|info|warning|danger|light|dark alert-dismissible fade in" role="alert">
  <strong>Kurka wodna!</strong> Nie poprawnie uzupelnione dane
  <ul>
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
  </ul>
</div>

@endif  --}}