@extends('layout')

@section('content')    
<h1>{{__('books.new_book')}}</h1>

<form action="{{route('insert-books')}}" method="post">
@csrf
<div class="mb-3">
    <label  class="form-label">{{__('books.title')}}</label>
    <input type="text" class="form-control"  name="title">
  </div>
  <div class="mb-3">
    <label  class="form-label">{{__('books.edit_book')}}</label>
    <input type="text" class="form-control"  name="author">
  </div>

  <button type="submit" class="btn btn-primary">{{__('books.save')}}</button>
</form>
@endsection