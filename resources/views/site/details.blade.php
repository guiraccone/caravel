@extends('layout.site')
@section('title', "$vehicle->name")
@section('content')

    @if (session()->has('message'))
        <div class="alert alert-info" role="alert" id="message">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="container">
        <div class="row p-3">
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="image_selected"><img src="{{ $vehicle->img }}" alt=""></div>
            </div>
            <div class="col-lg-6 order-3 ">
                <h1>{{ $vehicle->name }}</h1>
                <span>
                    {{ $vehicle->carModel->name }} - {{ $vehicle->carModel->brand->name }}
                </span>
                <h5>R$ {{ number_format($vehicle->price, 2, ',', '.') }}</h5>
                <p>{{ $vehicle->description }}</p>
            </div>
        </div>
    </div>

    <div class="container">
        <form action="{{ route('leads.store') }}" class="container" method="post"">
            @csrf
            <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Nome Completo</label>
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Nome" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="inputPhone">Telefone</label>
                    <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="Número" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Cidade</label>
                        <input type="text" class="form-control" id="inputCity" name="city" placeholder="Cidade"
                            required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="state">Estado</label>
                        <select name="state" class="form-control" id="state">
                            <option value="SC">Santa Catarina</option>
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
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deixe aqui sua mensagem!</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" required></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('message').style.display = 'none';
        }, 5000);
    </script>
@endsection
