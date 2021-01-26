<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ayar;
use App\Models\Proje;
use App\Models\Blog;
use App\Models\Kategori;


class HomepageController extends Controller
{

    public function __invoke() { // anasayfayı çağıran controller
        $data['ayar']       = Ayar::where('id', 1)->first();
        $data['projeler']   = Proje::orderBy('id', 'desc')->limit(8)->get();
        $data['bloglar']    = Blog::orderBy('id', 'desc')->limit(3)->get();
        return view('home.anasayfa', $data);
    }
}
