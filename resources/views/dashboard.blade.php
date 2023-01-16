@extends('layouts.app')

@section('title', 'Halaman Welcome')

@section('content')
<div class="card">
    <div class="card-header">
        <p class="card-title">Aplikasi Event Online</p>
    </div>
    <div class="card-body">
        <p>Selamat Datang di Halaman Dashboard</p>
        <a href={{route('event')}} class="btn btn-sm btn-primary">Masuk Halaman Event</a>
    </div>
</div>
@endsection