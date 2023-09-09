<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    //
    public function index() {
        $artikel = Article::all();
        return response()->json([
            'success'=>true,
            'message'=>'Data berhasil didapatkan',
            'data'=>$artikel
        ]);
    }

    public function store(Request $request)  {
        $artikel = new Article();
        $artikel->title    = $request['judul'];
        $artikel->content  = $request['isi'];
        // if ($request->hasFile('gambar')) {
        //     $file = $request->file('gambar');
        //     $nama_gambar = "artikel." . $file->getClientOriginalExtension();
        //     $lokasi = public_path('upload/artikel');
        //     $file->move($lokasi, $nama_gambar);
        //     $artikel->gambar         = $nama_gambar;
        // }
        $artikel->save();
        return response()->json([
            'success'=>true,
            'message'=>'Data berhasil disimpan',
            'data'=> $artikel
        ]);
    }

    public function detail(Request $request, $id)  {
        $artikel = Article::find($id);
        return response()->json([
            'success'=>true,
            'message'=>'Data berhasil disimpan',
            'data'=> $artikel
        ]);
    }

    public function update(Request $request, $id)  {
        $artikel = Article::find($id);
        $artikel->title    = $request['judul'];
        $artikel->content  = $request['isi'];
        $artikel->update();
        return response()->json([
            'success'=>true,
            'message'=>'Data berhasil disimpan',
            'data'=> $artikel
        ]);
    }

    public function hapus($id)  {

        $artikel = Article::find($id);
        $artikel->delete();

        return response()->json([
            'success'=>true,
            'message'=>'Data berhasil disimpan',
            'data'=> $artikel
        ]);
    }
}
