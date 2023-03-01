@extends('layouts.app')

@section('main')
    <div class="pb-3">
        <a href="{{ route('detail.index') }}" class="btn btn-secondary">
            << Kembali </a>
    </div>
    <form action="{{ route('detail.update', $data->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nama_usaha" class="form-label">Nama Lapak</label>
            <input type="text" class="form-control form-control-sm @error('nama_usaha')  is-invalid @enderror"
                name="nama_usaha" id="nama_usaha" aria-describedby="helpId" placeholder="Nama Lapak"
                value="{{ $data->nama_usaha }}">
            @error('nama_usaha')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="produk" class="form-label">Usaha Utama</label>
            <input type="text" class="form-control form-control-sm @error('produk')  is-invalid @enderror" name="produk"
                id="produk" aria-describedby="helpId" placeholder="Usaha Utama" value="{{ $data->produk }}">
            @error('produk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Sektor Usaha</label>
            <select name="id_sektor" class="form-control @error('id_sektor') is-invalid @enderror" id="">
                <option value="">-- Sektor Usaha --</option>
                @foreach ($sektor as $item)
                    <option value="{{ $item->id }}">{{ $item->namaSektor }}</option>
                @endforeach
            </select>
            @error('id_sektor')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            {{-- <input type="text" class="form-control form-control-sm" name="produk" id="produk"
                aria-describedby="helpId" placeholder="Usaha Utama" value="{{ Session::get('produk') }}"> --}}
        </div>
        <div class="mb-3">
            <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
            <input type="text" class="form-control form-control-sm @error('nama_pemilik')  is-invalid @enderror"
                name="nama_pemilik" id="nama_pemilik" aria-describedby="helpId" placeholder="Nama Pemilik"
                value="{{ $data->nama_pemilik }}">
            @error('nama_pemilik')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Lengkap</label>
            <input type="text" class="form-control form-control-sm @error('alamat')  is-invalid @enderror" name="alamat"
                id="alamat" aria-describedby="helpId" placeholder="Alamat" value="{{ $data->alamat }}">
            @error('sektor')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kec" class="form-label">Kecamatan</label>
            <input type="text" class="form-control form-control-sm @error('kec')  is-invalid @enderror" name="kec"
                id="kec" aria-describedby="helpId" placeholder="Kecamatan" onkeyup="return kapital()"
                value="{{ $data->kec }}">
            @error('kec')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kab" class="form-label">Kabupaten/Kota</label>
            <input type="text" class="form-control form-control-sm @error('kab')  is-invalid @enderror" name="kab"
                id="kab" aria-describedby="helpId" placeholder="Kab/Kota" onkeyup="return kapital1()"
                value="{{ $data->kab }}">
            @error('kab')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="prov" class="form-label">Provinsi</label>
            <input type="text" class="form-control form-control-sm @error('prov')  is-invalid @enderror" name="prov"
                id="prov" aria-describedby="helpId" placeholder="Provinsi" onkeyup="return kapital2()"
                value="{{ $data->prov }}">
            @error('prov')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Jumlah Tenaga Kerja</div>
                <div class="col-auto">
                    <input class="form-control form-control-sm @error('jml_tk')  is-invalid @enderror" type="number"
                        name="jml_tk" id="jml_tk" placeholder="Jumlah Tenaga Kerja" onkeypress="return angka(event)"
                        value="{{ $data->jml_tk }}" min="1">
                    @error('jml_tk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-auto">No Telp</div>
                <div class="col-auto">
                    <input class="form-control form-control-sm @error('telp')  is-invalid @enderror" type="text"
                        name="telp" id="telp" placeholder="No Telp" onkeypress="return angka(event)"
                        value="{{ $data->telp }}">
                    @error('telp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <button class="btn btn-primary text-white" name="simpan" type="submit">Simpan</button>
    </form>

    <script>
        function angka(event) {
            a = (event.which) ? event.which : event.keyCode
            if (a != 46 && a > 31 && (a < 48 || a > 57))
                return false;
            return true;
        }

        function kapital() {
            var x = document.getElementById("kec");
            x.value = x.value.toUpperCase();
        }

        function kapital1() {
            var x = document.getElementById("kab");
            x.value = x.value.toUpperCase();
        }

        function kapital2() {
            var x = document.getElementById("prov");
            x.value = x.value.toUpperCase();
        }
    </script>
@endsection
