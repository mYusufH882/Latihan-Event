@extends('layouts.app')

@section('title', 'Edit Events')
@section('content')
<div class="row justify-content-center">
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Form Input Event</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <form action="#" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="inputNamaEvent" class="form-label">Nama Event</label>
                            <input type="text" name="nama" id="inputNamaEvent" value="{{old('nama', $event->nama)}}"
                                class="form-control @error('nama')
                                    is-invalid
                                @enderror">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputLokasiEvent" class="form-label">Lokasi Event</label>
                            <textarea name="lokasi" id="inputLokasiEvent" class="form-control @error('lokasi')
                                is-invalid
                            @enderror">{{old('lokasi', $event->lokasi)}}
                            </textarea>
                            @error('lokasi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputDeskripsiEvent" class="form-label">Deskripsi Event</label>
                            <textarea name="deskripsi" class="form-control @error('deskripsi')
                                is-invalid
                            @enderror" id="inputDeskripsiEvent">{{old('deskripsi', $event->deskripsi)}}
                            </textarea>
                            @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputTglMulai" class="form-label">Tanggal Mulai Event</label>
                            <input name="tgl_mulai" type="date" id="inputTglMulai"
                                value="{{old('tgl_mulai', $event->tgl_mulai)}}" class="form-control @error('tgl_mulai')
                                    is-invalid
                                @enderror">
                            @error('tgl_mulai')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputTglSelesai" class="form-label">Tanggal Selesai Event</label>
                            <input name="tgl_selesai" type="date" id="inputTglSelesai"
                                value="{{old('tgl_selesai', $event->tgl_selesai)}}" class="form-control @error('tgl_selesai')
                                    is-invalid
                                @enderror">
                            @error('tgl_selesai')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Ubah Data</button>
                        <a href="{{route('event')}}" class="btn btn-md btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection