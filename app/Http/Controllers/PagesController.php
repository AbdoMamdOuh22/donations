<?php

namespace App\Http\Controllers;

// S.T Code => Use Model
use App\Http\Requests\sendEmailRequest;
use App\Titlecontact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Headeerlink;
use  App\Slide;
use  App\Social;
use App\Abouthome;
use App\Titlehome;
use App\Abouticonhome;
use App\Brand;
use App\Cause;
use App\Event;
use App\Coverpage;
use App\Ourvision;
use App\Titleabout;
use App\Titlecause;
use App\Team;
use App\Allblog;
use App\Newcategory;
use App\Http\Requests\contactRequest;
use App\Contactu;
use App\Email;
use App\Donordata;
use App\Footer;

// E.D Code => Use Model

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // S.T Code => Session
    public function __construct()
    {
        $social = Social::find(1);
        Session::PUT('facebook' , $social['facebook']);
        Session::PUT('twitter' , $social['twitter']);
        Session::PUT('pinterest' , $social['pinterest']);

        $header = Headeerlink::find(1);
        Session::PUT('home'     ,   $header['Home']);
        Session::PUT('about'    ,   $header['About']);
        Session::PUT('Causes'   ,   $header['Causes']);
        Session::PUT('Event'    ,   $header['Event']);
        Session::PUT('blog'     ,   $header['Blog']);
        Session::PUT('contact'  ,   $header['Contact']);

       $footer = Footer::find(1);
        Session::PUT('about_footer'     ,   $footer['about_footer']);
        Session::PUT('title_address'    ,   $footer['title_address']);
        Session::PUT('address'          ,   $footer['address']);
        Session::PUT('phone'            ,   $footer['phone']);
        Session::PUT('phone_num'        ,   $footer['phone_num']);
        Session::PUT('email'            ,   $footer['email']);
        Session::PUT('email_acc'        ,   $footer['email_acc']);
        Session::PUT('office_time'      ,   $footer['office_time']);
        Session::PUT('time'             ,   $footer['time']);
        Session::PUT('title_links'      ,   $footer['title_links']);
        Session::PUT('home'             ,   $footer['home']);
        Session::PUT('about'            ,   $footer['about']);
        Session::PUT('causes'           ,   $footer['causes']);
        Session::PUT('event'            ,   $footer['event']);
        Session::PUT('blog'             ,   $footer['blog']);
        Session::PUT('contact'          ,   $footer['contact']);
    }
    // E.D Code => Session

    // S.T Code => Index
    public function index()
    {
        $slides     =   Slide::all();
        $slides->load('translations');
        $aboutHome  =   Abouthome::find(1);
        $titleHome  =   Titlehome::find(1);
        $causes     =   Cause::limit(6)->orderBy('id' , 'desc')->get();
        $aboutIcon  =   Abouticonhome::find(1);
        $events     =   Event::limit(2)->orderBy('id' , 'desc')->get();
        $brands     =   Brand::all();
        $blogs      =   Allblog::limit(3)->get();
        $titleCauses =  Titlecause::find(1);
        return view('index' ,
            [
                'slides'    =>  $slides     ,
                'aboutHome' =>  $aboutHome  ,
                'titleHome' =>  $titleHome  ,
                'causes'    =>  $causes     ,
                'aboutIcon' =>  $aboutIcon  ,
                'events'    =>  $events     ,
                'brands'    =>  $brands     ,
                'blogs'     =>  $blogs      ,
                'titleCauses'   =>  $titleCauses   ,
            ]);

    }
    // E.D Code => Index

    // S.T Code => About
    public  function about ()
    {
        $cover      =   Coverpage::find(1);
        $titleAbout =   Titleabout::find(1);
        $aboutIcon  =   Abouticonhome::find(1);
        $ourVisions =   Ourvision::limit(3)->get();
        $brands     =   Brand::all();
        $teams      =   Team::all();


        return view('pages.about' ,
        [
                'cover'         =>  $cover      ,
                'titleAbout'    => $titleAbout  ,
                'aboutIcon'     =>  $aboutIcon  ,
                'ourVisions'    =>  $ourVisions ,
                'brands'        =>  $brands     ,
                'teams'         =>  $teams      ,
        ]);
    }
    // E.D Code => About


    // S.T Code => Causes
    public  function causes ()
    {
        $cover      =   Coverpage::find(1);
        $titleCauses =  Titlecause::find(1);
        $causes     =   Cause::all();
        return view('pages.causes'  ,
        [
                'cover'         =>  $cover         ,
                'titleCauses'   =>  $titleCauses   ,
                'causes'        =>  $causes        ,
        ]);
    }
    // E.D Code => Causes

    // S.T Code => Blog
    public  function blog ()
    {
        $cover          =   Coverpage::find(1);
        $allBlogs       =   Allblog::all();
        $newcategorys   =   Newcategory::all();
        $num            =   [];
        foreach ($newcategorys as $newcategoryNum) {
            $blogNum    =   Allblog::where('categorie' , $newcategoryNum['id'])->get();
            $num   []   =   $blogNum->count();
        };
        return view('pages.blog' , [
            'cover'         =>  $cover          ,
            'allBlogs'      =>  $allBlogs       ,
            'newcategorys'  =>  $newcategorys   ,
            'num'           =>  $num            ,
        ]);

    }
    // E.D Code => Blog

    // S.T Code => Contact
    public  function contact ()
    {
        $cover          =   Coverpage::find(1);
        $titleContact   =   Titlecontact::find(1);
        $contactUS      =   Contactu::all();
        return view('pages.contact' , [
            'cover'         =>  $cover          ,
            'titleContact'  =>  $titleContact   ,
            'contactUS'     =>  $contactUS      ,
        ]);
    }
    // E.D Code => Contact

    // S.T Code => Search
    public function search (request $request) {
        $searchView =   $request->searchBlog;
        $cover          =   Coverpage::find(1);
        $allBlogs       =   Allblog::all();
        $newcategorys   =   Newcategory::all();
        $num            =   [];
        foreach ($newcategorys as $newcategoryNum) {
            $blogNum    =   Allblog::where('categorie' , $newcategoryNum['id'])->get();
            $num   []   =   $blogNum->count();
        };
        if($searchView) {
            $allBlogs  =   Allblog::where('heading' , 'LIKE' , "%$searchView%")->get();
        } else {
            $allBlogs   =   Allblog::simplePaginate(2);
        }
        return view('pages.search' , [
            'cover'         =>  $cover          ,
            'allBlogs'      =>  $allBlogs       ,
            'newcategorys'  =>  $newcategorys   ,
            'num'           =>  $num            ,
        ]);
    }
    // E.D Code => Contact

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
    public  function email(sendEmailRequest $request) {
        Email::create([
            'name'  =>  $request->name ,
            'email' =>  $request->email ,
            'phone' =>  $request->phone ,
            'msm'   =>  $request->msm   ,
        ]);
        return redirect()->back();
    }
    public function store(contactRequest $request)
    {
        Donordata::create([
            'first_name'            => $request-> first_name ,
            'last_name'             =>  $request-> last_name ,
            'email_address'         =>  $request-> email_address ,
            'anonymous_donation'    =>  $request->  anonymous_donation ,
            'comment'               =>  $request-> comment  ,
        ] );
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
