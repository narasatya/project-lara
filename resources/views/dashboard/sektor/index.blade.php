@extends('layouts.app')

@section('title', 'Sektor UMKM')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Sektor UMKM</h1>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>List Sektor Pengguna UMKM NegeriKita</h4>
                            <div class="card-header-action">
                                <a href="{{ route('sektor.create') }}" class="btn btn-primary">+ Tambah Sektor</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped table-lg table" id="table-1">
                                    <thead>
                                        <tr>
                                            <th>
                                                No
                                            </th>
                                            <th>Nama Sektor</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $item->namaSektor }}</td>
                                                <td>
                                                    <a href="{{ route('sektor.edit', $item->id) }}"
                                                        class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                        title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="{{ route('sektor.destroy', $item->id) }}" class="btn btn-danger btn-action" data-toggle="tooltip"
                                                        title="Hapus"
                                                        onsubmit="return confirm('Sektor ini akan dihapus. Tetap ingin dihapus??')"
                                                        data-confirm-yes="alert('Sektor Telah dihapus')"
                                                        method="POST"
                                                        type="submit" name="submit">
                                                        @csrf
                                                        @method('DELETE')
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    {{-- <form  action="{{ route('sektor.destroy', $item->id) }}" class="d-inline" method="POST">
                                <button class="btn btn-sm btn-danger" >Del</button>
                            </form> --}}
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
