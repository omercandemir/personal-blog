<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ayar;
use App\Models\Blog;
use App\Models\Proje;
use App\Models\User;


class AdminController extends Controller
{
    public function __invoke() { // anasayfayı çağıran controller
        $data['ayar']       = Ayar::where('id', 1)->first();

        $blogsayisi = Blog::get();
        $data['bsay'] = count($blogsayisi);

        $projesayisi    = Proje::get();
        $data['psay']   = count($projesayisi);

        $usersayisi     = User::get();
        $data['usay']   = count($usersayisi);

        $data['bloglar']    = Blog::orderBy('id', 'desc')->limit(5)->get();
        $data['projeler']   = Proje::orderBy('id', 'desc')->limit(5)->get();

       // $data['isim']       = $this->user->name;
        return view('panel.anasayfa', $data);
    }
}
