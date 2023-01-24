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
}
