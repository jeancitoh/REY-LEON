@extends('layouts.app')
<!--- Titulo de la vista --->
@section('titulo')
@endsection
<!--- Contenido del frame --->
@section('contenido')
<div class="py-6 " >
    @foreach($actividades as $actividad) 
    <form action="{{route('posts.verPubli',[$actividad->id])}}" method="get" novalidate>
    <span>{{ $actividad->titulo }}</span>
    
    <img src="<?php echo $actividad->imagen ?>" />
    <span>{{ $actividad->descripcion }}</span>
    <button type="submit" class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Ver publicacion</button>
    </form>
   @endforeach
</div>
@endsection