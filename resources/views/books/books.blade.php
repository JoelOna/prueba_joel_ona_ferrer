@extends('layout')

@section('content')    
<h1>Libros</h1>

<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <th>{{$book->id}}</th>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection