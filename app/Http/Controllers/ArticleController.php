<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
       $data = DB::table('articles')->get();
       $data = Article::sortable()->paginate();
       return view('welcome', ['data' => $data]);
    }
}
