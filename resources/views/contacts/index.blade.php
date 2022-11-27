@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="text col-md-6 mt-5">
                <h3>Contact Book Management</h3>
                <p>CRUD project developed with the laravel framework in order to review knowledge. <br>
                    application allows you to enter, change and delete contacts, as well as, of course, list them.</p>
                <a href="{{ route('contacts') }}"><button class="btn btn-success">Start</button></a>
            </div>
            <div class="col-md-6">
                <img src="{{ url('img/photohome.png') }}" class="rounded float-end img-fluid" alt="Foto Home - Ilustração UI">
            </div>
        </div>
    </div>
@endsection
