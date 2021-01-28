<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ayar;
use App\Models\Blog;
use App\Models\Kategori;
use Illuminate\Support\Str;

class BloglarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['ayar']   = Ayar::where('id', 1)->first();
        $data['bloglar']   = Blog::paginate(8);

        return view('panel.bloglar', $data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['ayar']   = Ayar::where('id', 1)->first();
        $data['kategoriler']   = Kategori::get();
        return view('panel.blogekle', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new BloglarController;
        $article->baslik    = $request->baslik;
        $article->yazi      = $request->yazi;
        $article->yazar     = $request->yazar;
        $article->slug      = Str::slug($request->baslik);

        if ($request->hasFile('resim')) {
            $imageName = Str::slug($request->baslik).'.'.$request->resim->extension();
            $request->resim->move(public_path().'blog/', $imageName);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
