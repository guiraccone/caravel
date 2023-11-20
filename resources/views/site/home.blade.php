@extends('layout.site')
@section('title', 'Home')
@section('content')

    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <div class="container">
        <div class="row row-cols-2">
            @foreach ($vehicles as $vehicle)
                <div class="col">
                    <div class="card shadow-sm .bg-secondary">
                        <img src="{{ $vehicle->img }}" class="img-thumbnail">
                        <div class="card-body">
                            <h5 class="card-title">{{ $vehicle->name }}</h5>
                            <h4 class="card-text">R$ {{ number_format($vehicle->price, 2, ',', '.') }}</h4>
                            <a href="{{ route('site.details', $vehicle->slug) }}" class="btn btn-light">Visualizar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container">
        {{ $vehicles->links('layout.pagination') }}
    </div>

@endsection
