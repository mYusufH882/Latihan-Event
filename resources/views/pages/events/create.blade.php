@extends('layouts.app')

@section('title', 'Create Event')
@section('content')
<div class="row justify-content-center">
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Form Input Event</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <form action="{{route('event.store')}}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="inputNamaEvent" class="form-label">Nama Event</label>
                            <input type="text" name="nama" id="inputNamaEvent"
                                class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputLokasiEvent" class="form-label">Lokasi Event</label>
                            <textarea name="lokasi" id="inputLokasiEvent"
                                class="form-control @error('lokasi') is-invalid @enderror"></textarea>
                            @error('lokasi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputDeskripsiEvent" class="form-label">Deskripsi Event</label>
                            <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                                id="inputDeskripsiEvent"></textarea>
                            @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputTglMulai" class="form-label">Tanggal Mulai Event</label>
                            <input name="tgl_mulai" type="date" id="inputTglMulai"
                                class="form-control @error('tgl_mulai') is-invalid @enderror">
                            @error('tgl_mulai')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputTglSelesai" class="form-label">Tanggal Selesai Event</label>
                            <input name="tgl_selesai" type="date" id="inputTglSelesai"
                                class="form-control @error('tgl_selesai') is-invalid @enderror">
                            @error('tgl_selesai')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Simpan Data</button>
                        <a href="{{route('event')}}" class="btn btn-md btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection