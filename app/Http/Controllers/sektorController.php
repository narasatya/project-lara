<?php

namespace App\Http\Controllers;

use App\Models\detail;
use App\Models\sektor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class sektorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = sektor::with('detail')->get();
        return view('dashboard.sektor.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sektor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('namaSektor', $request->namaSektor);
        $request->validate(
            [
                'namaSektor' => 'required',
            ],
            [
                'namaSektor.required' => 'Nama Sektor Wajib Diisi!'
            ]
        );

        $data = [
            'namaSektor' => $request->namaSektor
        ];
        sektor::create($data);

        return redirect()->route('sektor.index')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = sektor::orderBy('namaSektor', 'asc')->get();
        return view('depan.sektor')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = sektor::where('id', $id)->first();
        return view('dashboard.sektor.edit')->with('data', $data);
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
                'namaSektor' => 'required',
            ],
            [
                'namaSektor.required' => 'Nama Sektor Wajib Diisi!'
            ]
        );

        $data = [
            'namaSektor' => $request->namaSektor
        ];
        sektor::where('id', $id)->update($data);

        return redirect()->route('sektor.index')->with('success', 'Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sektor::where('id', $id)->delete();
        return redirect()->route('sektor.index')->with('success', 'Data telah dihapus');
    }
}