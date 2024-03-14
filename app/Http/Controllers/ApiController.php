<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\McDonaldsLocation;

use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\McDonaldsLocationsExport;


class ApiController extends Controller
{



    public function export()
{
    return Excel::download(new McDonaldsLocationsExport, 'mcdonalds_locations.csv');
}


    public function index()
    {
        $mcdonaldsLocations = McDonaldsLocation::all();
        return response()->json(['data' => $mcdonaldsLocations]);
    }
    

    public function create()
    {
        return response()->json(['message' => 'Create method not supported for API.'], 405);
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required',
            'domain' => 'required',
            'displayed_link' => 'required',
            'snippet' => 'required',
            'prerender' => 'required',
            'block_position' => 'required',
        ]);
    
        McDonaldsLocation::create($request->all());
    
        return response()->json(['message' => 'Location added successfully'], 201);
    }
    


    public function show($id)
    {
        $mcdonaldsLocation = McDonaldsLocation::findOrFail($id);
        return response()->json(['data' => $mcdonaldsLocation]);
    }
    

    public function edit($id)
    {
        return response()->json(['message' => 'Edit method not supported for API.'], 405);
    }
    

    public function update(Request $request, $id)
    {
        $mcdonaldsLocation = McDonaldsLocation::findOrFail($id);
        $mcdonaldsLocation->update($request->all());
        return response()->json(['message' => 'Location updated successfully'], 200);
    }
    

 
    public function destroy($id)
{
    $mcdonaldsLocation = McDonaldsLocation::findOrFail($id);
    $mcdonaldsLocation->delete();
    return response()->json(['message' => 'Location deleted successfully'], 200);
}



// etract data by title , links, snippet.
public function getByTitle(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255', // Example validation rules
    ]);

    $title = $request->input('title');
    $mcdonaldsLocations = McDonaldsLocation::where('title', $title)->get();

    if ($mcdonaldsLocations->isEmpty()) {
        return response()->json(['error' => 'No results found'], 404);
    }

    return response()->json(['data' => $mcdonaldsLocations]);
}

public function getByLink(Request $request)
{
    $request->validate([
        'link' => 'required|string|max:255', // Example validation rules
    ]);

    $link = $request->input('link');
    $mcdonaldsLocations = McDonaldsLocation::where('link', $link)->get();

    if ($mcdonaldsLocations->isEmpty()) {
        return response()->json(['error' => 'No results found'], 404);
    }

    return response()->json(['data' => $mcdonaldsLocations]);
}

public function getBySnippet(Request $request)
{
    $request->validate([
        'snippet' => 'required|string|max:255', // Example validation rules
    ]);

    $snippet = $request->input('snippet');
    $mcdonaldsLocations = McDonaldsLocation::where('snippet', $snippet)->get();

    if ($mcdonaldsLocations->isEmpty()) {
        return response()->json(['error' => 'No results found'], 404);
    }

    return response()->json(['data' => $mcdonaldsLocations]);
}


}
