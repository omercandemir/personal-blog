<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ayar;
use App\Models\Proje;
use App\Models\Kategori;
use Illuminate\Support\Str;

class ProjelerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['ayar']   = Ayar::where('id', 1)->first();
        $data['projeler']   = Proje::orderBy('id', 'desc')->paginate(8);

        return view('panel.projeler', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['ayar']   = Ayar::where('id', 1)->first();
        return view('panel.projeekle', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Proje;
        $article->proje_adi                 = $request->baslik;
        $article->proje_aciklama            = $request->aciklama;
        $article->proje_yazi                = $request->yazi;
        $article->slug                      = Str::slug($request->baslik);

        if ($request->hasFile('resim')) {
            $imageName = Str::slug($request->baslik).'.'.$request->resim->extension();
            $request->resim->move(public_path().'/projeresim', $imageName);
            $article->proje_resim = 'projeresim/'.$imageName; // veritabanına kaydetmek için
        }
        $article->save();
        return redirect('admin/projeler')->withBasarili('Yeni proje başarılı bir şekilde yayınlandı!');
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
        $data['ayar']           = Ayar::where('id', 1)->first();
        $data['proje']           = Proje::where('id', $id)->first();

        return view('panel.projeduzenle', $data);
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
        $guncel = new Proje;
        $guncel->proje_adi         = $request->yenibaslik;
        $guncel->proje_aciklama           = $request->yazar;
        $guncel->proje_yazi          = $request->yazi;
        $guncel->slug           = Str::slug($request->yenibaslik);
        if ($request->hasFile('resim')) {
            $imageName = Str::slug($request->yenibaslik).'.'.$request->resim->extension();
            $request->resim->move(public_path().'/projeresim', $imageName);
            $guncel->resim = 'projeresim/'.$imageName; // veritabanına kaydetmek için
            Proje::where('id', $id)->update([
                'proje_adi'    => $guncel->proje_adi,
                'proje_aciklama'      => $guncel->proje_aciklama,
                'proje_yazi'     => $guncel->proje_yazi,
                'proje_resim'     => $imageName,
                'slug'      => Str::slug($guncel->proje_adi)
            ]);
            return redirect('admin/projeler')->withBasarili('Proje başarılı bir şekilde güncellendi!');
        }
        else {
            Proje::where('id', $id)->update([
                'proje_adi'    => $guncel->proje_adi,
                'proje_aciklama'      => $guncel->proje_aciklama,
                'proje_yazi'     => $guncel->proje_yazi,
                'slug'      => Str::slug($guncel->proje_adi)
            ]);
            return redirect('admin/projeler')->withBasarili('Proje başarılı bir şekilde güncellendi!');
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
        $proje = Proje::find($id) ?? abort(404, 'Aranılan Quiz Bulunamadı!');
        Proje::where('id', $id)->delete(); //
        return redirect('admin/projeler')->withBasarili('Proje başarılı bir şekilde silindi!');
    }
}
