<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

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
}
