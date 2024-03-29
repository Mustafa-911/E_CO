@extends('Layout')
@section('T-Content', 'Create')
@section('Content')

    <div class="flex justify-center">

        <form action="/computers.store" method="POST">
            @csrf
            <div>

            </div>
            <label for="computer-Name">Computer Name</label>
            <input class="red" id="computer-Name" name="computer-Name" type="text">
            <div>
                <label for="computer-Origin">Computer Origin</label>
                <input id="computer-Origin" name="computer-Origin" type="text">
            </div>

            <div>
                <label for="computer-Price">Computer Price</label>
                <input id="computer-Price" name="computer-Price" type="text">
            </div>
            <div class="">
                <button type="submit">Submit</button>
            </div>
            <form>


    </div>
@endsection
