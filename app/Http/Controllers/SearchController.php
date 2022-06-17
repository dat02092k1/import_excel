<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SearchController extends Controller
{
    public function search_students(Request $request) {           
        $name = $request->name;
        $id = $request->id;                
        if(!empty($id)) {
            $student = DB::table('excels')
                ->where('id','like','%'.$id.'%')
                ->get();        
        } 
        else {
            $student = DB::table('excels')
                ->where('name','like','%'.$name.'%')
                ->get();
        }       
        return view('viewFind')->with([
            'student' => $student,         
        ]);
    }
}
