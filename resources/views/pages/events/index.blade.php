@extends('layouts.app')

@section('title', 'Event')
@section('content')

@if (Session::has('success'))
<div class="col mb-3">
    <div class="alert alert-success text-center">
        <span>{{Session::get('success')}}</span>
    </div>
</div>
@endif

<div class="col my-3">
    <a href="{{route('event.create')}}" class="btn btn-md btn-primary">Input Data Baru</a>
    <a href="{{route('trash.index')}}" class="btn btn-md btn-success">Trash Event</a>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="text-center">Data Event</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <table class="table table-stripped table-bordered text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Event</th>
                        <th>Lokasi</th>
                        <th>Tanggal Acara</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($event as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->lokasi}}</td>
                        <td>
                            {{\Carbon\Carbon::parse($item->tgl_mulai)->translatedFormat('l, d F Y')}}
                            <br>
                            {{\Carbon\Carbon::parse($item->tgl_selesai)->translatedFormat('l, d F Y')}}
                        </td>
                        <td>
                            <a href="{{route('event.edit', $item->id)}}"
                                class="btn btn-sm btn-warning text-white">Ubah</a>
                            <br>
                            <form action="{{route('event.delete', $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection