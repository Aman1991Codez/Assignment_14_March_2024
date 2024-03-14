<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\McDonaldsLocation;



use Maatwebsite\Excel\Facades\Excel;
use App\Exports\McDonaldsLocationsExport;



class McDonaldsLocationController extends Controller
{





public function export()
{
    return Excel::download(new McDonaldsLocationsExport, 'mcdonalds_locations.csv');
}



    public function index()
    {
        $mcdonaldsLocations = McDonaldsLocation::all();
        return view('mcdonalds-locations.index', compact('mcdonaldsLocations'));
    }

    public function create()
    {
        return view('mcdonalds-locations.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required',
            'link' => 'required',
            'domain' => 'required',
            'displayed_link' => 'required',
            'snippet' => 'required',
            'prerender' => 'required',
            'block_position' => 'required',
        ]);

        // Create a new McDonaldsLocation instance and fill it with the request data
        McDonaldsLocation::create($request->all());

        // Redirect back to the index page with a success message
        return redirect()->route('mcdonalds-locations.index')->with('success', 'Location added successfully');
    }


    public function show($id)
{
    $mcdonaldsLocation = McDonaldsLocation::findOrFail($id);
    return view('mcdonalds-locations.show', compact('mcdonaldsLocation'));
}


    public function edit($id)
    {
        $mcdonaldsLocation = McDonaldsLocation::findOrFail($id);
        return view('mcdonalds-locations.edit', compact('mcdonaldsLocation'));
    }

    public function update(Request $request, $id)
    {
        $mcdonaldsLocation = McDonaldsLocation::findOrFail($id);
        $mcdonaldsLocation->update($request->all());
        return redirect()->route('mcdonalds-locations.index')->with('success', 'Location updated successfully');
    }

    public function destroy($id)
    {
        $mcdonaldsLocation = McDonaldsLocation::findOrFail($id);
        $mcdonaldsLocation->delete();
        return redirect()->route('mcdonalds-locations.index')->with('success', 'Location deleted successfully');
    }
}
