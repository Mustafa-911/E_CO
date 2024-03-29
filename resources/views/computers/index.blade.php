@extends('Layout')
@section('T-Content' , 'index')

@section('Content')

<div class="max-w-6xl ma-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8">
        <h1>Computers</h1>
    </div>
    <div class="mt-8">
        <p>{{ $com_name }}</p>
    </div>
</div>

@endsection
