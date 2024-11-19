<?php

namespace App\Http\Controllers;






class ViewNumController extends Controller
{
    public function index()
    {
             // Coba mengambil data dari database
             $indo = Number::firstWhere('company','=','INDO');
             $ibb = Number::firstWhere('company','=','IBB');
             $iwp = Number::firstWhere('company','=','IWP');

             // Periksa apakah data ada
             if ($indo or $ibb or $iwp) {
                 // Jika data ada, gunakan data yang diambil
                 return view('layout.tools.number', [
                    'indo' => $indo,
                    'ibb' => $ibb,
                    'iwp' => $iwp
                ]);
             } else {
                 // Jika data tidak ada, berikan nilai default
                 $defaultindo = 'NO INFORMATION' ;
                 $defaultibb = 'NO INFORMATION' ;
                 $defaultiwp = 'NO INFORMATION' ;

                 return view('layout.tools.number', [
                    'indo' => $defaultindo,
                    'ibb' => $defaultibb,
                    'iwp' => $defaultiwp
                ]);
             }
    }
}
