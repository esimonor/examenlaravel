@extends('layouts.app')

@section('title', 'UD5. ORM Eloquent')

@section('content')

<h1>Insertar tienda</h1>
<form action="addshop" method="GET">
@csrf
    <input type="number" placeholder="id">
    <input type="text" placeholder="nombre">
    <input type="text" placeholder="descripcion">
    <input type="password" placeholder="contraseña">
    <input type="email" placeholder="correo">
    <input type="number" placeholder="likes">
    <input type="submit" value="añadir tienda">
    </form>
@endsection
