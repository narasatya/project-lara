@extends('layouts.app')

@section('title', 'Credits')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail UMKM</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Detail Pengguna UMKM NegeriKita</h4>
                                <div class="card-header-action">
                                    <a href="#" class="btn btn-primary">+ Tambah Lapak</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table-striped table-lg table" id="table-1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    No
                                                </th>
                                                <th>Nama Lapak</th>
                                                <th>Usaha Utama</th>
                                                <th>Sektor</th>
                                                <th>Nama Pemilik</th>
                                                <th>No Telp</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $item->nama_usaha }}</td>
                                                    <td>{{ $item->produk }}</td>
                                                    <td>{{ $item->sektor->namaSektor ?? 'Kosong' }}</td>
                                                    <td>{{ $item->nama_pemilik }}</td>
                                                    <td>{{ $item->telp }}</td>
                                                    <td>
                                                        <a href="{{ route('detail.edit', $item->id) }}"
                                                            class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                            title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                        <form
                                                            onsubmit="return confirm('Lapak ini akan dihapus, apakah Anda yakin??')"
                                                            class="d-inline" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            {{-- <button class="btn btn-danger btn-action" type="submit"
                                                                name="submit" data-toggle="tooltip"
                                                                title="Hapus"></button> --}}
                                                            <button class="btn btn-danger btn-action" type="submit"
                                                                name="submit" data-toggle="tooltip" title="Hapus"
                                                                data-confirm="Lapak ini akan dihapus, apakah Anda yakin??"
                                                                data-confirm-yes="{{ route('detail.destroy', $item->id) }}"><i
                                                                    class="fas fa-trash"></i></button>
                                                        </form>
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
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/prismjs/prism.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/bootstrap-modal.js') }}"></script>
@endpush
