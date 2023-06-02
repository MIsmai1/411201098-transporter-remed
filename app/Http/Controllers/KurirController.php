<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Helper;
use App\Kurir;

class KurirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurirs = Kurir::all();

        return $kurirs;
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $userData = $request->all();
        $user = User::create($userData);

        return $user;
    }

    public function getKurir()
    {
        $kurir = User::orderBy("id", "desc")->get();
        return Helper::toJson($kurir);
    }

    public function createKurir(Request $request)
    {

        $kurir = new Kurir();
        $kurir->name = $request->name;
        $kurir->email = $request->email;
        $kurir->password = $request->password;
        $kurir->save();

        return Helper::toJson($kurir, "Data berhasil ditambahkan");

    }

    public function upKurir(Request $request)
    {

        $kurir = Kurir::where("id", $request->id)->first();
        $kurir->name = $request->name;
        $kurir->email = $request->email;
        $kurir->password = $request->password;
        $kurir->save();

        return Helper::toJson($kurir, "Data berhasil diubah");

    }

    public function delKurir($id)
    {

        $kurir = Kurir::where('id', $id)->first();
        Kurir::where('id', $id)->delete();

        return Helper::toJson("", "Data berhasil dihapus");

    }
}