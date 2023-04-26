<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\DistribusiZakat;
use App\Models\JumlahZakat;
use App\Models\Mustahik;
use Illuminate\Http\Request;

class DistribusiZakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DistribusiZakat::all();

        return view('pages.backend.distribusi_zakat.index', [
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

        $items = Mustahik::all();

        return view('pages.backend.distribusi_zakat.create', compact('items'));
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
            // Mengambil data jumlah zakat saat ini
            $jumlahZakat = JumlahZakat::first();

            // Memeriksa apakah stok beras cukup
            if ($jumlahZakat->jumlah_beras < $request->jumlah_beras) {
                throw new \Exception('Stok beras tidak cukup');
            }

            // Memeriksa apakah stok uang cukup
            if ($jumlahZakat->jumlah_uang < $request->jumlah_uang) {
                throw new \Exception('Stok uang tidak cukup');
            }

            // Membuat entri baru di tabel PengumpulanZakat
            $pengumpulanZakat = new DistribusiZakat();
            $pengumpulanZakat->fill($request->all());
            $pengumpulanZakat->save();

            // Mengupdate tabel JumlahZakat
            $jumlahZakat->jumlah_beras -= $request->jumlah_beras;
            $jumlahZakat->jumlah_uang -= $request->jumlah_uang;
            $jumlahZakat->total_distribusi += 1;
            $jumlahZakat->save();

            // Commit transaksi jika sukses
            DB::commit();

            // Mengembalikan respon atau melakukan tindakan lain (jika ada)
            return redirect()->route('distribusi_zakat.index')->with('success', 'Pengumpulan zakat berhasil ditambahkan dan jumlah zakat berhasil diupdate.');
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
        $item = DistribusiZakat::findOrFail($id);

        return view('pages.backend.distribusi_zakat.edit', [
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

        $item = DistribusiZakat::findOrFail($id);

        $item->update($data);

        return redirect()->route('distribusi_zakat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = DistribusiZakat::findOrFail($id);
        $item->delete();

        return redirect()->route('distribusi_zakat.index');
    }
}
