<?php

namespace App\Http\Controllers;

use App\Specialty;
use App\Anatomy;
use App\Posts;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Posts::where(function($q) use ($request) {
            if (isset($request['post_name']) && !empty($request['post_name'])) {
                $q->where("title",'LIKE', '%' . $request['post_name'] . '%');
            }
            if (isset($request['specialty_id']) && !empty($request['specialty_id'])) {
                $q->where("specialty_id", $request['specialty_id']);
            }
            if (isset($request['anatomy_id']) && !empty($request['anatomy_id'])) {
                $q->where("anatomy_id", $request['anatomy_id']);
            }
        })->orderBy('updated_at', 'DESC')->paginate(2);

        foreach ($posts as $key => $post) {
            $posts[$key]['image'] = explode(",", $post['image']);
        }

        $data = [
            'specialty' => Specialty::all(),
            'anatomy' => Anatomy::all(),
            'posts' => $posts
        ];
        return view('social.feed', $data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function add_feed_list(Request $request)
    {
        $posts = Posts::where(function($q) use ($request) {
            if (isset($request['post_name']) && !empty($request['post_name'])) {
                $q->where("title",'LIKE', '%' . $request['post_name'] . '%');
            }
            if (isset($request['specialty_id']) && !empty($request['specialty_id'])) {
                $q->where("specialty_id", $request['specialty_id']);
            }
            if (isset($request['anatomy_id']) && !empty($request['anatomy_id'])) {
                $q->where("anatomy_id", $request['anatomy_id']);
            }
        })->orderBy('updated_at', 'DESC')->paginate(2);

        return response()->json($posts);
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
