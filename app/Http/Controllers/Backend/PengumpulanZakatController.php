<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\JumlahZakat;
use App\Models\Muzakki;
use Illuminate\Http\Request;
use App\Models\PengumpulanZakat;

class PengumpulanZakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = PengumpulanZakat::all();

        return view('pages.backend.pengumpulan_zakat.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        $items = Muzakki::all();

        return view('pages.backend.pengumpulan_zakat.create', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Memulai transaksi
        DB::beginTransaction();

        try {
            // Membuat entri baru di tabel PengumpulanZakat
            $pengumpulanZakat = new PengumpulanZakat();
            $pengumpulanZakat->fill($request->all());
            $pengumpulanZakat->save();

            // Mengupdate tabel JumlahZakat
            $jumlahZakat = JumlahZakat::first();
            $jumlahZakat->jumlah_beras += $request->bayar_beras;
            $jumlahZakat->jumlah_uang += $request->bayar_uang;

            $jumlahZakat->total_beras += $request->bayar_beras;
            $jumlahZakat->total_uang += $request->bayar_uang;
            $jumlahZakat->total_distribusi += 1;

            $jumlahZakat->save();

            // Commit transaksi jika sukses
            DB::commit();

            // Mengembalikan respon atau melakukan tindakan lain (jika ada)
            return redirect()->route('pengumpulan_zakat.index')->with('success', 'Pengumpulan zakat berhasil ditambahkan dan jumlah zakat berhasil diupdate.');
        } catch (\Exception $e) {
            // Rollback transaksi jika terjadi error
            DB::rollback();

            // Mengembalikan respon atau melakukan tindakan lain (jika ada)
            return redirect()->back()->with('error', 'Gagal menambahkan pengumpulan zakat dan mengupdate jumlah zakat. Silakan coba lagi.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = PengumpulanZakat::findOrFail($id);

        return view('pages.backend.pengumpulan_zakat.edit', [
            'item' => $item
        ]);
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
        $data = $request->all();

        $item = PengumpulanZakat::findOrFail($id);

        $item->update($data);

        return redirect()->route('pengumpulan_zakat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = PengumpulanZakat::findOrFail($id);
        $item->delete();

        return redirect()->route('pengumpulan_zakat.index');
    }
}
