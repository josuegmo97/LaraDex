@extends('layouts.app')

@section('title' , 'Trainer Create')

@section('content')

    <form action="{{ url('/trainer') }}" method="post" class="form-group">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
