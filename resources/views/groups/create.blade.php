@extends('layouts.app')

@section('title', 'Groups')

@section('content')

<form action="/groups" method="POST">
@csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="{{ old('name') }}">
        <div id="emailHelp" class="form-text">Isi data dengan benar.</div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" id="exampleInputPassword1" value="{{ old('description') }}">
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection