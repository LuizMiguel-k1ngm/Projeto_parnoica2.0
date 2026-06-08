@extends('layout.main_layout')
@section('content')



<div>

  <form class=" mt-5 text-center" action="/loginSubmit" method="post">
  @csrf
    <div class="mb-2">
      <label for="text_login" class="form-label ">LOGIN</label><br>
      <input type="text" class="form-control-lg" name="text_login" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text text-info"></div>
    </div>
    <div class="mb-3">
      <label for="text_password" class="form-label">SENHA</label><br>
      <input type="password" class="form-control-lg" name="text_password" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>


@endsection()