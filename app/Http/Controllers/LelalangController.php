<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lelang;

class LelalangController extends Controller
{

    public function view (){
        return view('layout.lelang.index',[
            'url'  => 'lelang',
            'class' => 'sub_page',
            'navbar' =>'timpanav',
            'sub' => 'EN',
            'lelangs' => Lelang::latest()->paginate(7)
        ]);
    }
    public function detail(Lelang $lelang) {
        return view('layout.lelang.detail', [
            'url' => 'lelangdetail',
            'class' => 'sub_page',
            'navbar' => 'timpanav',
            'sub' => 'EN',
            'lelang' => $lelang // Mengirimkan data lelang ke view
        ]);
    }




}
