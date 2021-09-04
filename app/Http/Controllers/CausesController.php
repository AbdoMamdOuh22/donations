<?php

namespace App\Http\Controllers;

use App\Cause;
use App\Coverpage;
use App\Donordata;
use App\Titlecause;
use Illuminate\Http\Request;
use App\Http\Requests\contactRequest;


class CausesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cover      =   Coverpage::find(1);
        $titleCauses =  Titlecause::find(1);
        $causes     =   Cause::all();


        return view('causes.index'  ,
            [
                'cover'         =>  $cover         ,
                'titleCauses'   =>  $titleCauses   ,
                'causes'        =>  $causes        ,
            ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cover      =   Coverpage::find(1);
        $cause      =   Cause::find($id);
        $titleCauses =  Titlecause::find(1);

        return view('causes.show'  , [
            'cover'     =>  $cover      ,
            'cause'     =>  $cause      ,
            'titleCauses'   =>  $titleCauses   ,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
