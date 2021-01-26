<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ayar;
use App\Models\Proje;
use App\Models\Blog;
use App\Models\Kategori;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['ayar']       = Ayar::where('id', 1)->first(); // site ayarları
        $data['bloglar']    = Blog::orderBy('id', 'desc')->paginate(6);
        $data['kategoriler'] = Kategori::orderBy('id', 'desc')->get();
        $data['icekebilir']    = Blog::inRandomOrder()->limit(4)->get();
        return view('home.blog', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($slug)
    {
        $data['ayar']       = Ayar::where('id', 1)->first();
        $data['yazi']       = Blog::where('slug', $slug)->first();
        return view('home.yazi', $data);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
