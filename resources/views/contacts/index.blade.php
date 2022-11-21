@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="text">
                <h3>Contact Book</h3>
                <p>CRUD project developed with the Laravel framework, with the aim of enriching learning. <br>
                    application allows you to enter, change and delete contacts, as well as, of course, list them.</p>
                <a href="{{ route('contacts') }}"><button class="btn btn-success">Start</button></a>
            </div>

            <div class="photo">
                <img src="{{ url('img/photohome.png') }}" class="rounded float-right img-fluid" alt="Foto Home - Ilustração UI">
            </div>
        </div>
    </div>
@endsection
