@extends('layouts.layout')
@section('content')
    <div class="container-fluid">

        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Contacts Book</h2>
                </div>
                <div class="card-body">
                    <a href="{{ route('contacts.create') }}" class="btn btn-success text-center" title="Add New Student">
                        <i class="fas fa-plus-circle"></i> New Contact
                    </a>
                    <div class="table-responsive">
                        @if (count($contacts) > 0)
                            @if (session('message'))
                                <div class="alert alert-success p-3 mt-3">{{ session('message') }}</div>
                            @endif
                            @if (session('deleted'))
                                <div class="alert alert-danger p-3 mt-6 mb-6">{{ session('deleted') }}</div>
                            @endif
                            @if (session('updated'))
                                <div class="alert alert-success p-3 mt-3">{{ session('updated') }}</div>
                            @endif
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Number</th>
                                        <th>Address</th>
                                        <th>Neighborhood</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Postcode</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <td>{{ $contact->id }}</td>
                                            <td>{{ $contact->name_contact }}</td>
                                            <td>{{ $contact->email_contact }}</td>
                                            <td>{{ $contact->phone_contact }}</td>
                                            <td>{{ $contact->number }}</td>
                                            <td>{{ $contact->address }}</td>
                                            <td>{{ $contact->neighborhood }}</td>
                                            <td>{{ $contact->city }}</td>
                                            <td>{{ $contact->state }}</td>
                                            <td>{{ $contact->postcode }}</td>
                                            <td style="width:150px;">
                                                <a href="{{ route('contacts.edit', $contact->id) }}"
                                                    title="Edit Student"><button style="height:50px;width:60px;"
                                                        class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i>
                                                        <br>Edit</button></a>
                                                <form method="POST" action="{{ route('contacts.delete', $contact->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <button style="height:50px;width:60px;" type="submit"
                                                        class="btn btn-danger btn-sm" title="Delete Student"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i>
                                                        Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-warning mt-3">
                                <strong>Sorry!</strong> No Contacts Found.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
