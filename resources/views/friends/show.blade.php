@extends('layouts.app')

@section('title', 'cobacobacoba')

@section('content')
<div class="card border-success" style="max-width: 20rem;">
<div class="card-body text-secondary">

    <h5>Nama : {{ $friend['nama'] }}</h5>
    <h5>No. Telp : {{ $friend['no_telp'] }}</h5>
    <h5>Alamat : {{ $friend['alamat'] }}</h5>
    <h5>Pendidikan : {{ $friend['pendidikan'] }}</h5>

</div>
</div>
@endsection