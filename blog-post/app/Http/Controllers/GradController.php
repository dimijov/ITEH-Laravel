<?php

namespace App\Http\Controllers;

use App\Models\Grad;
use Illuminate\Http\Request;
use App\Http\Resources\GradResource;
use Illuminate\Support\Facades\Validator;

class GradController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sviGradovi = Grad::all();
        return GradResource::collection($sviGradovi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string',
            'drzava' => 'required|string',
            'brojStanovnika' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['Greska u zahtevu!', $validator->errors()]);
        }

        $grad = Grad::create([
            'ime' => $request->ime,
            'drzava' => $request->drzava,
            'brojStanovnika' => $request->brojStanovnika
        ]);

        return response()->json(['Novi grad ubačen u bazu!.', new GradResource($grad)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function show(Grad $grad)
    {
        return new GradResource($grad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function edit(Grad $grad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grad $grad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grad  $grad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grad $grad)
    {
        $grad->delete();
        return response()->json('Obrisan je željeni grad!');
    }
}
