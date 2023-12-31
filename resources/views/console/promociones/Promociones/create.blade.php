@extends('layouts.console')

@section('title', 'Promociones')

@section('content')
    <h1>Creación de Promociones</h1>

    <form method="post" action="/consola/promociones">
        @csrf

        <input type="radio" id="indefinida" name="seleccion" value="indefinida">Indefinida
        <input type="radio" id="tiempoLimitado" name="seleccion" value="limitada">Por Tiempo Limitado

        <input type="date" id="fecha_inicio" name="fecha_inicio" placeholder="Fecha Inicio">
        <input type="date" id="fecha_fin" name="fecha_fin" placeholder="Fecha Fin">

        <select id="id_tipo_promocion" name="id_tipo_promocion">
            @foreach ($tiposPromociones as $tipoPromocion)
                <option value="{{ $tipoPromocion -> id }}">{{ $tipoPromocion -> nombre }}</option>
            @endforeach
        </select>

        <select id="id_producto" name="id_producto">
            @foreach ($productos as $producto)
                <option value="{{ $producto -> id }}">{{ $producto -> nombre }}</option>
            @endforeach
        </select>

        @component('components.console.img')
                @slot('label') Fotografia @endslot
                @slot('name') fotografia @endslot
                @slot('value') {{ Session::get('fotografia', '') }} @endslot
                @slot('required') Required @endslot
            @endcomponent

        <input type="submit" value="Crear">
    </form>
@endsection
