@extends('layouts.app')

@section('main')
<div class="main-content">
  <div class="section">
    <div class="section-header">
      <h1>Tambah Sektor UMKM</h1>
    </div>
    <div class="row">
      <div class="col-lg-7 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Tambah Sektor UMKM</h4>
          </div>
          <span>
            <div class="card-body pr-5">
              <table class="table-striped table-lg table" id="table-1">
                <form action="{{ route('sektor.update', $data->id) }}" method="post">
                  @csrf
                  @method('put')
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Sektor UMKM</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" required="" name="namaSektor" id="namaSektor" value="{{ $data->namaSektor }}">
                        <div class="invalid-feedback">
                            What's your name?
                        </div>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <a href="{{ route('sektor.index') }}" class="btn btn-secondary mr-1">
                      Kembali
                    </a>
                    <button class="btn btn-primary">Simpan</button>
                  </div>
                </form>
              </table>
            </div>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection