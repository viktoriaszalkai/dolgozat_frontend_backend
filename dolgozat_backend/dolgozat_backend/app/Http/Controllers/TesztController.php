<?php

namespace App\Http\Controllers;

use App\Models\Teszt;
use Illuminate\Http\Request;

class TesztController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Teszt::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Teszt $teszt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teszt $teszt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teszt $teszt)
    {
        //
    }
    public function tesztek_kategoriankent($id)
{
    return Teszt::with('kategoria')
        ->where('kategoriraId', $id)
        ->get();
}
}
