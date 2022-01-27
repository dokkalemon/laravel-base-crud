@extends('layouts.main')

@section('content')
<section>
    <h1 class="mt-5 mb-5">Edit {{$comic->title}}</h1>

    <div class="row mb-5">
        <div class="col-md-12 offset-md-1">
           
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{$comic->title}}" class="form-control d-block w-100">

            <label for="price">Price</label>
            <input type="text" name="price" id="price" value="{{$comic->price}}" class="form-control d-block w-100">
            
            <label for="series">Series</label>
            <input type="text" name="series" id="series" value="{{$comic->series}}" class="form-control d-block w-100">
            
            <label for="sale_date">Sale Date</label>
            <input type="text" name="sale_date" id="sale_date" value="{{$comic->sale_date}}" class="form-control d-block w-100">

            <label for="thumb">Thumb</label>
            <input type="text" name="thumb" id="thumb" value="{{$comic->thumb}}" class="form-control d-block w-100">
            
            <label for="type">Type</label>
            <input type="text" name="type" id="type" value="{{$comic->type}}" class="form-control d-block w-100">
            
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description" class="form-control d-block w-100">{{$comic->description}}</textarea>

            <button type="submit" class="btn btn-primary">Modifica</button>
            </form>
        </div>
    </div>
</section>
    
@endsection