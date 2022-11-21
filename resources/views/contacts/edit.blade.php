@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="container-form">
            <div class="form">
                <div class="titulo">
                    <h3 class="fw-bold text-center">Update a Contact</h3>
                </div>
                <form class="row g-3" action="{{ route('contacts.update', $contacts->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="col-md-4">
                        <label for="name_contact" class="form-label">Name</label>
                        <input name="name_contact" type="text" value="{{ $contacts->name_contact }}"
                            class="form-control @error('name_contact') is-invalid @enderror" id="name_contact"
                            placeholder="Name...">
                        @error('name_contact')
                            <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="email_contact" class="form-label">Email</label>
                        <input name="email_contact" type="email" value="{{ $contacts->email_contact }}"
                            class="form-control @error('email_contact') is-invalid @enderror" id="email_contact"
                            placeholder="Email...">
                        @error('email_contact')
                            <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="phone_contact" class="form-label">Phone</label>
                        <input name="phone_contact" type="tel" value="{{ $contacts->phone_contact }}"
                            class="form-control @error('phone_contact') is-invalid @enderror" id="phone_contact"
                            placeholder="(99) 99999-9999">
                        @error('phone_contact')
                            <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="address" class="form-label">Address</label>
                        <input name="address" type="text" value="{{ $contacts->address }}"
                            class="form-control @error('address') is-invalid @enderror" id="address"
                            placeholder="1234 Main St...">
                        @error('address')
                            <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="number" class="form-label">Number</label>
                        <input name="number" type="text" value="{{ $contacts->number }}"
                            class="form-control @error('number') is-invalid @enderror" id="number"
                            placeholder="House Number...">
                        @error('number')
                            <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <label for="city" class="form-label">City</label>
                        <input name="city" type="text" value="{{ $contacts->city }}"
                            class="form-control @error('city') is-invalid @enderror" id="city" placeholder="City...">
                        @error('city')
                            <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="neighborhood" class="form-label">Neighborhood</label>
                        <input name="neighborhood" type="text" value="{{ $contacts->neighborhood }}"
                            class="form-control @error('neighborhood') is-invalid @enderror" id="neighborhood"
                            placeholder="Neighborhood...">
                        @error('neighborhood')
                            <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="state" class="form-label">State</label>
                        <select name="state" id="state" class="form-select @error('state') is-invalid @enderror">
                            <option value="">Choose State</option>
                            <option value="AC" {{ $contacts->state =='AC' ? 'selected' : '' }}>Acre</option>
                            <option value="AL" {{ $contacts->state =='AL' ? 'selected' : '' }}>Alagoas</option>
                            <option value="AP" {{ $contacts->state =='AP' ? 'selected' : '' }}>Amapá</option>
                            <option value="AM" {{ $contacts->state =='AM' ? 'selected' : '' }}>Amazonas</option>
                            <option value="BA" {{ $contacts->state =='BA' ? 'selected' : '' }}>Bahia</option>
                            <option value="CE" {{ $contacts->state =='CE' ? 'selected' : '' }}>Ceará</option>
                            <option value="DF" {{ $contacts->state =='DF' ? 'selected' : '' }}>Distrito Federal</option>
                            <option value="ES" {{ $contacts->state =='ES' ? 'selected' : '' }}>Espírito Santo</option>
                            <option value="GO" {{ $contacts->state =='GO' ? 'selected' : '' }}>Goiás</option>
                            <option value="MA" {{ $contacts->state =='MA' ? 'selected' : '' }}>Maranhão</option>
                            <option value="MT" {{ $contacts->state =='MT' ? 'selected' : '' }}>Mato Grosso</option>
                            <option value="MS" {{ $contacts->state =='MS' ? 'selected' : '' }}>Mato Grosso do Sul</option>
                            <option value="MG" {{ $contacts->state =='MG' ? 'selected' : '' }}>Minas Gerais</option>
                            <option value="PA" {{ $contacts->state =='PA' ? 'selected' : '' }}>Pará</option>
                            <option value="PB" {{ $contacts->state =='PB' ? 'selected' : '' }}>Paraíba</option>
                            <option value="PR" {{ $contacts->state =='PR' ? 'selected' : '' }}>Paraná</option>
                            <option value="PE" {{ $contacts->state =='PE' ? 'selected' : '' }}>Pernambuco</option>
                            <option value="PI" {{ $contacts->state =='PI' ? 'selected' : '' }}>Piauí</option>
                            <option value="RJ" {{ $contacts->state =='RJ' ? 'selected' : '' }}>Rio de Janeiro</option>
                            <option value="RN" {{ $contacts->state =='RN' ? 'selected' : '' }}>Rio Grande do Norte</option>
                            <option value="RS" {{ $contacts->state =='RS' ? 'selected' : '' }}>Rio Grande do Sul</option>
                            <option value="RO" {{ $contacts->state =='RO' ? 'selected' : '' }}>Rondônia</option>
                            <option value="RR" {{ $contacts->state =='RR' ? 'selected' : '' }}>Roraima</option>
                            <option value="SC" {{ $contacts->state =='SC' ? 'selected' : '' }}>Santa Catarina</option>
                            <option value="SP" {{ $contacts->state =='SP' ? 'selected' : '' }}>São Paulo</option>
                            <option value="SE" {{ $contacts->state =='SE' ? 'selected' : '' }}>Sergipe</option>
                            <option value="TO" {{ $contacts->state =='TO' ? 'selected' : '' }}>Tocantins</option>
                        </select>
                        @error('state')
                            <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="zipcode" class="form-label">Zip Code</label>
                        <input name="postcode" type="text" value="{{ $contacts->postcode }}"
                            class="form-control @error('postcode') is-invalid @enderror" id="zipcode"
                            placeholder="Zip Code...">
                        @error('postcode')
                            <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 text-center mb-5">
                        <button type="submit" class="btn btn-warning"><i class="fa fa-plus" aria-hidden="true"></i>
                            Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
