@extends('layouts.main')

@section('content')
<section>
    <h1 class="mt-5">{{$comic->title}}</h1>
    <span class="badge bg-primary">{{ $comic->price}} €</span>
    <span class="badge bg-danger">{{ $comic->sale_date}}</span>
    <span class="badge bg-secondary">{{ $comic->series}}</span>

    <div class="row mt-5 mb-5">
        <div class="col-md-2">
            <img src="{{ $comic->thumb}}" alt="">
        </div>
        <div class="col-md-10">
            <p>{{ $comic->description}}</p>
        </div>
    </div>

    <a href="{{ route('comics.index')}}">Back</a>




</section>
    
@endsection