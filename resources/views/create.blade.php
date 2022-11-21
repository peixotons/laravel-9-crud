@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="container-form">
            <div class="form">
                <div class="titulo">
                    <h3>New Contact</h3>
                </div>
                <form class="row g-3" action="{{ route('contacts.store') }}" method="post">
                    @csrf
                    <div class="col-md-4">
                        <label for="name_contact" class="form-label">Name</label>
                        <input name="name_contact" type="text" class="form-control @error('name_contact') is-invalid @enderror" id="name_contact"
                            placeholder="Name...">
                        @error('name_contact')
                            <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="email_contact" class="form-label">Email</label>
                        <input name="email_contact" type="email" class="form-control @error('email_contact') is-invalid @enderror" id="email_contact"
                            placeholder="Email...">
                        @error('email_contact')
                            <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="phone_contact" class="form-label">Phone</label>
                        <input name="phone_contact" type="tel" class="form-control @error('phone_contact') is-invalid @enderror" id="phone_contact"
                            placeholder="(99) 99999-9999">
                        @error('phone_contact')
                            <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-8">
                        <label for="address" class="form-label">Address</label>
                        <input name="address" type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                            placeholder="1234 Main St...">
                        @error('address')
                            <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="number" class="form-label">Number</label>
                        <input name="number" type="text" class="form-control @error('number') is-invalid @enderror" id="number"
                            placeholder="House Number...">
                        @error('number')
                            <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="neighborhood" class="form-label">Neighborhood</label>
                        <input name="neighborhood" type="text" class="form-control @error('neighborhood') is-invalid @enderror" id="neighborhood"
                            placeholder="Neighborhood...">
                        @error('neighborhood')
                            <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="state" class="form-label">State</label>
                        <select name="state" id="state" class="form-select @error('state') is-invalid @enderror">
                            <option value="">Choose State</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                        @error('state')
                            <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="zipcode" class="form-label">Zip Code</label>
                        <input name="postcode" type="text" class="form-control @error('postcode') is-invalid @enderror" id="zipcode"
                            placeholder="Zip Code...">
                        @error('postcode')
                            <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
