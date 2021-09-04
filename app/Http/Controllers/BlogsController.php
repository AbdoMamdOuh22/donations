<?php

namespace App\Http\Controllers;

use App\Allblog;
use App\Comment;
use App\Coverpage;
use App\Newcategory;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cover          =   Coverpage::find(1);
        $allBlogs       =   Allblog::all();
        $newcategorys   =   Newcategory::all();
        $num            =   [];
        foreach ($newcategorys as $newcategoryNum) {
            $blogNum    =   Allblog::where('categorie' , $newcategoryNum['id'])->get();
            $num   []   =   $blogNum->count();
        };
        return view('blog.index' , [
            'cover'         =>  $cover          ,
            'allBlogs'      =>  $allBlogs       ,
            'newcategorys'  =>  $newcategorys   ,
            'num'           =>  $num            ,
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
        $cover          =   Coverpage::find(1);
        $Blog           =   Allblog::find($id);
        $newcategorys   =   Newcategory::all();
        $num            =   [];
        foreach ($newcategorys as $newcategoryNum) {
            $blogNum    =   Allblog::where('categorie' , $newcategoryNum['id'])->get();
            $num   []   =   $blogNum->count();
        };
        $comments       =   Comment::all();
        return view('blog.show' , [
            'cover'         =>  $cover          ,
            'Blog'          =>  $Blog       ,
            'newcategorys'  =>  $newcategorys   ,
            'num'           =>  $num            ,
            'comments'      =>  $comments       ,

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
