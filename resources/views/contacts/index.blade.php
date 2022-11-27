@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="text col-md-6 mt-5">
                <h3 class="mb-3">Contact Book</h3>
                <p> <strong>CRUD project developed with the laravel framework in order to review knowledge.</strong>
                    <br>
                    The application lets you add, delete, edit and view each contact.
                    When creating and editing a contact, the <strong>zip code automatically completes the address data for
                        you.</strong>
                    When creating a contact, I receive an email with the data entered in the form directly in my mailbox
                    using <strong>Laravel's SMTP.</strong>
                </p>
                <a href="{{ route('contacts') }}"><button class="btn btn-success">Start</button></a>
            </div>
            <div class="col-md-6">
                <img src="{{ url('img/photohome.png') }}" class="rounded float-end img-fluid" alt="Foto Home - Ilustração UI">
            </div>
        </div>
    </div>
@endsection
