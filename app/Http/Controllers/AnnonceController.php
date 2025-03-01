<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Http\Requests\StoreAnnonceRequest;
use App\Http\Requests\UpdateAnnonceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $voyages = Annonce::all()->where('company_id', '=',$user->id);
        return view('companyView.company', compact('voyages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companyView.formannonce');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        
        $validatedData = $request->validate([
            'departure_city' => 'required',
            'arrival_city' => 'required',
            'departure_time' => 'required',
            'arrival_time' => 'required',
            'bus_description' => 'required',
            'Thumbnail' => 'required',
            'price' => 'required',
        ]);
        $annonces = Annonce::create([
            'company_id' => $user->id,
            'departure_city' => $validatedData['departure_city'],
            'arrival_city' => $validatedData['arrival_city'],
            'departure_time' => $validatedData['departure_time'],
            'arrival_time' => $validatedData['arrival_time'],
            'bus_description' => $validatedData['bus_description'],
            'Thumbnail' => $validatedData['Thumbnail'],
            'price' => $validatedData['price'],
            'status' => 'valid',
        ]);
        $annonces->save();
        return redirect('/company')->with('success', 'Annonce created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $annonce = Annonce::find($id);
        $user = Auth::user();
        return view('clientView.detailAnnonce', compact('annonce', 'user'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $annonce = Annonce::find($id);
        // dd($annonce);
        return view('companyView.formEdit', compact('annonce'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'departure_city' => 'required',
            'arrival_city' => 'required',
            'departure_time' => 'required',
            'arrival_time' => 'required',
            'bus_description' => 'required',
            'thumbnail' => 'required',
            'price' => 'required',
        ]);
        Annonce::where('id', '=', $id)->update([
            'departure_city' => $validatedData['departure_city'],
            'arrival_city' => $validatedData['arrival_city'],
            'departure_time' => $validatedData['departure_time'],
            'arrival_time' => $validatedData['arrival_time'],
            'bus_description' => $validatedData['bus_description'],
            'thumbnail' => $validatedData['thumbnail'],
            'price' => $validatedData['price'],
        ]);
        return redirect('/company')->with('success', 'Annonce updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        annonce::destroy($id);
        return redirect('/company')->with('success', 'Annonce deleted successfully');
    }
}
