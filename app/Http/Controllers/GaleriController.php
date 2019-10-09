<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\KategoriGaleri;

class GaleriController extends Controller
{
    function index(){
        $galeri=galeri::all();

    return view('galeri.index',compact ('galeri'));
            
    }
    public function show($id)
    {
    
        $galeri=galeri::find($id);

        return view('galeri.show',compact( 'galeri'));
    } 

    public function create()
    {
        $KategoriGaleri=KategoriGaleri::pluck('nama','id');
        

        return view( 'galeri.create',compact('KategoriGaleri'));
    }

    public function store(Request $request)
    {
        $input= $request->all();
        
        galeri::create($input);

        return redirect(route('galeri.index'));
    }

    public function edit($id)
    {
     $galeri=galeri::find($id);
     $KategoriGaleri=KategoriGaleri::pluck('nama','id'); 

      if(empty($galeri))
      {
        return redirect(route('galeri.index'));
      }

      return view('galeri.edit',compact( 'galeri','KategoriGaleri'));
    }

    public function update($id,Request $request)
    {
      $galeri=galeri::find($id);
      $input=$request->all();
  
      if(empty($galeri))
      {
        return redirect(route('galeri.index'));
      }

      $galeri->update($input);
      return redirect(route('galeri.index'));
    }
    
    public function destroy($id)
    {
      $galeri=Galeri::find($id);

      if(empty($galeri))
      {
        return redirect(route('galeri.index'));
      }
      $galeri->delete();
      return redirect(route('galeri.index'));
    }

    public function trash(){
      
      $galeri=galeri::onlyTrashed();

    return view('galeri.index',compact('galeri'));
        
    }

}