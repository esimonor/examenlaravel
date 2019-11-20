@extends('layouts.app')

@section('title', 'UD5. ORM Eloquent')

@section('content')

<h1>Insertar tienda</h1>
<form action="addshop" method="GET">
@csrf
    <input type="number" id="id" placeholder="id">
    <input type="text" id="nombre" placeholder="nombre">
    <input type="text" id="descripcion" placeholder="descripcion">
    <input type="password" id="contraseña" placeholder="contraseña">
    <input type="email" id="correo" placeholder="correo">
    <input type="number" id="likes" placeholder="likes">
    <br>
    <input type="submit" value="añadir tienda">
    </form>
@endsection
