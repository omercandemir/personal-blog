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
        $data['bloglar']   = Blog::orderBy('id', 'desc')->paginate(8);

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
        $article = new Bloglar;
        $article->baslik        = $request->baslik;
        $article->yazi          = $request->yazi;
        $article->yazar         = $request->yazar;
        $article->slug          = Str::slug($request->baslik);
        $article->kategori_id   = $request->kategori;

        if ($request->hasFile('resim')) {
            $imageName = Str::slug($request->baslik).'.'.$request->resim->extension();
            $request->resim->move(public_path().'/blogresim', $imageName);
            $article->resim = 'blogresim/'.$imageName; // veritabanına kaydetmek için
        }
        $article->save();
        return redirect('admin/bloglar')->withBasarili('Yeni makale başarılı bir şekilde eklendi!');
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['ayar']           = Ayar::where('id', 1)->first();
        $data['blog']           = Blog::where('id', $id)->first();
        $data['kategoriler']    = Kategori::get();

        return view('panel.blogduzenle', $data);
    }

    public function update(Request $request, $id)
    {
        $guncel = new Blog;
        $guncel->baslik         = $request->yenibaslik;
        $guncel->yazi           = $request->yazi;
        $guncel->yazar          = $request->yazar;
        $guncel->slug           = Str::slug($request->baslik);
        $guncel->kategori_id    = $request->kategori;

        if ($request->hasFile('resim')) {
            $imageName = Str::slug($request->yenibaslik).'.'.$request->resim->extension();
            $request->resim->move(public_path().'/blogresim', $imageName);
            $guncel->resim = 'blogresim/'.$imageName; // veritabanına kaydetmek için
            Blog::where('id', $id)->update([
                'baslik'    => $guncel->baslik,
                'yazi'      => $guncel->yazi,
                'yazar'     => $guncel->yazar,
                'resim'     => $imageName,
                'slug'      => Str::slug($guncel->baslik),
                'kategori_id' => $guncel->kategori_id
            ]);
            return redirect('admin/bloglar')->withBasarili('Makale başarılı bir şekilde güncellendi!');
        }
        else {
            Blog::where('id', $id)->update([
                'baslik'    => $guncel->baslik,
                'yazi'      => $guncel->yazi,
                'yazar'     => $guncel->yazar,
                'slug'      => Str::slug($guncel->baslik),
                'kategori_id' => $guncel->kategori_id
            ]);
            return redirect('admin/bloglar')->withBasarili('Makale başarılı bir şekilde güncellendi!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id) ?? abort(404, 'Aranılan Quiz Bulunamadı!');
        Blog::where('id', $id)->delete(); //
        return redirect('admin/bloglar')->withBasarili('Yazı başarılı bir şekilde silindi!');
    }
}
