@extends('home')

@section('titulodirectora')
      
@endsection    

@section('contenidodirectora')
<div class="w-full bg-grey-lightest" style="padding-top: 4rem;">
    <div class="container mx-auto py-8 flex">
        <div class="w-5/6 lg:w-1/2 mx-auto bg-white rounded shadow">
            <div class="py-4 px-8 text-black text-2xl border-b border-grey-lighter font-bold ">Información Personal</div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Rut</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $alumnos->rut }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Número de Documento</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $alumnos->nro_documento }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p class="focus:outline-none text-xs text-gray-500">Nombre Completo</p>
                        <p class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $alumnos->nombre }} {{ $alumnos->ap_paterno }} {{ $alumnos->ap_materno }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Fecha de Nacimiento</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $alumnos->fecha_nac }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Ciudad de Nacimiento</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $alumnos->ciudad_nac }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Dirección</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $alumnos->domicilio }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Edad</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $alumnos->edad }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Curso</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $alumnos->cursos->nombre }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Discapacidad</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $alumnos->discapacidad }}</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="py-4 px-8 text-black text-2xl border-b border-grey-lighter font-bold ">Información de Emergencia</div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Nombre de Emergencia</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $alumnos->nombre_emergencia }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Teléfono de Emergencia</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $alumnos->fono_emergencia }}</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="py-4 px-8 text-black text-2xl border-b border-grey-lighter font-bold ">Información Personal del Apoderado</div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Rut</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $alumnos->apoderados->rut }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Nombre Completo</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $alumnos->apoderados->nombre }} {{ $alumnos->apoderados->ap_paterno }} {{ $alumnos->apoderados->ap_materno }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Teléfono</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $alumnos->apoderados->fono }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Correo Electrónico</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $alumnos->apoderados->correo }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Profesión Laboral</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $alumnos->apoderados->profesion_laboral }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Situación Laboral</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $alumnos->apoderados->situacion_laboral }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Grado de Estudio</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $alumnos->apoderados->grado_estudio }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Tipo de Salud</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $alumnos->apoderados->tipo_salud }}</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="flex items-center border-b border-gray-200 dark:border-gray-700  justify-between px-6 py-3">
            <p tabindex="0" class="focus:outline-none text-2xl leading-tight text-gray-800 dark:text-white "></p>
            <button class="focus:outline-none focus:ring-2 flex cursor-pointer items-center justify-center px-3 py-2.5 border rounded border-green-500 text-black transition duration-300 hover:bg-green-500 hover:text-white">
                <a href="{{ route ('alumno.edit', $alumnos) }}"><p class="focus:outline-none text-1xl md:text-sm leading-none border-green-500 text-black transition duration-300 hover:bg-green-500 hover:text-white ">Modificar Alumno</p></a>
            </button>
        </div>  
        </div>
    </div>
</div>
@endsection 
