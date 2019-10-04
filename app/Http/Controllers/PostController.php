<?php

namespace App\Http\Controllers;

use App\Specialty;
use App\Anatomy;
use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
    }
    public function index()
    {
        $list = Posts::all();
        return view('post.index', ['list'=>$list]);
    }
    public function post($id)
    {
        session(['new_post_form' => []]);
        return view('post.show', ['test'=>'test']);
    }
    public function remove($id)
    {
        return view('post.show', ['test'=>'test']);
    }
    public function step1(Request $request)
    {
        $new_post_form = session('new_post_form');
        if ($request->isMethod('post')) {
            $case = $request->input('case');

// Retrieve a piece of data from the session...
//            $value = session('key');
// Specifying a default value...
//            $value = session('key', 'default');
// Store a piece of data in the session...
//            session(['key' => 'value']);

            $new_post_form['case'] = $case;
            session(['new_post_form' => $new_post_form]);
            return redirect()->route('post-add-step2');
        }
        $case = '';
        return view('post.add.step1', ['case'=>$case,'new_post_form'=>$new_post_form]);
    }
    public function step2(Request $request)
    {
        $new_post_form = session('new_post_form');
        if ($request->isMethod('post')) {





            if ($request->file('photo'))
            {
                $file     = request()->file('photo');
                Storage::disk('uploads')->put('', $file);
            }







            $case2 = $request->input('case2');
            $new_post_form['case2'] = $case2;
            session(['new_post_form' => $new_post_form]);
            return redirect()->route('post-add-step3');
        }
        $case2 = '';
        return view('post.add.step2',['case2'=>$case2,'new_post_form'=>$new_post_form]);
    }
    public function step3(Request $request)
    {
        if ($request->isMethod('post')) {
            return redirect()->route('post-add-step4');
        }
        $case3 = '';
        return view('post.add.step3',['case3'=>$case3]);
    }
    public function step4(Request $request)
    {
        if ($request->isMethod('post')) {
            return redirect()->route('post-add-step5');
        }
        $case4 = '';
        return view('post.add.step4',['case4'=>$case4]);
    }
    public function step5(Request $request)
    {
        if ($request->isMethod('post')) {
            return redirect()->route('post-add-step6');
        }
        $case5 = '';
        return view('post.add.step5', ['case5'=>$case5]);
    }
    public function step6(Request $request)
    {
        if ($request->isMethod('post')) {
            return redirect()->route('post-page');
        }
        $case6 = '';
        return view('post.add.step6', ['case6'=>$case6]);
    }



}
