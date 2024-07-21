@extends('layouts.app')

@section('page-title')
    TrainsList
@endsection

@section('main-content')
<main>
    <div class="container">
        <div class="row row-cols-3 g-5">
            @foreach ($trains as $train)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection
