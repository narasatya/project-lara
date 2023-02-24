@extends('dashboard.layout')

@section('konten')
  <div class="pb-3">
    <a href="{{ route('sektor.index') }}" class="btn btn-secondary">
      << Kembali
    </a>
  </div>
  <form action="{{ route('sektor.update', $data->id) }}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="sektor" class="form-label">Nama Sektor UMKM</label>
      <input type="text"
        class="form-control form-control-sm" name="namaSektor" id="namaSektor" aria-describedby="helpId" placeholder="Nama Sektor" value="{{ $data->namaSektor }}">
    </div>
    <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
  </form>
@endsection