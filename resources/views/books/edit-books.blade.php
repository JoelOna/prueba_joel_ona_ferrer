@extends('layout')

@section('content')    
<h1>{{__('books.edit_book')}} #{{$book->id}}</h1>

<form action="{{route('edit-books', ['id'=>$book->id])}}" method="post">
@csrf
<div class="mb-3">
    <label  class="form-label">{{__('books.title')}}</label>
    <input type="text" class="form-control"  name="title" value="{{$book->title}}">
  </div>
  <div class="mb-3">
    <label  class="form-label">{{__('books.author')}}</label>
    <input type="text" class="form-control"  name="author" value="{{$book->author}}">
  </div>

  <button type="submit" class="btn btn-primary">{{__('books.save')}}</button>
</form>
@endsection