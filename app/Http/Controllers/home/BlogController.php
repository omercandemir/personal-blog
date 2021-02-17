<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Ayar;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $kontrol = Blog::where('slug', $slug)->first();
        if (!$kontrol) {
            abort(404, 'İlan bulunamadı!');
        }
        $data['ayar']       = Ayar::where('id', 1)->first();
        $data['yazi']       = Blog::where('slug', $slug)->first();
        return view('home.yazi', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
