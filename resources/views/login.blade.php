@extends('layout.main_layout')
@section('content')


<style>
  #error {
    justify-content: center;
    align-items: center;
    margin: 38%;
  }
</style>

<div>

  <form class=" mt-5 text-center" action="/loginSubmit" method="post">
    @csrf
    <div class="mb-2">
      <label for="text_login" class="form-label ">LOGIN</label><br>
      <input type="text" class="form-control-lg" name="text_login" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('text_login')}}">
      <div id="emailHelp" class="form-text text-info"></div>
      {{-- show error --}}
      @error('text_login')
      <div class="class text-danger">{{$message}}</div>
      @enderror


    </div>
    <div class="mb-3">
      <label for="text_password" class="form-label">SENHA</label><br>
      <input type="password" class="form-control-lg" name="text_password" id="exampleInputPassword1" value="{{old('text_password')}}">
      
      {{-- show error --}}
      @error('text_password')
      <div class="class text-danger">{{$message}}</div>
      @enderror

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>


  </form>

</div>


@endsection()