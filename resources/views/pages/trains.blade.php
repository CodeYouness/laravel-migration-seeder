@extends('layouts.app')

@section('page-title')
    TrainsList
@endsection

@section('main-content')
<main>
    <h1>
        homepage
    </h1>
    @dump($trains)
</main>
@endsection
