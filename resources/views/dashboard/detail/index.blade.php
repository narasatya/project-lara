@extends('dashboard.layout')

@section('konten')
    <p class="card-title">Detail Lapak UMKM</p>
    <div class="pb-3"><a href="{{ route('detail.create') }}" class="btn btn-primary text-white">+ Tambah Lapak</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th class="">Nama Lapak</th>
                    <th class="">Usaha Utama</th>
                    <th class="">Sektor</th>
                    <th class="">Nama Pemilik</th>
                    <th class="">No Telp</th>
                    <th class="col-2">Aksi</th>
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
                            <a href="{{ route('detail.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form onsubmit="return confirm('Lapak ini akan dihapus, apakah Anda yakin??')"
                                action="{{ route('detail.destroy', $item->id) }}" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit" name="submit">Del</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
