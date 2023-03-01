@extends('layouts.app')

@section('title', 'Sektor UMKM')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

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
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Sektor UMKM</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" required="">
                        <div class="invalid-feedback">
                            What's your name?
                        </div>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <a href="{{ route('sektor.index') }}" class="btn btn-secondary mr-1">
                      Kembali
                    </a>
                    <button class="btn btn-primary">Submit</button>
                  </div>
                </table>
              </div>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    {{-- <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script> --}}

    <!-- Page Specific JS File -->
    {{-- <script src="{{ asset('js/page/modules-datatables.js') }}"></script>
    <script src="{{ asset('js/page/index-0.js') }}"></script> --}}
@endpush
