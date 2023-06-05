<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;
use App\Models\jamtayang;
use App\Models\hari;
use App\Models\jamtayang_seat;
use Illuminate\Support\Facades\Storage;
class admincontroller extends Controller
{
    //ini untuk admin nambah produk
    public function index()
    {
        return view('admin.index');
    }

    public function tambahmovie()
    {
        $jam=jamtayang::all();
        $hari=hari::all();
        return view('admin.tambahmovie',compact('jam','hari'));
    } 
    public function listmovie()
    {
        $movies = movie::all();
        return view('admin.listmovie', compact('movies'));
    }



    public function edit($id)
    {    
        $movies = movie::all();
        $movies = Movie::findOrFail($id);
        return view('admin.editmovie', compact('movies'));
    }
    public function store(Request $request)
    {
         $request->validate([
            'judul' => 'required',
            'sinopsis' => 'required',
            'product_image_1' => 'required|image',
            'durasi' => 'required' ,
            'id'=>'required',
            'hari'=>'required',
            'jam'=>'required',
            'harga'=>'required',
            'link'=>'required',
        ]);
            $movies = new movie();
            $movies->id = $request->input('id');
            $movies->judul = $request->input('judul');
            $movies->hari_id = $request->input('hari');
            $movies->jam_id = $request->input('jam');
            $movies->harga = $request->input('harga');
            $movies->sinopsis = $request->input('sinopsis');
            $movies->linktrailer = $request->input('link');
            $movies->durasi = $request->input('durasi');
           $product_image_1 = $request->file('product_image_1');
    
            $product_image_1_path = $product_image_1->store('public/products');
     
            $movies->image = str_replace('public/', '', $product_image_1_path);
            $movies->save();
            // $jamtayang_seat = new jamtayang_seat();

            //     $jamtayang_seat->jam_id = $request->input('jam');
            //     $jamtayang_seat->hari_id = $request->input('hari');
            //     $jamtayang_seat->movies_id = $request->input('id');
            //     $jamtayang_seat->save();
                return redirect()->route("admin.addmovie")->with('success', 'Film created successfully.');
           
        }
        
               
            
       
   
    //untuk update movie di admin
    public function update(Request $request,  $id)
    {
        $request->validate([
            'judul' => 'required',
            'sinopsis' => 'required',
            'image' => 'required',
            'durasi' => 'required'
        ]);
        $movies = Movie::findOrFail($id);
        $movies->judul = $request->input('judul');
        $movies->sinopsis = $request->input('sinopsis');
        $movies->image = $request->input('image');
        $movies->durasi = $request->input('durasi');
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $movies->save();

        return redirect()->back()->with('success', 'Film updated successfully.');
    }
//untuk delete di admin
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
    $movie->delete();

    return redirect()->route('index')->with('success', 'Movie deleted successfully');

    }
}
