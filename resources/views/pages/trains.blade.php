@extends('layouts.app')

@section('page-title')
    TrainsList
@endsection

@section('main-content')
<main>
    <div class="container">
        <h1 class="text-center">Train list</h1>
        <div class="row row-cols-3 g-5">
            @foreach ($trains as $train)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$train->azienda }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">da {{$train->stazione_di_partenza}} a {{$train->stazione_di_arrivo}}</h6>
                        <p class="card-text">programmato per le {{$train->orario_di_partenza}} con arrivo per le: {{$train->orario_di_arrivo}}</p>
                        <span class="card-link">{{($train->in_orario) ? 'in orario':'in ritardo'}}</span>
                        <span class="card-link">{{($train->cancellato) ? 'e cancellato':''}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection
