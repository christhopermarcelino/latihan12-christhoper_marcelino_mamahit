<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BiodataController extends Controller
{
    public function index()
    {
        $biodata = Biodata::all();
        return view('biodata.list')->with('biodata', $biodata);
    }

    public function create()
    {
        return view('biodata.create');
    }

    public function edit($id)
    {
        $biodata = Biodata::find($id);
        return view('biodata.edit')->with('biodata', $biodata);
    }

    public function store(Request $request)
    {
        $image = $request->file('image');

        $imagePath = null;

        if ($image) {
            $imagePath = $image->store('images', 'public');
            if (!$imagePath) {
                return redirect()->back()->with('error', 'Failed to upload image');
            }
        }

        Biodata::create([
            ...$request->all(),
            'image_path' => $imagePath
        ]);

        return redirect()->route('biodata.index');
    }

    public function update(Request $request, $id)
    {
        Biodata::find($id)->update($request->all());
        return redirect()->route('biodata.index');
    }

    public function destroy($id)
    {
        Biodata::find($id)->delete();
        return redirect()->route('biodata.index');
    }
}
