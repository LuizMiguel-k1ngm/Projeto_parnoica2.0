@extends('layout.main_layout')
@section('content')

<style>
    select {
        margin-top: 10px;
    }

    #offcanvasExample {
        background-color: #002b51;
        color: white;
    }
</style>

<!-- // construir a home page -->
<div class="container">



@include('menu_adm');



</div>

@endsection