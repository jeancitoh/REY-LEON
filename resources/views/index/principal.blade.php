@extends('layouts.app')
<!--En este section se agrega una propocion para el titulo asignado-->
@section('titulo')
@endsection
<!--En este section se agrega un contenido para la descripcion de la plataforma-->
@section('contenido')
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

    <!--article u slider para las imagenes del establecimiento en forma de carrucel-->
    
    <article x-data="slider" class="relative w-full flex flex-shrink-0 overflow-hidden shadow-2xl ">
        <div class="rounded-full bg-gray-600 text-white absolute top-5 right-5 text-sm px-2 text-center z-10">
            <span x-text="currentIndex"></span>/
            <span x-text="images.length"></span>
        </div>
        <template x-for="(image, index) in images">
            <figure class="h-96" x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0">
                <img :src="image" alt="Image"
                    class="absolute inset-0 z-10 h-full w-full object-cover opacity-70" />
                <figcaption
                    class="absolute inset-x-0 bottom-1 z-10 w-96 mx-auto p-4 font-light text-sm text-center tracking-widest leading-snug bg-gray-300 bg-opacity-25">
                    Any kind of content here!
                    Primum in nostrane potestate est, quid meminerimus? Nulla erit controversia. Vestri haec verecundius,
                    illi fortasse constantius.
                </figcaption>
            </figure>
        </template>
        <!--Boton para pasar a la imagen anterior del slider u imagen-->
        <button @click="back()"
            class="absolute left-14 top-1/2 -translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
            <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:-translate-x-0.5"
                fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7">
                </path>
            </svg>
        </button>
        <!--Boton para pasar al siguiente slider u imagen-->
        <button @click="next()"
            class="absolute right-14 top-1/2 translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
            <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:translate-x-0.5"
                fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </article>

    <!--Formulario para ingresar descripcion de la empresa donde se esoecifican algunos caracteres-->
    <div class="px-3 md:lg:xl:px-40   border-t border-b py-20 bg-opacity-10">
        <div class="grid grid-cols-1 md:lg:xl:grid-cols-3 group bg-white shadow-xl shadow-neutral-100 border ">
            <div
                class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                <span class="p-5 rounded-full bg-red-500 text-white shadow-lg shadow-red-200"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg></span>
                <!--Descripcion educadoras capacitadas-->
                <p class="text-xl font-medium text-slate-700 mt-3">Educadoras capacitadas</p>
                <p class="mt-2 text-sm text-slate-500">Educadoras con la mejor disponibilidad y atención para los pupilos del establecimiento.</p>
            </div>
            <div
                class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                <span class="p-5 rounded-full bg-orange-500 text-white shadow-lg shadow-orange-200"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg></span>
                <!--Descripcion tareas y actividades-->
                <p class="text-xl font-medium text-slate-700 mt-3">Tareas y actividades</p>
                <p class="mt-2 text-sm text-slate-500">El establecimiento participa y desarrolla actividades relacionadas con la cultura y bailes chilenos.</p>
            </div>
            <div
                class="p-10 flex flex-col items-center text-center group   md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                <span class="p-5 rounded-full bg-yellow-500 text-white shadow-lg shadow-yellow-200"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg></span>
                <!--Descripcion horarios-->
                <p class="text-xl font-medium text-slate-700 mt-3">Horarios</p>
                <p class="mt-2 text-sm text-slate-500">Existen dos tipos de horarios para llevar al alumno, así estimando conveniente.</p>
            </div>
            <div
                class="p-10 flex flex-col items-center text-center group   md:lg:xl:border-r hover:bg-slate-50 cursor-pointer">
                <span class="p-5 rounded-full bg-lime-500 text-white shadow-lg shadow-lime-200"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg></span>
                <!--Descripcion establecimiento destacado-->
                <p class="text-xl font-medium text-slate-700 mt-3">Establecimiento destacado</p>
                <p class="mt-2 text-sm text-slate-500">El establecimiento es totalmente reconocido dentro de la ciudad, ya que está ubicado en una zona de fácil acceso para los apoderados.</p>
            </div>
            <div
                class="p-10 flex flex-col items-center text-center group    md:lg:xl:border-r hover:bg-slate-50 cursor-pointer">
                <span class="p-5 rounded-full bg-teal-500 text-white shadow-lg shadow-teal-200"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg></span>
                <!--Descripcion calidad de enseñansa-->
                <p class="text-xl font-medium text-slate-700 mt-3">Calidad de enseñanza</p>
                <p class="mt-2 text-sm text-slate-500">El establecimiento es reconocido por la enseñanza que se le entrega a sus alumnos</p>
            </div>
            <div class="p-10 flex flex-col items-center text-center group     hover:bg-slate-50 cursor-pointer">
                <span class="p-5 rounded-full bg-indigo-500 text-white shadow-lg shadow-indigo-200"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg></span>
                <!--Descripcion protocolos de seguridad-->
                <p class="text-xl font-medium text-slate-700 mt-3">Protocolos de seguridad</p>
                <p class="mt-2 text-sm text-slate-500">Adquiere procesos y protocolos de seguridad para las medidaspreventivas de los alumnos y la pandemia covid-19</p>
            </div>
        </div>
        <!--Boton para consultas del usuario redirige a al apartado de ubicacion-->
        <div class="w-full   dark:bg-gray-900 shadow-xl shadow-indigo-200 py-10 px-20 flex justify-between items-center">
            <p class=" text-white"> <span class="text-4xl font-medium">¿Tienes consultas?</span> <br> <span
                    class="text-lg">¡Estamos disponibles para ti! </span></p>
            <button
                class="px-5 py-3  font-medium text-slate-700 shadow-xl  hover:bg-white duration-150  bg-yellow-400">Contáctanos en nuestro establecimiento </button>
        </div>
    </div>

    <!--Section completa de la descripcion del establecimiento-->
    <section>
        <div class="container flex flex-col items-center px-4 py-12 mx-auto xl:flex-row">
            <div class="flex justify-center xl:w-1/2">
                <img class="h-80 w-80 sm:w-[28rem] sm:h-[28rem] flex-shrink-0 object-cover rounded-full"
                    src="{{ asset('img/Captura.PNG') }}" alt="">
            </div>
            <!--Titulo del apartado-->
            <div class="flex flex-col items-center mt-6 xl:items-start xl:w-1/2 xl:mt-0 text-black">
                <h2 class="text-3xl font-bold tracking-tight text-gray-800 xl:text-4xl ">
                    Establecimiento
                </h2>
                <!--Descripcion del establecimiento-->
                <p class="block max-w-2xl mt-4 text-xl text-gray-500"> “KING LION´S SCHOOL” es una escuela de párvulo de
                    carácter particular-subvencionado, fue reconocido por el ministerio de educación bajo el decreto 261 en
                    el año 1997, lleva 23 años de servicios al servicio de la comunidad. </p>
            </div>
        </div>
    </section>

    <!--Section completa de la descripcion del compromiso-->
    <section>
        <div class="container flex flex-col items-center px-4 py-12 mx-auto xl:flex-row">
            <!--Titulo del apartado descripcion-->
            <div class="flex flex-col items-center mt-6 xl:items-start xl:w-1/2 xl:mt-0 text-black">
                <h2 class="text-3xl font-bold tracking-tight text-gray-800 xl:text-4xl ">
                    Compromiso
                </h2>
                <!--Descripcion del establecimiento-->
                <p class="block max-w-2xl mt-4 text-xl text-gray-500"> El establecimiento se basa en entregar un servicio
                    educativo de calidad a niños de la Provincia “El Loa”, a través de un mejoramiento permanente de la
                    gestión educativa mediante el currículo integral; para ello cuentan con un personal idóneo centrado en
                    la diversidad de los niños y niñas y la cultura de alta expectativa, en su desarrollo equilibrado y
                    armónico en sus ámbitos de aprendizaje, formando a individuos íntegro, capaz de enfrentar su mundo y a
                    sí mismo. </p>
            </div>
            <div class="flex justify-center xl:w-1/2">
                <img class="h-80 w-80 sm:w-[28rem] sm:h-[28rem] flex-shrink-0 object-cover rounded-full"
                    src="{{ asset('img/Rey leon antiguo fuera.jpg') }}" alt="">
            </div>
        </div>
    </section>

    <!--Section completa de la descripcion del compromiso-->
    <section>
        <div class="container flex flex-col items-center px-4 py-12 mx-auto xl:flex-row">
            <div class="flex justify-center xl:w-1/2">
                <img class="h-80 w-80 sm:w-[28rem] sm:h-[28rem] flex-shrink-0 object-cover rounded-full"
                    src="{{ asset('img/Rey leon niños.jpg') }}" alt="">
            </div>
            <!--Titulo del apartado descripcion-->
            <div class="flex flex-col items-center mt-6 xl:items-start xl:w-1/2 xl:mt-0 text-black">
                <h2 class="text-3xl font-bold tracking-tight text-gray-800 xl:text-4xl ">
                    Recursos
                </h2>
                <!--Descripcion del establecimiento-->
                <p class="block max-w-2xl mt-4 text-xl text-gray-500">El establecimiento se basa en entregar un servicio
                    educativo de calidad a niños de la Provincia “El Loa”, a través de un mejoramiento permanente de la
                    gestión educativa mediante el currículo integral; para ello cuentan con un personal idóneo centrado en
                    la diversidad de los niños y la cultura de alta expectativa, en su desarrollo equilibrado y armónico en
                    sus ámbitos de aprendizaje, formando a individuos íntegro, capaz de enfrentar su mundo y a sí mismo.</p>
            </div>
        </div>
    </section>

    <!--Section de actividades parte inteferior del contenido-->
    <section class="text-gray-600 ">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex -m-1">
                <div class="p-0 md:w1/0">
                    <div
                        class="h-full rounded-xl shadow-cla-blue bg-gradient-to-r from-indigo-50 to-blue-50 overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100"
                            src="{{ asset('img/Rey leon niños 3.jpg') }}" alt="blog">
                        <div class="p-6">
                            <!--Actividades inferiores de la plataforma-->
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Actividad de
                                teatro</h2>
                            <!--Descripcion de la actividad-->
                            <h1 class="title-font text-lg font-medium text-gray-600 mb-3">Teatro y enseñanza infantil</h1>
                            <p class="leading-relaxed mb-3">A los pupilos se les enseñó sobre el teatro nacional, además de mostrarle una serie de actos dentro del establecimiento.</p>
                            <div class="flex items-center flex-wrap ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-0/1">
                    <div
                        class="h-full rounded-xl shadow-cla-violate bg-gradient-to-r from-pink-50 to-red-50 overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100"
                            src="{{ asset('img/Rey leon niños 3.jpg') }}" alt="blog">
                        <div class="p-6">
                            <!--Actividades inferiores de la plataforma-->
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Actividades</h2>
                            <!--Descripcion de la actividad-->
                            <h1 class="title-font text-lg font-medium text-gray-600 mb-3">Actividades de canto, entre otros</h1>
                            <p class="leading-relaxed mb-3">Los pupilos cantaron y realizaron diferente tipo de actividades como jugar a las escondidas en otras actividades.</p>
                            <div class="flex items-center flex-wrap ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<!--Scrip para la funcion del carusel-->
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('slider', () => ({
            currentIndex: 1,
            images: [
                'https://source.unsplash.com/1600x900/?beach',
                'https://source.unsplash.com/1600x900/?cat',
                'https://source.unsplash.com/1600x900/?dog',
                'https://source.unsplash.com/1600x900/?lego',
                'https://source.unsplash.com/1600x900/?textures&patterns'
            ],
            //Comando para volver a la imagen anterior
            back() {
                if (this.currentIndex > 1) {
                    this.currentIndex = this.currentIndex - 1;
                }
            },
            //Comando para proceder a la pagina siguiente
            next() {
                if (this.currentIndex < this.images.length) {
                    this.currentIndex = this.currentIndex + 1;
                } else if (this.currentIndex <= this.images.length) {
                    this.currentIndex = this.images.length - this.currentIndex + 1
                }
            },
        }))
    })
</script>