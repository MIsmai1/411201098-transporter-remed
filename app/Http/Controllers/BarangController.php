<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function getBarang()
    {
        $barang = Barang::orderBy("id", "desc")->get();
        return Helper::toJson($barang);
    }

    public function createBarang(Request $request)
    {

        $barang = new Barang();
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->deskripsi = $request->deskripsi;
        $barang->stok_barang = $request->stok_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->save();

        return Helper::toJson($barang, "Data berhasil ditambahkan");

    }

    public function updateBarang(Request $request)
    {

        $barang = Barang::where("id", $request->id)->first();
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->deskripsi = $request->deskripsi;
        $barang->stok_barang = $request->stok_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->save();

        return Helper::toJson($barang, "Data berhasil diubah");

    }

    public function deleteBarang($id)
    {

        $barang = Barang::where('id', $id)->first();
        Barang::where('id', $id)->delete();

        return Helper::toJson("", "Data berhasil dihapus");

    }
}