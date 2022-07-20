<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

    public function index()
    {
        // todo esto es para poder colocar las categorias dentro de las cartas de noticias 
        $news = DB::table("news")
        ->join("categories", "news.categories_id","=", "categories.id")
        ->select("news.id", "news.title", "news.subtitle", "news.description", "news.image", "news.created_at", "categories.categories as category")
        ->get();

        return $news;
    }

    public function related($id, $category)
    {
        $related_news = News::where([
            ["categories_id", "=", $category],
            ["id", "<>", $id]
        ])
        ->get();
        if(count($related_news) > 0){
            return $related_news;
        }else{
            return response()->json(["message"=>"No hay noticias relacionadas"]);
        };
    }

    public function search($keyword)
    {
        $results = News::query()
        ->where("title", "like", "%{$keyword}%")
        ->orWhere("subtitle", "like", "%{$keyword}%")
        ->get();

        if(count($results) > 0){
            return $results;
        }else{
            return response()->json(["message"=>"No se encontraron resultados ".$keyword]);
        }
    }

    public function detail($id)
    {
        $item = DB::table("news")
        ->join("categories", "news.categories_id","=", "categories.id")
        ->select("news.id", "news.title", "news.subtitle", "news.description", "news.image", "news.created_at", "categories.categories as category")
        ->where('news.id', '=', $id)
        ->get();

        return $item;
    }

    public function filter_for_categories(Request $request){
        $categories = json_decode($request->categories);
        $news = News::query()->whereIn("categories_id", $categories)->get();
        return $news;
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
        //return 'news ID -> '.$id;
        return view('custom', ['id' => $id]);
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