@extends('dashboard.layout')

@section('konten')
  <div class="pb-3">
    <a href="{{ route('sektor.index') }}" class="btn btn-secondary">
      << Kembali
    </a>
  </div>
  <form action="{{ route('sektor.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="sektor" class="form-label">Nama Sektor UMKM</label>
      <input type="text"
        class="form-control form-control-sm" name="namaSektor" id="namaSektor" aria-describedby="helpId" placeholder="Nama Sektor" value="{{ Session::get('namaSektor') }}">
    </div>
    <button class="btn btn-primary text-white" name="simpan" type="submit">Simpan</button>
  </form>
@endsection