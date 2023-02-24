@extends('dashboard.layout')

@section('konten')
    <p class="card-title">Sektor UMKM</p>
    <div class="pb-3"><a href="{{ route('sektor.create') }}" class="btn btn-primary text-white">+ Tambah Sektor</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th class="">Nama Sektor</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->namaSektor }}</td>
                        <td>
                            <a href="{{ route('sektor.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form onsubmit="return confirm('Sektor ini akan dihapus, apakah Anda yakin??')" action="{{ route('sektor.destroy', $item->id) }}" class="d-inline" method="POST">
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
