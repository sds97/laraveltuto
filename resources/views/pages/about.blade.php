@extends('layouts/app', ['title' => 'About Us'])

{{-- @section('title', 'About Us | '. config('app.name')) --}}

@section('content')
	<img src="{{ asset('/images/sds.png') }}" alt="my photo" class="rounded-full my-12 shadow-md">
    <h2 class="text-gray-700 mb-5">
    	Built with <span class="text-pink-500">&hearts;</span> by Souleymane Dieng Sall.
    </h2>
    <p>
    	<a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">
    		Revenir à la page d'accueil
    	</a>
    </p>
@endsection