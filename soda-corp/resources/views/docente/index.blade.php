@extends('layout.plantilla')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('titulo', 'Registrar')

@section('contenido')
<div id="divcont2">
    <div class="divbtn">
        <div class='divicon'>
            <i class="fas fa-user"></i>
            <p>Registro Individual</p>
        </div>
        <a href="{{ asset('docente/registrarestudiante') }}">
        <button type="submit" class="btnOpc1">
            <p>Ver más</p>
        </button>
        </a>
    </div>

    <div class="divbtn">
        <div class='divicon'>
            <i class="fas fa-users"></i>
            <p>Registro por planilla</p>
        </div>
        <a href="{{ asset('docente/registrarplanilla') }}">
        <button type="submit" class="btnOpc1">
            <p>Ver más</p>
        </button>
        </a>
    </div>

    <div class="divbtn">
        <div class='divicon'>
            <i class="fas fa-list"></i>
            <p>Ver grupos</p>
        </div>
        <a href="">
        <button type="submit" class="btnOpc1">
            <p>Ver más</p>
        </button>
        </a>
    </div>
</div>

@endsection