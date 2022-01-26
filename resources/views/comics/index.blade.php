@extends('layouts.main')

@section('content')
    <section>
        <h1>Comics Archive</h1>
        <section>
            <h1 class="mt-5">All Comics</h1>
    
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>SaleDate</th>
                        <th colspan="3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>
                            <a href="{{ route('comics.show', $comic->id)}}"><button class="btn btn-primary">SHOW</button></a>   
                        </td>
                        <td>
                            <a href=""><button class="btn btn-success">EDIT</button></a>   
                        </td>
                        <td>
                            <a href=""><button class="btn btn-danger">DELETE</button></a>   
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </section>

@endsection