<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ayar;

class LogoController extends Controller
{

    public function index()
    {
        $data['ayar']   = Ayar::where('id', 1)->first();
        return view('panel.logo', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {

        $request->validate([
            'logo'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3072'
        ]);

        $logoName       = time().'.'.$request->logo->extension();
        $request->logo->move(public_path().'/home/img', $logoName);
        
        Ayar::where('id', 1)->update(['logo' => 'home/img/'.$logoName]);
        return back()->withBasarili('Beyaz Logo başarılı bir şekilde güncellendi!');

    }

    public function destroy($id)
    {
        //
    }
}
