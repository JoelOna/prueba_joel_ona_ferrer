@extends('layout')

@section('content')    
<h1>{{__('contact.contact')}}</h1>

@if (session('success'))
    <div class="mt-3 alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

<form action="{{route('contact')}}" method="post">
@csrf
<div class="mb-3">
    <label class="form-label">{{__('contact.email_input')}}</label>
    <input type="text" class="form-control @error('correo') is-invalid @enderror" name="correo">
    @error('correo')
        <div class="text-danger mt-2">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">{{__('contact.message')}}</label>
    <textarea class="form-control @error('mensaje') is-invalid @enderror" name="mensaje" id="" rows="3"></textarea>
    @error('mensaje')
        <div class="text-danger mt-2">
            {{ $message }}
        </div>
    @enderror
</div>

  <button type="submit" class="btn btn-primary">{{__('contact.send')}}</button>
</form>

@endsection