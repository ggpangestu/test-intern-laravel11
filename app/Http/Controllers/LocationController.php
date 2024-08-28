<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    function tampil()
    {
        $location = Location::get();
        return view('location.tampil', compact('location'));
    }

    function add()
    {
        return view('location.add');
    }

    function submit(Request $request)
    {
        $location = new Location();
        $location->code = $request->code;
        $location->name = $request->name;
        $location->save();

        return redirect()->route('location.tampil');
    }

    function edit($id)
    {
        $location = Location::find($id);
        return view('location.edit', compact('location'));
    }

    function update(Request $request, $id)
    {
        $location = Location::find($id);
        $location->code = $request->code;
        $location->name = $request->name;
        $location->update();

        return redirect()->route('location.tampil');
    }

    function delete($id)
    {
        $location = Location::find($id);
        $location->delete();
        return redirect()->route('location.tampil');
    }
}
