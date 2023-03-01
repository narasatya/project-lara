@extends('layouts.app')

@section('main')
    <div class="main-content">
        <div class="section">
            <div class="section-header">
                <h1>Tambah Lapak UMKM</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Lapak UMKM</h4>
                        </div>
                        <span>
                            <form action="{{ route('detail.store') }}" method="post">
                                @csrf
                                <div class="card-body pr-5">
                                    <table class="table-striped table-lg table" id="table-1">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="nama_usaha">Nama Usaha UMKM/ Nama
                                                Toko</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" required="" name="nama_usaha"
                                                    id="nama_usaha" value="{{ Session::get('nama_usaha') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="produk">Produk Usaha Utama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" required="" name="produk"
                                                    id="produk" value="{{ Session::get('produk') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Sektor Usaha</label>
                                            <div class="col-sm-9">
                                                <select name="id_sektor" class="form-control" required="" id="">
                                                    <option value="">&mdash; Sektor Usaha &mdash;</option>
                                                    @foreach ($sektor as $item)
                                                        <option value="{{ $item->id }}">{{ $item->namaSektor }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="nama_pemilik">Nama Pemilik
                                                Usaha/Toko</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" required=""
                                                    name="nama_pemilik" id="nama_pemilik"
                                                    value="{{ Session::get('nama_pemilik') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="alamat">Alamat Usaha</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" required="" name="alamat"
                                                    id="alamat" value="{{ Session::get('alamat') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="kec">Kecamatan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" required="" name="kec"
                                                    id="kec" value="{{ Session::get('kec') }}"
                                                    onkeyup="return kapital()">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="kab">Kabupaten</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" required="" name="kab"
                                                    id="kab" value="{{ Session::get('kab') }}"
                                                    onkeyup="return kapital1()">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="prov">Provinsi</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" required="" name="prov"
                                                    id="prov" value="{{ Session::get('prov') }}"
                                                    onkeyup="return kapital2()">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="jml_tk">Jumlah Tenaga
                                                Kerja</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" required="" name="jml_tk"
                                                    id="jml_tk" value="{{ Session::get('jml_tk') }}"
                                                    onkeypress="return angka(event)" min="1">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="telp">No Telp</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" required="" name="telp"
                                                    id="telp" value="{{ Session::get('telp') }}"
                                                    onkeypress="return angka(event)" min="1">
                                            </div>
                                        </div>
                                    </table>
                                </div>
                                <div class="card-footer text-right">
                                    <a href="{{ route('detail.index') }}" class="btn btn-secondary mr-1">
                                        Kembali
                                    </a>
                                    <button class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
