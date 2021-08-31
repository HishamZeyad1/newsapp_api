<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\CategoriesResource;
use App\Http\Resources\PostsResource;

use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return new CategoriesResource( \App\Models\Category::paginate( env('CATEGORIES_PER_PAGE') ) );

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

    public function posts( $id ){
        $category = Category::whereId($id)->first();

        $posts = $category->posts()->paginate( env('POSTS_PER_PAGE') );

        return new PostsResource( $posts );

    }
    /* */
    public function latestPosts( $id ){
        $category = Category::whereId($id)->first();

        $posts = $category->posts()->orderBy('date_written', 'desc')->paginate( env('POSTS_PER_PAGE') );;

        return new PostsResource( $posts );
    }
    public function oldestPosts( $id ){
        $category = Category::whereId($id)->first();

        $posts = $category->posts()->orderBy('date_written', 'asc')->paginate( env('POSTS_PER_PAGE') );;
        return new PostsResource( $posts );
    }
    public function voteUpPosts( $id ){
        $category = Category::whereId($id)->first();
        $posts = $category->posts()->orderBy('votes_up', 'desc')->paginate( env('POSTS_PER_PAGE') );;
        return new PostsResource( $posts );
    }
    public function voteDownPosts( $id ){
        $category = Category::whereId($id)->first();
        $posts = $category->posts()->orderBy('votes_down', 'desc')->paginate( env('POSTS_PER_PAGE') );;
        return new PostsResource( $posts );
    }

}
