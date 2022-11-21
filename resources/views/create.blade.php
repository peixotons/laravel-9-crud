@extends('layouts.layout')

@section('content')
    <div class="container-form">
        <div class="form">
            <div class="titulo">
                <h3>New Contact</h3>
            </div>
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Name</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-2">
                    <label for="inputEmail4" class="form-label">Phone</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>                
                <div class="col-md-8">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-md-4">
                    <label for="inputAddress" class="form-label">Number</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="House Number">
                </div>
                <div class="col-md-4">
                    <label for="inputAddress" class="form-label">Neighborhood</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Neighborhood">
                </div>                              
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
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
                </div>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Zip Code</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>           
        </div>
    </div>
@endsection
