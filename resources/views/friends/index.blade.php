@extends('layouts.app')

@section('title', 'Friends')

@section('content')

<a href="/friends/create" class="badge bg-primary">Add Friends</a>
    <div class="row mt-3">
		<div class="col-md-6">

@foreach($friends as $friend)

<div class="card border-success" style="width: 18rem;">
    <div class="card-body">
        <a href="/friends/{{ $friend['id'] }}" class="card-title">{{ $friend['nama'] }}</a>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $friend['no_telp'] }}</li>
            <li class="list-group-item">{{ $friend['alamat'] }}</li>
            <li class="list-group-item">{{ $friend['pendidikan'] }}</li>
        </ul>
        <a href="/friends/{{ $friend['id'] }}/edit" class="badge bg-warning">Edit</a>
        <form action="/friends/{{ $friend['id'] }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="badge bg-danger">Delete</button>
        </form>
    </div>
</div>

@endforeach

<div>
<div class="row mt-3">
		<div class="col-md-6">
{{ $friends->links() }}
</div>
</div>
</div>

@endsection
