<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vision;

class GovController extends Controller
{
    public function index(){
        return view('admin/pemerintahan/index', [
            'title' => 'Pemerintahan',
            'data' => Vision::all()
        ]);
    }

    public function ubah_visi(Request $request){
        $data = $request->validate([
            'visi' => 'required|min:20',
            'misi' => 'required|min:20',
        ]);
        Vision::where('id', 1)->update($data);
        return redirect('/admin/pemerintahan')->with('visi_edited', 'Visi dan misi desa berhasil diubah');
    }
}
