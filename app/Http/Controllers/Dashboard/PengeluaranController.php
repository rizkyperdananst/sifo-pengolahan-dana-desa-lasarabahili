<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengeluaranController extends Controller
{
    public function index()
    {
        $pengeluaran = Pengeluaran::orderBy('id', 'desc')->get();
        $total = Pengeluaran::pluck('pengeluaran')->sum();

        return view('dashboard.pengeluaran.index', compact('pengeluaran', 'total'));
    }

    public function create()
    {
        return view('dashboard.pengeluaran.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'tanggal' => 'required|date',
            'pengeluaran' => 'required|numeric',
            'keterangan' => 'required',
        ]);

        $pengeluaran = Pengeluaran::create($validator);

        return redirect()->route('pengeluaran.index')->with('success', 'Data Pengeluaran Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $p = Pengeluaran::find($id);

        return view('dashboard.pengeluaran.edit', compact('p'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'tanggal' => 'required|date',
            'pengeluaran' => 'required|numeric',
            'keterangan' => 'required',
        ]);

        $pengeluaran = Pengeluaran::find($id)->update($validator);

        return redirect()->route('pengeluaran.index')->with('success', 'Data Pengeluaran Berhasil Di Update');
    }

    public function destroy($id)
    {
        $pengeluaran = Pengeluaran::find($id)->delete();

        return redirect()->route('pengeluaran.index')->with('success', 'Data Pengeluaran Berhasil Di Hapus');
    }
}
