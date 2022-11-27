@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="card my-5">
            <div class="container-form">
                <div class="form">
                    <div class="card-header">
                        <div class="titulo">
                            <h3 class="fw-bold text-center">Update a Contact</h3>
                        </div>
                    </div>
                    <div id="fade" class="d-none d-flex justify-content-center">
                        <div id="loader" class="spinner-border text-info d-none" role="status">
                            <span class="visually-hidden">Loading</span>
                        </div>
                        <div id="message" class="d-none">
                            <div class="alert alert-light" role="alert">
                                <strong>
                                    <h4 class="text-center">Erro:</h4>
                                </strong>
                                <strong>
                                    <p class="text-danger"></p>
                                </strong>
                                <div class="d-flex justify-content-center">
                                    <button id="close-message" type="button" class="btn btn-secondary">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="createcontact" class="row g-3" action="{{ route('contacts.update', $contacts->id) }}"
                            method="post">
                            @method('PUT')
                            @csrf
                            <div class="col-md-4">
                                <label for="zipcode" class="form-label">Zip Code</label>
                                <input name="postcode" type="text" value="{{ $contacts->postcode }}"
                                    class="form-control @error('postcode') is-invalid @enderror" minlength="8"
                                    maxlength="8" id="zipcode" placeholder="Zip Code...">
                                @error('postcode')
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
                                <select name="state" id="state"
                                    class="form-select @error('state') is-invalid @enderror">
                                    <option value="">Choose State</option>
                                    <option value="AC" {{ $contacts->state == 'AC' ? 'selected' : '' }}>Acre</option>
                                    <option value="AL" {{ $contacts->state == 'AL' ? 'selected' : '' }}>Alagoas
                                    </option>
                                    <option value="AP" {{ $contacts->state == 'AP' ? 'selected' : '' }}>Amapá</option>
                                    <option value="AM" {{ $contacts->state == 'AM' ? 'selected' : '' }}>Amazonas
                                    </option>
                                    <option value="BA" {{ $contacts->state == 'BA' ? 'selected' : '' }}>Bahia</option>
                                    <option value="CE" {{ $contacts->state == 'CE' ? 'selected' : '' }}>Ceará</option>
                                    <option value="DF" {{ $contacts->state == 'DF' ? 'selected' : '' }}>Distrito
                                        Federal
                                    </option>
                                    <option value="ES" {{ $contacts->state == 'ES' ? 'selected' : '' }}>Espírito Santo
                                    </option>
                                    <option value="GO" {{ $contacts->state == 'GO' ? 'selected' : '' }}>Goiás</option>
                                    <option value="MA" {{ $contacts->state == 'MA' ? 'selected' : '' }}>Maranhão
                                    </option>
                                    <option value="MT" {{ $contacts->state == 'MT' ? 'selected' : '' }}>Mato Grosso
                                    </option>
                                    <option value="MS" {{ $contacts->state == 'MS' ? 'selected' : '' }}>Mato Grosso do
                                        Sul
                                    </option>
                                    <option value="MG" {{ $contacts->state == 'MG' ? 'selected' : '' }}>Minas Gerais
                                    </option>
                                    <option value="PA" {{ $contacts->state == 'PA' ? 'selected' : '' }}>Pará</option>
                                    <option value="PB" {{ $contacts->state == 'PB' ? 'selected' : '' }}>Paraíba
                                    </option>
                                    <option value="PR" {{ $contacts->state == 'PR' ? 'selected' : '' }}>Paraná
                                    </option>
                                    <option value="PE" {{ $contacts->state == 'PE' ? 'selected' : '' }}>Pernambuco
                                    </option>
                                    <option value="PI" {{ $contacts->state == 'PI' ? 'selected' : '' }}>Piauí</option>
                                    <option value="RJ" {{ $contacts->state == 'RJ' ? 'selected' : '' }}>Rio de Janeiro
                                    </option>
                                    <option value="RN" {{ $contacts->state == 'RN' ? 'selected' : '' }}>Rio Grande do
                                        Norte
                                    </option>
                                    <option value="RS" {{ $contacts->state == 'RS' ? 'selected' : '' }}>Rio Grande do
                                        Sul
                                    </option>
                                    <option value="RO" {{ $contacts->state == 'RO' ? 'selected' : '' }}>Rondônia
                                    </option>
                                    <option value="RR" {{ $contacts->state == 'RR' ? 'selected' : '' }}>Roraima
                                    </option>
                                    <option value="SC" {{ $contacts->state == 'SC' ? 'selected' : '' }}>Santa Catarina
                                    </option>
                                    <option value="SP" {{ $contacts->state == 'SP' ? 'selected' : '' }}>São Paulo
                                    </option>
                                    <option value="SE" {{ $contacts->state == 'SE' ? 'selected' : '' }}>Sergipe
                                    </option>
                                    <option value="TO" {{ $contacts->state == 'TO' ? 'selected' : '' }}>Tocantins
                                    </option>
                                </select>
                                @error('state')
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
                                    class="form-control @error('city') is-invalid @enderror" id="city"
                                    placeholder="City...">
                                @error('city')
                                    <p class="alert alert-danger mt-2 p-2 error">{{ $message }}</p>
                                @enderror
                            </div>
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
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-warning"><i class="fas fa-wrench"></i>
                                    Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const addressForm = document.querySelector('#createcontact')
        const cepInput = document.querySelector("#zipcode");
        const addressInput = document.querySelector("#address");
        const cityInput = document.querySelector("#city");
        const neighborhoodInput = document.querySelector("#neighborhood");
        const stateInput = document.querySelector("#state");
        const closeButton = document.querySelector("#close-message");
        const formInputs = document.querySelectorAll("[data-input]");
        const fadeElement = document.querySelector("#fade");

        // Validate CEP Input
        cepInput.addEventListener("keypress", (e) => {
            const onlyNumbers = /[0-9]|\./;
            const key = String.fromCharCode(e.keyCode);

            console.log(key);

            console.log(onlyNumbers.test(key));

            // allow only numbers
            if (!onlyNumbers.test(key)) {
                e.preventDefault();
                return;
            }
        });

        //Reopen Form after close message 
        closeButton.addEventListener("click", function() {
            addressForm.classList.remove('d-none');
            fadeElement.classList.add('d-none')
        })

        // Evento to get address
        cepInput.addEventListener("keyup", (e) => {
            const inputValue = e.target.value;

            //   Check if we have a CEP
            if (inputValue.length === 8) {
                getAddress(inputValue);
            }
        });

        // Get address from API
        const getAddress = async (cep) => {
            toggleLoader();
            cepInput.blur();
            const apiUrl = `https://cep.awesomeapi.com.br/json/${cep}`;
            const response = await fetch(apiUrl);
            const data = await response.json();

            console.log(data);
            console.log(formInputs);
            console.log(data.message);

            // Show error and reset form
            if (data.message) {
                addressForm.reset();
                toggleLoader();
                toggleMessage(`The CEP ${cep} was not found`);
                return;
            }
            addressInput.value = data.address_name;
            cityInput.value = data.city;
            neighborhoodInput.value = data.district;
            stateInput.value = data.state;

            toggleLoader();
        };

        // Show or hide loader
        const toggleLoader = () => {
            const fadeElement = document.querySelector("#fade");
            const loaderElement = document.querySelector("#loader");

            fadeElement.classList.toggle("d-none");
            loaderElement.classList.toggle("d-none");
            addressForm.classList.toggle('d-none')
        };

        // Show or hide message
        const toggleMessage = (msg) => {
            const fadeElement = document.querySelector("#fade");
            const messageElement = document.querySelector("#message");
            const messageTextElement = document.querySelector("#message p");

            messageTextElement.innerText = msg;

            fadeElement.classList.toggle("d-none");
            messageElement.classList.toggle("d-none");
            addressForm.classList.toggle("d-none");

        };
    </script>
@endsection
