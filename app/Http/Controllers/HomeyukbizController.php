<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Carbon\Carbon;

class HomeyukbizController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request)
    {
        
        $about = DB::table('abouts')->get();
        $pengalamans = DB::table('wawasans')->get();
        $pendidikans = DB::table('pendidikans')->get();
        $skills = DB::table('skills')->get();
        $kontak = DB::table('abouts')->get();

        return view('yukbiz.home.index',compact('about','pengalamans','pendidikans','skills','kontak'));
    }
     
}
