<?php

namespace App\Http\Controllers;

use App\Coverpage;
use Illuminate\Http\Request;
use App\Newcategory;
use App\Allblog;

class NewcategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "we";
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
        $blogs  =   Allblog::where('categorie' , $id)->get();
        $cover      =   Coverpage::find(1);
        $allBlogs   =   Allblog::all();
        $newcategorys   =   Newcategory::all();
        foreach ($newcategorys as $newcategoryNum) {
            $blogNum    =   Allblog::where('categorie' , $newcategoryNum['id'])->get();
            $num   []   =   $blogNum->count();
        };
        $num            =   [];

        return view('categories.show' ,
            [
                'blogs'         =>  $blogs          ,
                'cover'         =>  $cover          ,
                'allBlogs'      =>  $allBlogs       ,
                'newcategorys' =>  $newcategorys   ,
                'num'           =>  $num            ,
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
