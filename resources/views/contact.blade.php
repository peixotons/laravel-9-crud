@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Contacts Book</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('contacts.create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> New Contact
                        </a>
                        <br />
                        <div class="table-responsive">
                            @if (count($contacts) > 0)
                                @if (session('message'))
                                    <div class="alert alert-success p-3 mt-3">{{ session('message') }}</div>
                                @endif
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Number</th>
                                            <th>Address</th>
                                            <th>Neighborhood</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Postcode</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts as $contact)
                                            <tr>
                                                <td>{{ $contact->name_contact }}</td>
                                                <td>{{ $contact->email_contact }}</td>
                                                <td>{{ $contact->phone_contact }}</td>
                                                <td>{{ $contact->number }}</td>
                                                <td>{{ $contact->address }}</td>
                                                <td>{{ $contact->neighborhood }}</td>
                                                <td>{{ $contact->city }}</td>
                                                <td>{{ $contact->state }}</td>
                                                <td>{{ $contact->postcode }}</td>
                                                <td>
                                                    <a href="{{ url('/student/' . $contact->id . '/edit') }}"
                                                        title="Edit Student"><button class="btn btn-primary btn-sm"><i
                                                                class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            Edit</button></a>
                                                    <form method="POST"
                                                        action="{{ route('contacts.delete', $contact->id) }}"
                                                        accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            title="Delete Student"
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
    </div>
@endsection
