@extends('layouts.guest')
@section('content')
@include('components.nav')
<div class="flex justify-center items-center h-screen bg-slate-200">  
    <div class="">
        <div class="text-center px-6 md:px-12">
            <h1 class="title text-5xl font-bold mt-0 mb-6 text-cyan-700">Andres Elacion III</h1>
            <h3 class="title2 text-2xl font-light mb-8">“A Full Stack Web Developer specializes in developing and deploying responsive websites and web applications.”</h3>
            <button type="button"
                class="inline-block px-6 py-2.5 border-2 border-cyan-500 font-medium text-xs leading-tight uppercase rounded-xl hover:text-white hover:bg-cyan-500 focus:outline-none focus:ring-0">
                <a href="#">
                    get in touch
                </a>
            </button>
        </div>
    </div>
</div>

@include('components.about')
@include('components.project')
@include('components.skills')
@include('components.contact')
@endsection