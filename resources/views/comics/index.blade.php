@extends('layouts.main')

@section('content')
    <section>
        <section>
            <h1 class="mt-5">All Comics</h1>

            @if (session('deleted'))
                <div class="alert alert-success">
                    <strong> {{session('deleted')}}</strong>
                    successfully deleted.
                </div>
            @endif
    
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
                            <a href="{{route('comics.edit', $comic->id)}}"><button class="btn btn-success">EDIT</button></a>   
                        </td>
                        <td>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                            @csrf

                            @method('DELETE')
                            <input type="submit" value="DELETE" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                            </form>   
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </section>

@endsection