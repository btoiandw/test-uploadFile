<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\DB;

class PostModelController extends Controller
{
    public function index()
    {
        //
        $spost = DB::table('post_models')->get();
        return view('welcome',['spost'=>$spost]);
    }

    public function store(Request $request)
    {
        //dd($request->all());

        if ($file = $request->file('img')) {
            $name = $file->getClientOriginalName();

            if ($file->move('images', $name)) { //move=>เซฟในโฟลเดอร์ images=>ชื่อโฟลเดอร์ $name=>ชื่อไฟล์  ->จะอยู่ในโฟลเดอร์ public
                $post = new PostModel();
                $post->img = $name;
                $post->save();

                return redirect()->route('index');
            }
        }
        return redirect()->back();
    }

   
}
