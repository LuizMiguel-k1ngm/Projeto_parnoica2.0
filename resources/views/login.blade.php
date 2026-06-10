@extends('layout.top_bar')
@section('content')


<style>
  #error {
    justify-content: center;
    align-items: center;
    margin: 38%;
    border-radius: 20px;  
  }
#error2{
    justify-content: center;
    align-items: center;
    margin-top: 2%;
    margin-left: 40% ;
    margin-right: 40%;
    border-radius: 20px;
    
   

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
  {{-- invalid login --}}

  @if(session('loginError'))
    <div class="alert alert-danger text-center" id="error2">
      {{session('loginError')}}
    </div>
  @endif

  </form>

  <!-- {{-- invalid login --}}

  @if(session('loginError'))
    <div class="alert alert-danger text-center m-70" >
      {{session('loginError')}}
    </div>
  @endif -->

</div>


@endsection()