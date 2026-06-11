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
@if(session('user') && session('user')['cargo'] === 'ADM')
    @include('menu_adm')
@else
    @include('menu_funcionario')
@endif





</div>

@endsection