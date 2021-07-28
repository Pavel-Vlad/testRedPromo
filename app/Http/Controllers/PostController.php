<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function index()
    {
        $news = DB::table('posts')
            ->where('is_favorite', '1')
            ->get();
        return view('welcome', [
            'news' => $news
        ]);
    }

    public function all()
    {
        $news = DB::table('posts')
            ->get();

        return view('all', [
            'news' => $news
        ]);
    }

    public function single($id)
    {
        $news_item = DB::table('posts')
            ->where('id', $id)
            ->first();
        $title = $news_item->title;
        $related_news = DB::table('posts')
            ->where('excerpt', 'like', '% ' . $title . ' %')
            ->limit(3)
            ->get();

        return view('single', [
            'news_item' => $news_item,
            'related_news' => $related_news
        ]);
    }

    public function find(Request $request)
    {
        $findtext = $request->findtext;
        $results = DB::table('posts')
            ->where('title', 'like', '%' . $findtext . '%')
            ->orWhere('excerpt', 'like', '%' . $findtext . '%')
            ->orWhere('full_text', 'like', '%' . $findtext . '%')
            ->get();

        return view('findresults', [
            'results' => $results,
        ]);
    }

    public function toFavor($id)
    {
        DB::table('posts')
            ->where('id', $id)
            ->update(['is_favorite' => 1]);

        return back();
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
