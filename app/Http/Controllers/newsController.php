<?php

namespace App\Http\Controllers;

use App\NewsItem;
use Illuminate\Http\Request;



class newsController extends Controller
{

    public function show($id){
        $newsItem = NewsItem::find($id);

        return view('detail',[
            'newsitem' => $newsItem
        ]);
    }

    static public function all()
    {
        $allNews = NewsItem::all();

        return view('news', [
            'allitems' => $allNews
        ]);
    }

    public function add(){
        return view('add');
    }

}
