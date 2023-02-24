<?php

namespace App\Http\Controllers;

use App\Models\detail;
use App\Models\sektor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class detailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = detail::orderBy('nama_usaha', 'asc')->get();
        return view('dashboard.detail.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sektor = sektor::all();
        return view('dashboard.detail.create', compact('sektor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nama_usaha', $request->nama_usaha);
        Session::flash('produk', $request->produk);
        Session::flash('id_sektor', $request->id_sektor);
        Session::flash('nama_pemilik', $request->nama_pemilik);
        Session::flash('alamat', $request->alamat);
        Session::flash('kec', $request->kec);
        Session::flash('kab', $request->kab);
        Session::flash('prov', $request->prov);
        Session::flash('jml_tk', $request->jml_tk);
        Session::flash('telp', $request->telp);
        $request->validate(
            [
                'nama_usaha' => 'required',
                'produk' => 'required',
                'id_sektor' => 'required',
                'nama_pemilik' => 'required',
                'alamat' => 'required',
                'kec' => 'required',
                'kab' => 'required',
                'prov' => 'required',
                'jml_tk' => 'required',
                'telp' => 'required|min:10|max:13',
            ],
            [
                'nama_usaha.required' => 'Nama Lapak Wajib Diisi!',
                'produk.required' => 'Produk Usaha Wajib Diisi!',
                'id_sektor.required' => 'Sektor Usaha Wajib Diisi!',
                'nama_pemilik.required' => 'Nama Pemilik Wajib Diisi!',
                'alamat.required' => 'Alamat Wajib Diisi!',
                'kec.required' => 'Kecamatan Wajib Diisi!',
                'kab.required' => 'Kabupaten/Kota Wajib Diisi!',
                'prov.required' => 'Provinsi Wajib Diisi!',
                'jml_tk.required' => 'Jumlah Tenaga Kerja Wajib Diisi!',
                'telp.required' => 'No Telp Harus Sesuai dan Wajib Diisi!',
            ]
        );

        $data = [
            'nama_usaha' => $request->nama_usaha,
            'produk' => $request->produk,
            'id_sektor' => $request->id_sektor,
            'nama_pemilik' => $request->nama_pemilik,
            'alamat' => $request->alamat,
            'kec' => $request->kec,
            'kab' => $request->kab,
            'prov' => $request->prov,
            'jml_tk' => $request->jml_tk,
            'telp' => $request->telp
        ];
        detail::create($data);

        return redirect()->route('detail.index')->with('success', 'Berhasil menambahkan Lapak UMKM');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_sektor)
    {
        $detail = detail::where('id_sektor', $id_sektor)->get();
        return view('depan.sektor-detail', compact('detail'));
    }
    
    public function tampilDetail($id_sektor)
    {
        $detail = detail::findOrFail($id_sektor);
        return view('depan.umkmDetail', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sektor = sektor::all();
        $data = detail::where('id', $id)->first();
        return view('dashboard.detail.edit', compact('sektor'))->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nama_usaha' => 'required',
                'produk' => 'required',
                'id_sektor' => 'required',
                'nama_pemilik' => 'required',
                'alamat' => 'required',
                'kec' => 'required',
                'kab' => 'required',
                'prov' => 'required',
                'jml_tk' => 'required',
                'telp' => 'required|min:10|max:13',
            ],
            [
                'nama_usaha.required' => 'Nama Lapak Wajib Diisi!',
                'produk.required' => 'Produk Usaha Wajib Diisi!',
                'id_sektor.required' => 'Sektor Usaha Wajib Diisi!',
                'nama_pemilik.required' => 'Nama Pemilik Wajib Diisi!',
                'alamat.required' => 'Alamat Wajib Diisi!',
                'kec.required' => 'Kecamatan Wajib Diisi!',
                'kab.required' => 'Kabupaten/Kota Wajib Diisi!',
                'prov.required' => 'Provinsi Wajib Diisi!',
                'jml_tk.required' => 'Jumlah Tenaga Kerja Wajib Diisi!',
                'telp.required' => 'No Telp Harus Sesuai dan Wajib Diisi!',
            ]
        );

        $data = [
            'nama_usaha' => $request->nama_usaha,
            'produk' => $request->produk,
            'id_sektor' => $request->id_sektor,
            'nama_pemilik' => $request->nama_pemilik,
            'alamat' => $request->alamat,
            'kec' => $request->kec,
            'kab' => $request->kab,
            'prov' => $request->prov,
            'jml_tk' => $request->jml_tk,
            'telp' => $request->telp
        ];
        detail::where('id', $id)->update($data);
        return redirect()->route('detail.index')->with('success', 'Lapak UMKM Telah Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        detail::where('id', $id)->delete();
        return redirect()->route('detail.index')->with('success', 'Data telah dihapus');
    }
}