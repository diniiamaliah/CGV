<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\hari;
use App\Models\jamtayang;
class jamcontoller extends Controller
{
    public function index()
    {
        $hari = Hari::all();
        $showForm = false; // Menentukan apakah form ditampilkan atau tidak
        return view('admin.tambahhari', compact('hari', 'showForm'));
    }

    public function create()
    {
        $hari = Hari::all();
        $showForm = true; // Menentukan apakah form ditampilkan atau tidak
        return view('admin.tambahhari', compact('hari', 'showForm'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'title' => 'required|max:255',
        ]);

        Hari::create($request->all());

        return redirect()->route('hari.index')
            ->with('success', 'Judul telah ditambahkan.');
    }
    public function indexx()
    {
        $jamtayang = Jamtayang::all();
        $showForm = false; // Menentukan apakah form ditampilkan atau tidak
        return view('admin.tambahjam', compact('jamtayang', 'showForm'));
      
    }

    public function createe()
    {
        $jamtayang = Jamtayang::all();
        $showForm = true; // Menentukan apakah form ditampilkan atau tidak
        return view('admin.tambahjam', compact('jamtayang', 'showForm'));
      
    }

    public function storee(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
            'jam' => 'required',
        ]);
    
        $subcategory = new jamtayang();
        $subcategory->id= $validated['id'];
    $subcategory->jamtayang = $validated['jam'];
   
    $subcategory->save();

        return redirect()->route('jamtayang.index')
            ->with('success', 'Judul telah ditambahkan.');
    }
}
