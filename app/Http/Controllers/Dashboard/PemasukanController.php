<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Pemasukan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PemasukanController extends Controller
{
    public function index()
    {
        $pemasukan = Pemasukan::orderBy('id', 'desc')->get();
        $total = Pemasukan::pluck('pemasukan')->sum();

        return view('dashboard.pemasukan.index', compact('pemasukan', 'total'));
    }

    public function create()
    {
        return view('dashboard.pemasukan.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'tanggal' => 'required|date',
            'pemasukan' => 'required|numeric',
            'keterangan' => 'required',
        ]);

        $pemasukan = Pemasukan::create($validator);

        return redirect()->route('pemasukan.index')->with('success', 'Data Pemasukan Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $p = Pemasukan::find($id);

        return view('dashboard.pemasukan.edit', compact('p'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'tanggal' => 'required|date',
            'pemasukan' => 'required|numeric',
            'keterangan' => 'required',
        ]);

        $pemasukan = Pemasukan::find($id)->update($validator);

        return redirect()->route('pemasukan.index')->with('success', 'Data Pemasukan Berhasil Di Update');
    }

    public function destroy($id)
    {
        $pemasukan = Pemasukan::find($id)->delete();

        return redirect()->route('pemasukan.index')->with('success', 'Data Pemasukan Berhasil Di Hapus');
    }
}
