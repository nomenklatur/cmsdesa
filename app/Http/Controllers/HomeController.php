<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Vision;
use App\Models\Official;
use App\Models\Council;

class HomeController extends Controller
{
    public function index(){
        return view('public/home', [
            'title' => 'Desa Ringin Putih',
            'artikel' => Article::latest()->take(3)->get(),
        ]);
    }

    public function show_artikel(Article $artikel){
        return view('public/article', [
            'title' => $artikel->judul,
            'artikel' => $artikel
        ]);
    }

    public function list_artikel(){
        return view('public/articles', [
            'title' => 'Berita Terkini',
            'artikel' => Article::latest()->get()
        ]);
    }

    public function show_visi_misi(){
        return view('public/visi_misi', [
            'title' => 'Visi & Misi',
            'data' => Vision::where('id', 1)->get(),
        ]);
    }

    public function show_struktur(){
        return view('public/struktur', [
            'title' => 'Struktur Pemerintahan',
            'data' => Official::all(),
        ]);
    }

    public function show_bpd(){
        return view('public/bpd', [
            'title' => 'Badan Permusyawaratan Desa',
            'data' => Council::all()
        ]);
    }
}
