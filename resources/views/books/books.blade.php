@extends('layout')

@section('content')    
<h1>{{__('books.books')}}</h1>

<a href={{route('insert-books')}} class="btn btn-primary">{{__('books.create')}}</a>
@if (session('success'))
    <div class="mt-3 alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('books.title')}}</th>
            <th scope="col">{{__('books.author')}}</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <th>{{$book->id}}</th>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td><a class="btn btn-primary" href="{{route('edit-books', ['id'=>$book->id])}}">{{__('books.edit')}}</a> <a class="btn btn-danger" href="{{route('delete-book', ['id'=>$book->id])}}">{{__('books.delete')}}</a></td>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection